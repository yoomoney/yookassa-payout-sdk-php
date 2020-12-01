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
 * @example
 * <code>
 *  <?php
 *      $recipient = new BankCardRecipient();
 *      $recipient->setPdrLastName('Иванов')
 *                 ->setPdrFirstName('Иван')
 *                 ->setPdrMiddleName('Иванович')
 *                 ->setDocNumber('1234567890')
 *                 ->setPofOfferAccepted(true)
 *                 ->setPdrDocIssueDate('01.02.2018')
 *                 ->setSmsPhoneNumber('79000000000')
 *                 ->setSkrDestinationCardSynonym('R8zigwjuuzlxmfOfJ8SPDzLU.SC.000.202002');
 *
 *      $depositionRequest = new MakeDepositionRequest();
 *      $depositionRequest->setPaymentParams($recipient);
 * </code>
 *
 * @package YooKassaPayout\Model\Recipient
 */
class BankCardRecipient extends BaseRecipient
{
    protected $pdrCity;
    protected $pdrAddress;
    protected $pdrPostcode;
    protected $pdrCountry;
    protected $skrDestinationCardSynonym;
    protected $cpsYmAccount;

    public function setPdrCity($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_city type', 0, 'pdr_city', $value);
        }

        $this->pdrCity = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrCity()
    {
        return $this->pdrCity;
    }

    public function setPdrCountry($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_country type', 0, 'pdr_city', $value);
        }

        $this->pdrCountry = (string)$value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPdrCountry()
    {
        return $this->pdrCountry;
    }

    public function setPdrPostcode($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid pdr_postcode type', 0, 'pdr_postcode', $value);
        }

        $this->pdrPostcode = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPdrPostcode()
    {
        return $this->pdrPostcode;
    }

    public function setSkrDestinationCardSynonym($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid skr_destinationCardSynonim type', 0, 'skr_destinationCardSynonim', $value);
        }

        $this->skrDestinationCardSynonym = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSkrDestinationCardSynonym()
    {
        return $this->skrDestinationCardSynonym;
    }

    public function setCpsYmAccount($value)
    {
        if (!TypeCast::canCastToString($value)) {
            throw new InvalidPropertyValueTypeException('Invalid cps_ymAccount type', 0, 'cps_ymAccount', $value);
        }

        $this->cpsYmAccount = (string)$value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpsYmAccount()
    {
        return $this->cpsYmAccount;
    }

    public function hasCpsYmAccount()
    {
        return !empty($this->getCpsYmAccount());
    }

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