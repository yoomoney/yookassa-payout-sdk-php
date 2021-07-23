<?php

/**
 * The MIT License
 *
 * Copyright (c) 2020 "YooMoney", NBСO LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace YooKassaPayout\Request\Builders;


use Exception;
use InvalidArgumentException;
use Traversable;
use YooKassaPayout\Common\Exceptions\InvalidRequestException;
use YooKassaPayout\Request\AbstractDepositionRequest;

/**
 * Абстрактный класс для сборки запроса выплаты из массива
 *
 * @package YooKassaPayout
 */
abstract class AbstractRequestBuilder
{
    /**
     * Запрос выплаты
     * @var AbstractDepositionRequest
     */
    protected $objectRequest;

    /**
     * Строит запрос, валидирует его и возвращает, если все прошло нормально
     * @param array $options Массив свойств запроса, если нужно их установить перед сборкой
     * @return AbstractDepositionRequest Инстанс собранного запроса
     *
     * @throws InvalidRequestException Выбрасывается если при валидации запроса произошла ошибка
     * массиве настроек
     */
    public function build(array $options = null)
    {
        if (!empty($options)) {
            $this->setOptions($options);
        }
        try {
            $this->objectRequest->clearValidationError();
            if (!$this->objectRequest->validate()) {
                throw new InvalidRequestException($this->objectRequest);
            }
        } catch (InvalidRequestException $e) {
            throw $e;
        } catch (Exception $e) {
            throw new InvalidRequestException($this->objectRequest, 0, $e);
        }

        return $this->objectRequest;
    }

    /**
     * Устанавливает свойства запроса из массива
     * @param array|Traversable $options Массив свойств запроса
     *
     * @return AbstractRequestBuilder Инстанс собранного запроса
     */
    public function setOptions($options)
    {
        if (empty($options)) {
            return $this;
        }
        if (!is_array($options) && !($options instanceof Traversable)) {
            throw new InvalidArgumentException('Invalid options value in setOptions method');
        }
        foreach ($options as $property => $value) {
            $method = 'set' . ucfirst($property);
            if (method_exists($this->objectRequest, $method)) {
                $this->objectRequest->{$method} ($value);
            } else {
                $tmp = preg_replace('/\_(\w)/', '\1', $property);
                $method = 'set' . ucfirst($tmp);
                if (method_exists($this->objectRequest, $method)) {
                    $this->{$method} ($value);
                }
            }
        }

        return $this;
    }
}