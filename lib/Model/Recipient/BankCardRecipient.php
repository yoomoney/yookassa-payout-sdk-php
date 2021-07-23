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


use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\TypeCast;

/**
 * Класс для построения параметров получателя при выплате на банковскую карту, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest
 *
 * @example 02-deposition.php 28 32 Выплата на банковскую карту
 *
 * @package YooKassaPayout
 */
class BankCardRecipient extends BaseRecipient
{
    /**
     * Город получателя платежа
     * @var string
     */
    protected $pdrCity;
    /**
     * Адрес получателя платежа
     * @var string
     */
    protected $pdrAddress;
    /**
     * Почтовый индекс
     * @var int|string
     */
    protected $pdrPostcode;
    /**
     * Гражданство. Указывается как цифровой код страны (РФ — 643)
     * @var int|string
     */
    protected $pdrCountry;
    /**
     * Синоним номера банковской карты
     * @var string
     */
    protected $skrDestinationCardSynonym;
    /**
     * Идентификатор пользователя в ЮKassa
     *
     * Равен значению параметра accountNumber, полученного в ответе после идентификации пользователя через форму
     * @var string
     */
    protected $cpsYmAccount;

    /**
     * Устанавливает город получателя платежа
     * @param string $value Город получателя платежа
     * @return $this
     */
    public function setPdrCity($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_city type', 0, 'pdr_city', $value);
        }

        $this->pdrCity = (string)$value;
        return $this;
    }

    /**
     * Возвращает город получателя платежа
     * @return string Город получателя платежа
     */
    public function getPdrCity()
    {
        return $this->pdrCity;
    }

    /**
     * Устанавливает гражданство. Указывается как цифровой код страны (РФ — 643)
     * @param int|string $value Код страны
     * @return $this
     */
    public function setPdrCountry($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_country type', 0, 'pdr_city', $value);
        }

        $this->pdrCountry = (string)$value;
        return $this;
    }

    /**
     * Возвращает гражданство
     * @return string Код страны
     */
    public function getPdrCountry()
    {
        return $this->pdrCountry;
    }

    /**
     * Устанавливает почтовый индекс
     * @param int|string $value Почтовый индекс
     * @return $this
     */
    public function setPdrPostcode($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_postcode type', 0, 'pdr_postcode', $value);
        }

        $this->pdrPostcode = (string)$value;
        return $this;
    }

    /**
     * Возвращает почтовый индекс
     * @return string Почтовый индекс
     */
    public function getPdrPostcode()
    {
        return $this->pdrPostcode;
    }

    /**
     * Устанавливает синоним карты
     * @param string $value Синоним карты
     * @return $this
     */
    public function setSkrDestinationCardSynonym($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid skr_destinationCardSynonim type', 0, 'skr_destinationCardSynonim', $value);
        }

        $this->skrDestinationCardSynonym = (string)$value;
        return $this;
    }

    /**
     * Возвращает синоним карты
     * @return string Синоним карты
     */
    public function getSkrDestinationCardSynonym()
    {
        return $this->skrDestinationCardSynonym;
    }

    /**
     * Устанавливает идентификатор пользователя в ЮKassa
     * @param string $value Идентификатор пользователя в ЮKassa
     * @return $this
     */
    public function setCpsYmAccount($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid cps_ymAccount type', 0, 'cps_ymAccount', $value);
        }

        $this->cpsYmAccount = (string)$value;
        return $this;
    }

    /**
     * Возвращает идентификатор пользователя в ЮKassa
     * @return string Идентификатор пользователя в ЮKassa
     */
    public function getCpsYmAccount()
    {
        return $this->cpsYmAccount;
    }

    /**
     * Возвращает флаг установки идентификатора пользователя в ЮKassa
     * @return bool Флаг установки идентификатора пользователя в ЮKassa
     */
    public function hasCpsYmAccount()
    {
        return !empty($this->getCpsYmAccount());
    }

    /**
     * @inheritdoc Описание из родительского класса
     */
    public function toArray()
    {
        $baseRecipient = [];
        $cardRecipient = [
            'skr_destinationCardSynonim' => $this->getSkrDestinationCardSynonym(),
            'pdr_city' => $this->getPdrCity(),
            'pdr_postcode' => $this->getPdrPostcode(),
            'pdr_country' => $this->getPdrCountry(),
            'pdr_docIssueDate' => $this->getPdrDocIssueDate(),
        ];

        if ($this->hasCpsYmAccount()) {
            $cardRecipient['cps_ymAccount'] = $this->getCpsYmAccount();
            $cardRecipient['smsPhoneNumber'] = $this->getSmsPhoneNumber();
            $cardRecipient['pof_offerAccepted'] = $this->getPofOfferAccepted();
        } else {
            $baseRecipient = parent::toArray();
        }

        return array_merge($cardRecipient, $baseRecipient);
    }
}
