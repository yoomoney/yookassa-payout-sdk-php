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

namespace YooKassaPayout\Request;


use YooKassaPayout\Common\Exceptions\InvalidPropertyValueException;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\TypeCast;
use YooKassaPayout\Request\Builders\SynonymCardRequestBuilder;
use YooKassaPayout\Request\Serializers\SynonymCardRequestSerializer;

/**
 * Класс для создания запроса на получение синонима карты
 *
 * @example 01-client.php 18 9 Получение синонима карты
 *
 * @package YooKassaPayout\Request
 */
class SynonymCardRequest
{
    /**
     * Формат ответа на запрос - json
     * @const string
     */
    const FORMAT_JSON = 'json';

    /**
     * Формат ответа на запрос - redirect
     * @const string
     */
    const FORMAT_REDIRECT = 'redirect';

    /**
     * Список поддерживаемых форматов ответа
     * @var array
     */
    private static $validResponseFormats = [
        self::FORMAT_JSON,
        self::FORMAT_REDIRECT,
    ];
    /**
     * Номер банковской карты
     * @var string
     */
    protected $skrDestinationCardNumber;

    /**
     * Формат ответа на запрос
     * @var string
     */
    protected $skrResponseFormat = self::FORMAT_JSON;

    /**
     * Адрес для перенаправления при ошибке
     * @var string
     */
    protected $skrErrorUrl;

    /**
     * Адрес для перенаправления при успехе
     * @var string
     */
    protected $skrSuccessUrl;

    /**
     * SynonymCardRequest constructor.
     */
    public function __construct()
    {
        if (isset($_SERVER['PATH_INFO'])) {
            $this->setSkrErrorUrl($_SERVER['PATH_INFO'])
                 ->setSkrSuccessUrl($_SERVER['PATH_INFO']);
        }
    }

    /**
     * Устанавливает номер банковской карты
     * @param string $skrDestinationCardNumber Номер банковской карты
     * @return $this
     */
    public function setSkrDestinationCardNumber($skrDestinationCardNumber)
    {
        if (!is_numeric((string)$skrDestinationCardNumber)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid skrDestinationCardNumber value type, for example valid value: 5555555555554444',
                0,
                'skrDestinationCardNumber',
                $skrDestinationCardNumber
            );
        }
        $this->skrDestinationCardNumber = (string)$skrDestinationCardNumber;
        return $this;
    }

    /**
     * Возвращает номер банковской карты
     * @return string Номер банковской карты
     */
    public function getSkrDestinationCardNumber()
    {
        return $this->skrDestinationCardNumber;
    }

    /**
     * Устанавливает формат ответа на запрос
     * @param string $skrResponseFormat Формат ответа на запрос
     * @return SynonymCardRequest
     */
    public function setSkrResponseFormat($skrResponseFormat = self::FORMAT_JSON)
    {
        if (!in_array($skrResponseFormat, self::getValidResponseFormats())) {
            throw new InvalidPropertyValueException(
                "Invalid skrResponseFormat value, valid values: [" . implode(', ', self::getValidResponseFormats()) . "]",
                0,
                'skrResponseFormat',
                $skrResponseFormat
            );
        }
        $this->skrResponseFormat = $skrResponseFormat;
        return $this;
    }

    /**
     * Возвращает формат ответа на запрос
     * @return string Формат ответа на запрос
     */
    public function getSkrResponseFormat()
    {
        return $this->skrResponseFormat;
    }

    /**
     * Устанавливает адрес для перенаправления при ошибке
     * @param string $skrErrorUrl Адрес для перенаправления при ошибке
     * @return SynonymCardRequest
     */
    public function setSkrErrorUrl($skrErrorUrl)
    {
        if (!TypeCast::canCastToString($skrErrorUrl)) {
            throw new InvalidPropertyValueTypeException('Invalid skrErrorUrl value type', 0, 'skrErrorUrl', $skrErrorUrl);
        }
        $this->skrErrorUrl = (string)$skrErrorUrl;
        return $this;
    }

    /**
     * Возвращает адрес для перенаправления при ошибке
     * @return string Адрес для перенаправления при ошибке
     */
    public function getSkrErrorUrl()
    {
        return $this->skrErrorUrl;
    }

    /**
     * Устанавливает адрес для перенаправления при успехе
     * @param string $skrSuccessUrl Адрес для перенаправления при успехе
     * @return SynonymCardRequest
     */
    public function setSkrSuccessUrl($skrSuccessUrl)
    {
        if (!TypeCast::canCastToString($skrSuccessUrl)) {
            throw new InvalidPropertyValueTypeException('Invalid skrSuccessUrl value type', 0, 'skrSuccessUrl', $skrSuccessUrl);
        }
        $this->skrSuccessUrl = (string)$skrSuccessUrl;
        return $this;
    }

    /**
     * Возвращает адрес для перенаправления при успехе
     * @return string Адрес для перенаправления при успехе
     */
    public function getSkrSuccessUrl()
    {
        return $this->skrSuccessUrl;
    }

    /**
     * Возвращает объект для преобразования запроса SynonymCardRequest в массив
     * @return SynonymCardRequestSerializer Объект для преобразования запроса SynonymCardRequest в массив
     */
    public function getSerializer()
    {
        return new SynonymCardRequestSerializer();
    }

    /**
     * Возвращает объект для сборки запроса SynonymCardRequest из массива
     * @return SynonymCardRequestBuilder Объект для сборки запроса SynonymCardRequest из массива
     */
    public static function getBuilder()
    {
        return new SynonymCardRequestBuilder();
    }

    /**
     * Возвращает список поддерживаемых форматов ответа
     * @return array Список поддерживаемых форматов ответа
     */
    private function getValidResponseFormats()
    {
        return self::$validResponseFormats;
    }
}