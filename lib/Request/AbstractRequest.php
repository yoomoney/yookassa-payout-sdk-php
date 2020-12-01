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

use DateTime;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\TypeCast;
use YooKassaPayout\Model\FormatType;
use YooKassaPayout\Model\RequestDateTime;
use YooKassaPayout\Request\Serializers\AbstractRequestSerializer;

/**
 * Class AbstractRequest
 *
 * @package YooKassaPayout\Request
 */
abstract class AbstractRequest
{
    /**
     * @var string
     */
    protected $requestName;

    /**
     * @var AbstractRequest Инстанс собираемого запроса
     */
    protected $currentObject;

    /**
     * @var string Последняя ошибка валидации текущего запроса
     */
    private $_validationError;

    /**
     * @var FormatType
     */
    protected $formatType = FormatType::XML;

    /**
     * @var string
     */
    protected $clientOrderId;

    /**
     * @var DateTime
     */
    protected $requestDT;

    public function __construct($clientOrderId = null)
    {
        $this->clientOrderId = $clientOrderId ? $clientOrderId : $this->getRandomId();
        $this->requestDT     = RequestDateTime::getDateTime();
    }

    /**
     * Валидирует текущий запрос, проверяет все ли нужные свойства установлены
     * @return bool True если запрос валиден, false если нет
     */
    abstract public function validate();

    /**
     * @return AbstractRequestSerializer
     */
    abstract public function getSerializer();

    /**
     * Очищает статус валидации текущего запроса
     */
    public function clearValidationError()
    {
        $this->_validationError = null;
    }

    /**
     * Устанавливает ошибку валидации
     * @param string $value Ошибка, произошедшая при валидации объекта
     */
    protected function setValidationError($value)
    {
        $this->_validationError = $value;
    }

    /**
     * Возвращает последнюю ошибку валидации
     * @return string Последняя произошедшая ошибка валидации
     */
    public function getLastValidationError()
    {
        return $this->_validationError;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setRequestName($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid requestName type', 0, 'requestName', $value);
        }

        $this->requestName = (string)$value;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestName()
    {
        return $this->requestName . 'Request';
    }

    /**
     * Устанавливает время запроса
     * @param string $requestDT
     * @return $this
     */
    public function setRequestDT($requestDT)
    {
        if (!TypeCast::canCastToString($requestDT)) {
            throw new InvalidPropertyValueTypeException('Invalid requestDT type', 0, 'requestDT', $requestDT);
        }

        $this->requestDT = (string)$requestDT;
        return $this;
    }

    /**
     * Возвращает установленое время запроса
     * @return DateTime|string
     */
    public function getRequestDT()
    {
        return $this->requestDT;
    }

    /**
     * @param string $clientOrderId
     * @return $this
     */
    public function setClientOrderId($clientOrderId)
    {
        if (!TypeCast::canCastToString($clientOrderId)) {
            throw new InvalidPropertyValueTypeException('Invalid clientOrderId type', 0, 'clientOrderId', $clientOrderId);
        }

        $this->clientOrderId = (string)$clientOrderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * Устанавливает формат запроса xml|json
     * @param FormatType $type
     * @return $this
     */
    public function setFormatType(FormatType $type)
    {
        if (!FormatType::valueExists($type)) {
            throw new InvalidPropertyValueTypeException('Invalid formatType type', 0, 'formatType', $type);
        }
        $this->formatType = $type;
        return $this;
    }

    /**
     * Возвращает формат запроса xml|json
     * @return FormatType
     */
    public function getFormatType()
    {
        return $this->formatType;
    }

    /**
     * Рандомное значение (используется для clientOrderId)
     * @return string
     */
    private function getRandomId()
    {
        return time() . mt_rand(0, 100);
    }
}