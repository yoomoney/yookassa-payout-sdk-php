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

use YooKassaPayout\Common\Exceptions\EmptyPropertyValueException;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\TypeCast;
use YooKassaPayout\Model\CurrencyCode;
use YooKassaPayout\Model\Recipient\BaseRecipient;
use YooKassaPayout\Model\Recipient\BankAccountRecipient;
use YooKassaPayout\Model\Recipient\BankCardRecipient;
use YooKassaPayout\Request\Serializers\DepositionRequestSerializer;

/**
 * Абстрактный класс запроса выплат
 *
 * @package YooKassaPayout
 */
abstract class AbstractDepositionRequest extends AbstractRequest
{
    /**
     * Идентификатор получателя перевода
     * @var string
     */
    protected $dstAccount;

    /**
     * Сумма перевода
     * @var numeric
     */
    protected $amount;

    /**
     * Код валюты перевода
     *
     * Возможное значение — 643 (российский рубль)
     * @var int|string
     */
    protected $currency = CurrencyCode::RUB;

    /**
     * Основание для зачисления перевода
     * @var string
     */
    protected $contract;

    /**
     * Элемент запроса для передачи дополнительных параметров перевода
     * @var BaseRecipient|BankCardRecipient|BankAccountRecipient|array
     */
    protected $paymentParams;

    /**
     * @inheritDoc
     */
    public function validate()
    {
        return true;
    }

    /**
     * Устанавливает идентификатор получателя перевода
     * @param string|int $value Идентификатор получателя перевода
     * @return AbstractDepositionRequest
     */
    public function setDstAccount($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid dstAccount value type', 0, 'dstAccount', $value);
        } elseif (empty($value)) {
            throw new EmptyPropertyValueException('Empty dstAccount value', 0, 'dstAccount');
        }

        $this->dstAccount = $value;

        return $this;
    }

    /**
     * Возвращает идентификатор получателя перевода
     * @return string Идентификатор получателя перевода
     */
    public function getDstAccount()
    {
        return $this->dstAccount;
    }

    /**
     * Устанавливает сумму перевода
     * @param numeric $value Сумма перевода
     * @return $this
     */
    public function setAmount($value)
    {
        if (empty($value)) {
            throw new EmptyPropertyValueException('Empty amount value', 0, 'amount.value');
        } elseif (!is_numeric((string)$value)) {
            throw new InvalidPropertyValueTypeException('Invalid amount value type', 0, 'amount.value', $value);
        } else {
            $this->amount = sprintf('%.2f', round((string)$value, 2));
        }

        return $this;
    }

    /**
     * Возвращает сумму перевода
     * @return numeric Сумма перевода
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Устанавливает код валюты перевода
     * @param int|string $value Код валюты перевода
     * @return $this
     */
    public function setCurrency($value = CurrencyCode::RUB)
    {
        if (empty($value)) {
            throw new EmptyPropertyValueException('Empty currency value', 0, 'currency');
        } elseif (!is_numeric((string)$value)) {
            throw new InvalidPropertyValueTypeException('Invalid currency value type', 0, 'currency', $value);
        } else {
            $this->currency = (string)$value;
        }
        return $this;
    }

    /**
     * Возвращает код валюты перевода
     * @return string Код валюты перевода
     */
    public function getCurrency()
    {
        return (string)$this->currency;
    }

    /**
     * Устанавливает основание для зачисления перевода
     * @param string $value Основание для зачисления перевода
     * @return AbstractDepositionRequest
     */
    public function setContract($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract value type', 0, 'dstAccount', $value);
        }

        $this->contract = (string)$value;
        return $this;
    }

    /**
     * Возвращает основание для зачисления перевода
     * @return string Основание для зачисления перевода
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Устанавливает дополнительные параметры перевода
     * @param BaseRecipient|BankCardRecipient|BankAccountRecipient|array $params Дополнительные параметры перевода
     * @return $this
     */
    public function setPaymentParams($params)
    {
        if ($params instanceof BaseRecipient || is_array($params)) {
            $this->paymentParams = $params;
        }  else {
            throw new InvalidPropertyValueTypeException(
                'Invalid paymentParams type',
                0,
                'paymentParams',
                $params
            );
        }
        return $this;
    }

    /**
     * Возвращает дополнительные параметры перевода
     * @return BaseRecipient|BankCardRecipient|BankAccountRecipient|array Дополнительные параметры перевода
     */
    public function getPaymentParams()
    {
        return $this->paymentParams;
    }

    /**
     * Проверяет установлены ли дополнительные параметры перевода
     * @return bool Флаг установки дополнительных параметров перевода
     */
    public function hasPaymentParams()
    {
        return !empty($this->paymentParams);
    }

    /**
     * Возвращает объект для преобразования запроса в массив
     * @return Serializers\DepositionRequestSerializer Объект для преобразования запроса в массив
     */
    public function getSerializer()
    {
        return new DepositionRequestSerializer();
    }
}
