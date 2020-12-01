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


use DateTime;
use Exception;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueException;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\TypeCast;

/**
 * Класс для построения параметров получателя при выплате на моб.телефон, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest
 *
 * @example
 * <code>
 *  <?php
 *      $recipient = new BaseRecipient();
 *      $recipient->setPofOfferAccepted(true);
 *
 *      $depositionRequest = new MakeDepositionRequest();
 *      $depositionRequest->setPaymentParams($recipient);
 * </code>
 *
 * @package YooKassaPayout\Model\Recipient
 */
class BaseRecipient
{

    /**
     * @var
     */
    protected $pofOfferAccepted;
    
    /**
     * @var
     */
    protected $pdrLastName;

    /**
     * @var
     */
    protected $pdrFirstName;

    /**
     * @var
     */
    protected $pdrMiddleName;

    /**
     * @var
     */
    protected $pdrBirthDate;

    /**
     * @var
     */
    protected $pdrDocNumber;

    /**
     * @var
     */
    protected $pdrAddress;

    /**
     * @var
     */
    protected $pdrDocIssueDate;

    /**
     * @var
     */
    protected $smsPhoneNumber;

    /**
     * @param bool $value
     * @return $this
     */
    public function setPofOfferAccepted($value)
    {
        if (!is_bool($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pof_offerAccepted type, required (boolean type) true or false', 0, 'pof_offerAccepted', $value);
        }
        $this->pofOfferAccepted = (int)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPofOfferAccepted()
    {
        return $this->pofOfferAccepted;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPdrLastName($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_lastName type', 0, 'pdr_lastName', $value);
        }

        $this->pdrLastName = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrLastName()
    {
        return $this->pdrLastName;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPdrFirstName($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_firstName type', 0, 'pdr_firstName', $value);
        }

        $this->pdrFirstName = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrFirstName()
    {
        return $this->pdrFirstName;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPdrMiddleName($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_middleName type', 0, 'pdr_middleName', $value);
        }

        $this->pdrMiddleName = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrMiddleName()
    {
        return $this->pdrMiddleName;
    }

    /**
     * @param $value
     * @return $this
     * @throws Exception
     */
    public function setPdrBirthDate($value)
    {
        $date  = new DateTime($value);
        $value = $date->format('d.m.Y');

        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_docIssueDate type', 0, 'pdr_docIssueDate', $value);
        } elseif (!preg_match('/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[012])\.(19|20)\d\d$/', (string)$value)) {
            throw new InvalidPropertyValueException('Date has incorrect format. For example correct format: 10.10.1990', 0, 'DocIssueDate', $value);
        }

        $this->pdrBirthDate = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrBirthDate()
    {
        return $this->pdrBirthDate;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setDocNumber($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_docNumber type', 0, 'pdr_docNumber', $value);
        }

        $this->pdrDocNumber = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrDocNumber()
    {
        return $this->pdrDocNumber;
    }


    /**
     * @param $value
     * @return $this
     */
    public function setPdrAddress($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_address type', 0, 'pdr_address', $value);
        }

        $this->pdrAddress = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrAddress()
    {
        return $this->pdrAddress;
    }

    /**
     * @param $value
     * @return $this
     * @throws Exception
     */
    public function setPdrDocIssueDate($value)
    {
        $date  = new DateTime($value);
        $value = $date->format('d.m.Y');

        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_docIssueDate type', 0, 'pdr_docIssueDate', $value);
        } elseif (!preg_match('/^(0[1-9]|[12][0-9]|3[01])\.(0[1-9]|1[012])\.(19|20)\d\d$/', (string)$value)) {
            throw new InvalidPropertyValueException('Date has incorrect format. For example correct format: 10.10.1990', 0, 'DocIssueDate', $value);
        }

        $this->pdrDocIssueDate = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrDocIssueDate()
    {
        return $this->pdrDocIssueDate;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSmsPhoneNumber($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid smsPhoneNumber type', 0, 'smsPhoneNumber', $value);
        }

        $this->smsPhoneNumber = (string)$value;
        return $this;
    }

    /**
     * @return  mixed
     */
    public function getSmsPhoneNumber()
    {
        return $this->smsPhoneNumber;
    }

    public function toArray()
    {
        return [
            'pof_offerAccepted' => $this->getPofOfferAccepted(),
            'pdr_lastName'      => $this->getPdrLastName(),
            'pdr_firstName'     => $this->getPdrFirstName(),
            'pdr_middleName'    => $this->getPdrMiddleName(),
            'pdr_docNumber'     => $this->getPdrDocNumber(),
            'pdr_birthDate'     => $this->getPdrBirthDate(),
            'pdr_address'       => $this->getPdrAddress(),
            'smsPhoneNumber'    => $this->getSmsPhoneNumber(),
        ];
    }
}