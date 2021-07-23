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

namespace YooKassaPayout\Model\Recipient;


use Exception;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\DateParser;
use YooKassaPayout\Common\Helpers\TypeCast;

/**
 * Класс для построения параметров получателя при выплате на банковский счет, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest
 *
 * @example 02-deposition.php 62 27 Выплата на банковский счет
 *
 * @package YooKassaPayout
 */
class BankAccountRecipient extends BaseRecipient
{
    /**
     * Номер банковского счета получателя
     * @var int|string
     */
    protected $custAccount;
    /**
     * БИК банка
     * @var int|string
     */
    protected $bankBIK;
    /**
     * Назначение платежа или иные сведения для банка
     * @var string
     */
    protected $paymentPurpose;
    /**
     * Наименование банка
     * @var string
     */
    protected $bankName;
    /**
     * Город, в котором находится отделение банка
     * @var string
     */
    protected $bankCity;
    /**
     * Корреспондентский счет отделения банка
     * @var int|string
     */
    protected $bankCorAccount;

    /**
     * Устанавливает номер банковского счета получателя
     * @param int|string $value Номер банковского счета получателя
     * @return $this
     */
    public function setCustAccount($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid CustAccount value type', 0, 'CustAccount', $value);
        }

        $this->custAccount = (string)$value;
        return $this;
    }

    /**
     * Возвращает номер банковского счета получателя
     * @return int|string Номер банковского счета получателя
     */
    public function getCustAccount()
    {
        return $this->custAccount;
    }

    /**
     * Устанавливает БИК банка
     * @param int|string $value БИК банка
     * @return $this
     */
    public function setBankBIK($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract BankBIK type', 0, 'BankBIK', $value);
        }

        $this->bankBIK = (string)$value;
        return $this;
    }

    /**
     * Возвращает БИК банка
     * @return string БИК банка
     */
    public function getBankBIK()
    {
        return $this->bankBIK;
    }

    /**
     * Устанавливает назначение платежа или иные сведения для банка
     * @param string $value Назначение платежа или иные сведения для банка
     * @return $this
     */
    public function setPaymentPurpose($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract payment_purpose type', 0, 'payment_purpose', $value);
        }

        $this->paymentPurpose = (string)$value;
        return $this;
    }

    /**
     * Возвращает назначение платежа или иные сведения для банка
     * @return string Назначение платежа или иные сведения для банка
     */
    public function getPaymentPurpose()
    {
        return $this->paymentPurpose;
    }

    /**
     * Устанавливает наименование банка
     * @param string $value Наименование банка
     * @return $this
     */
    public function setBankName($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract BankName type', 0, 'BankName', $value);
        }

        $this->bankName = (string)$value;
        return $this;
    }

    /**
     * Возвращает наименование банка
     * @return string Наименование банка
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Устанавливает город, в котором находится отделение банка
     * @param string $value Город, в котором находится отделение банка
     * @return $this
     */
    public function setBankCity($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract BankCity type', 0, 'BankCity', $value);
        }

        $this->bankCity = (string)$value;
        return $this;
    }

    /**
     * Возвращает город, в котором находится отделение банка
     * @return string Город, в котором находится отделение банка
     */
    public function getBankCity()
    {
        return $this->bankCity;
    }

    /**
     * Устанавливает корреспондентский счет отделения банка
     * @param int|string $value Корреспондентский счет отделения банка
     * @return $this
     */
    public function setBankCorAccount($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract BankCorAccount type', 0, 'BankCorAccount', $value);
        }

        $this->bankCorAccount = (string)$value;
        return $this;
    }

    /**
     * Возвращает Корреспондентский счет отделения банка
     * @return string Корреспондентский счет отделения банка
     */
    public function getBankCorAccount()
    {
        return $this->bankCorAccount;
    }

    /**
     * @inheritdoc Описание из родительского класса
     */
    public function toArray()
    {
        $baseRecipient = parent::toArray();
        $date = DateParser::parseDateToIssueDate($this->getPdrDocIssueDate());

        $accountRecipient = [
            'CustAccount'       => $this->getCustAccount(),
            'BankBIK'           => $this->getBankBIK(),
            'payment_purpose'   => $this->getPaymentPurpose(),
            'pdr_docIssueYear'  => $date->getYear(),
            'pdr_docIssueMonth' => $date->getMonth(),
            'pdr_docIssueDay'   => $date->getDay(),
            'BankName'          => $this->getBankName(),
            'BankCity'          => $this->getBankCity(),
            'BankCorAccount'    => $this->getBankCorAccount(),
        ];

        return array_merge($accountRecipient, $baseRecipient);
    }
}
