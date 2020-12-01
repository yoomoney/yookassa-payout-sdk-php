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
use YooKassaPayout\Common\Helpers\Parser;
use YooKassaPayout\Common\Helpers\TypeCast;

/**
 * Класс для построения параметров получателя при выплате на банковский счет, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest
 *
 * @example
 * <code>
 *  <?php
 *      $recipient = new BankAccountRecipient();
 *      $recipient->setBankCity('bank city')
 *                ->setBankName('bank name')
 *                ->setBankBIK('999999999')
 *                ->setPaymentPurpose('payment purpose 74')
 *                ->setBankCorAccount('11111111111111111111')
 *                ->setPofOfferAccepted(true)
 *                ->setPdrDocIssueDate('05.05.2019')
 *                ->setCustAccount('11111111111111111111')
 *                ->setPdrMiddleName('Владимирович')
 *                ->setPdrLastName('Владимиров')
 *                ->setPdrFirstName('Владимир')
 *                ->setPdrBirthDate('05.05.1990')
 *                ->setPdrAddress('пос. Большие Васюки, ул. Комиссара Козявкина, д. 4')
 *                ->setDocNumber('4002109067')
 *                ->setSmsPhoneNumber('79000000000');
 *
 *      $depositionRequest = new MakeDepositionRequest();
 *      $depositionRequest->setPaymentParams($recipient);
 * </code>
 *
 * @package YooKassaPayout\Model\Recipient
 */
class BankAccountRecipient extends BaseRecipient
{
    protected $custAccount;
    protected $bankBIK;
    protected $paymentPurpose;
    protected $bankName;
    protected $bankCity;
    protected $bankCorAccount;

    public function setCustAccount($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid CustAccount value type', 0, 'CustAccount', $value);
        }

        $this->custAccount = (string)$value;
        return $this;
    }

    public function getCustAccount()
    {
        return $this->custAccount;
    }

    public function setBankBIK($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract BankBIK type', 0, 'BankBIK', $value);
        }

        $this->bankBIK = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankBIK()
    {
        return $this->bankBIK;
    }

    public function setPaymentPurpose($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract payment_purpose type', 0, 'payment_purpose', $value);
        }

        $this->paymentPurpose = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentPurpose()
    {
        return $this->paymentPurpose;
    }

    public function setBankName($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract BankName type', 0, 'BankName', $value);
        }

        $this->bankName = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    public function setBankCity($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract BankCity type', 0, 'BankCity', $value);
        }

        $this->bankCity = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankCity()
    {
        return $this->bankCity;
    }

    public function setBankCorAccount($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid contract BankCorAccount type', 0, 'BankCorAccount', $value);
        }

        $this->bankCorAccount = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBankCorAccount()
    {
        return $this->bankCorAccount;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function toArray()
    {
        $baseRecipient = parent::toArray();
        $date = Parser::parseDateToIssueDate($this->getPdrDocIssueDate());

        $accountRecipient = [
            'CustAccount'       => $this->getCustAccount(),
            'BankBik'           => $this->getBankBIK(),
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