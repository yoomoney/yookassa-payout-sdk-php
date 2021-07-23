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
 * Абстрактный класс запроса
 *
 * @package YooKassaPayout
 */
abstract class AbstractRequest
{
    /**
     * Тип запроса
     * @var string
     */
    protected $requestName;

    /**
     * Инстанс собираемого запроса
     * @var AbstractRequest
     */
    protected $currentObject;

    /**
     * Последняя ошибка валидации текущего запроса
     * @var string
     */
    private $_validationError;

    /**
     * Формат запроса
     * @var FormatType
     */
    protected $formatType = FormatType::XML;

    /**
     * Идентификатор операции
     *
     * Должен быть уникальным для контрагента на протяжении всей истории операций.
     * Рекомендуемые значения: целое положительное число в десятичной системе счисления.
     * @var string
     */
    protected $clientOrderId;

    /**
     * Дата и время формирования запроса операции на стороне и по часам контрагента.
     * @var DateTime
     */
    protected $requestDT;

    /**
     * AbstractRequest constructor.
     * @param string|null $clientOrderId Идентификатор операции
     */
    public function __construct($clientOrderId = null)
    {
        $this->clientOrderId = $clientOrderId ?: $this->getRandomId();
        $this->requestDT     = RequestDateTime::getDateTime();
    }

    /**
     * Валидирует текущий запрос, проверяет все ли нужные свойства установлены
     * @return bool True если запрос валиден, false если нет
     */
    abstract public function validate();

    /**
     * Возвращает объект для преобразования запроса в массив
     * @return AbstractRequestSerializer Объект для преобразования запроса в массив
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
     * Устанавливает тип запроса
     * @param string $value Тип запроса
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
     * Возвращает тип запроса
     * @return string Тип запроса
     */
    public function getRequestName()
    {
        return $this->requestName . 'Request';
    }

    /**
     * Устанавливает дату и время запроса
     * @param string $requestDT Дата и время запроса
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
     * Возвращает установленные дату и время запроса
     * @return DateTime|string Дата и время запроса
     */
    public function getRequestDT()
    {
        return $this->requestDT;
    }

    /**
     * Устанавливает идентификатор операции
     * @param string $clientOrderId Идентификатор операции
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
     * Возвращает идентификатор операции
     * @return string Идентификатор операции
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * Устанавливает формат запроса xml|json
     * @param FormatType $type Формат запроса
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
     * @return FormatType Формат запроса
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