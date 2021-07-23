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
 * @example 02-deposition.php 10 16 Выплата на мобильный телефон
 *
 * @package YooKassaPayout
 */
class BaseRecipient
{

    /**
     * Подтверждение принятия оферты пользователем
     * @var int
     */
    protected $pofOfferAccepted;
    
    /**
     * Фамилия
     * @var string
     */
    protected $pdrLastName;

    /**
     * Имя
     * @var string
     */
    protected $pdrFirstName;

    /**
     * Отчество
     * @var string
     */
    protected $pdrMiddleName;

    /**
     * Дата рождения в формате ДД.ММ.ГГГГ
     * @var string
     */
    protected $pdrBirthDate;

    /**
     * Серия и номер паспорта гражданина РФ (без пробелов)
     * @var int|string
     */
    protected $pdrDocNumber;

    /**
     * Адрес получателя платежа
     * @var string
     */
    protected $pdrAddress;

    /**
     * Дата выдачи паспорта в формате ДД.ММ.ГГГГ
     * @var string
     */
    protected $pdrDocIssueDate;

    /**
     * Номер телефона в международном формате
     * @var int|string
     */
    protected $smsPhoneNumber;

    /**
     * Устанавливает подтверждение принятия оферты пользователем
     * @param bool $value Подтверждение принятия оферты пользователем
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
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
     * Получает подтверждение принятия оферты пользователем
     * @return int Подтверждение принятия оферты пользователем
     */
    public function getPofOfferAccepted()
    {
        return $this->pofOfferAccepted;
    }

    /**
     * Устанавливает фамилию
     * @param string $value Фамилия
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
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
     * Возвращает фамилию
     * @return string Фамилия
     */
    public function getPdrLastName()
    {
        return $this->pdrLastName;
    }

    /**
     * Устанавливает имя
     * @param string $value Имя
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
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
     * Возвращает имя
     * @return string Имя
     */
    public function getPdrFirstName()
    {
        return $this->pdrFirstName;
    }

    /**
     * Устанавливает отчество
     * @param string $value Отчество
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
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
     * Возвращает отчество
     * @return string Отчество
     */
    public function getPdrMiddleName()
    {
        return $this->pdrMiddleName;
    }

    /**
     * Устанавливает дату рождения
     * @param string $value Дата рождения
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
     * @throws InvalidPropertyValueException Выбрасывается, если данные не удовлетворяют условию
     * @throws Exception Выбрасывается, если произошла ошибка работы с датой
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
     * Возвращает дату рождения
     * @return string Дата рождения
     */
    public function getPdrBirthDate()
    {
        return $this->pdrBirthDate;
    }

    /**
     * Устанавливает серию и номер паспорта гражданина РФ
     * @param int|string $value Серия и номер паспорта гражданина РФ
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
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
     * Возвращает серию и номер паспорта гражданина РФ
     * @return string Серия и номер паспорта гражданина РФ
     */
    public function getPdrDocNumber()
    {
        return $this->pdrDocNumber;
    }

    /**
     * Устанавливает адрес получателя платежа
     * @param string $value Адрес получателя платежа
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
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
     * Возвращает адрес получателя платежа
     * @return string Адрес получателя платежа
     */
    public function getPdrAddress()
    {
        return $this->pdrAddress;
    }

    /**
     * Устанавливает дата выдачи паспорта
     * @param string $value Дата выдачи паспорта
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
     * @throws InvalidPropertyValueException Выбрасывается, если данные не удовлетворяют условию
     * @throws Exception Выбрасывается, если произошла ошибка работы с датой
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
     * Возвращает дату выдачи паспорта
     * @return string Дата выдачи паспорта
     */
    public function getPdrDocIssueDate()
    {
        return $this->pdrDocIssueDate;
    }

    /**
     * Устанавливает номер телефона
     * @param int|string $value Номер телефона
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
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
     * Возвращает номер телефона
     * @return string Номер телефона
     */
    public function getSmsPhoneNumber()
    {
        return $this->smsPhoneNumber;
    }

    /**
     * Возвращает данные объекта в виде массива параметров
     * @return array Данные объекта в виде массива параметров
     */
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
