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

namespace YooKassaPayout\Model;


use YooKassaPayout\Common\Exceptions\InvalidPropertyValueException;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\TypeCast;

/**
 * Класс для построения данных организации при генерации запроса на сертификат
 *
 * @example
 * <code>
 *  <?php
 *      $organization = new Organization();
 *      $organization->setEmailAddress('predpriyatie@yoomoney.ru')
 *                   ->setOrganizationName('OOO Predpriyatie')
 *                   ->setCommonName('/business/predpriyatie');
 *      $signature = $client->createCsr($organization, 'path/to/output/dir', 'password_for_private_key');
 * </code>
 *
 * @package YooKassaPayout\Model
 */
class Organization
{
    public $countryName = "RU";
    public $stateOrProvinceName = "Russia";
    public $localityName;
    public $organizationName;
    public $organizationalUnitName;
    public $commonName;
    public $emailAddress;

    public function __construct($organizationInfo = null)
    {
        if ($organizationInfo) {
            $this->buildByArray($organizationInfo);
        }
    }

    /**
     * @param string $countryName
     * @return Organization
     */
    public function setCountryName($countryName = "RU")
    {
        if (!TypeCast::canCastToString($countryName)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid countryName type',
                0,
                'countryName',
                $countryName
            );
        } elseif (mb_strlen($countryName) !== 2) {
            throw new InvalidPropertyValueException(
                'Invalid length countryName. Required [length=2]',
                0,
                'countryName',
                $countryName
            );
        } else {
            $this->countryName = strtoupper((string)$countryName);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param string $stateOrProvinceName
     * @return Organization
     */
    public function setStateOrProvinceName($stateOrProvinceName = "Russia")
    {
        if (!TypeCast::canCastToString($stateOrProvinceName)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid stateOfProvinceName type',
                0,
                'stateOfProvinceName',
                $stateOrProvinceName
            );
        }

        $this->stateOrProvinceName = (string)$stateOrProvinceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvinceName()
    {
        return $this->stateOrProvinceName;
    }

    /**
     * @param string $localityName
     * @return Organization
     */
    public function setLocalityName($localityName)
    {
        if (!TypeCast::canCastToString($localityName)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid localityName type',
                0,
                'localityName',
                $localityName
            );
        }

        $this->localityName = (string)$localityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocalityName()
    {
        return $this->localityName;
    }

    /**
     * @param mixed $organizationName
     * @return Organization
     */
    public function setOrganizationName($organizationName)
    {
        if (!TypeCast::canCastToString($organizationName)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid organizationName type',
                0,
                'organizationName',
                $organizationName
            );
        }

        $this->organizationName = (string)$organizationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * @param string $organizationalUnitName
     * @return Organization
     */
    public function setOrganizationalUnitName($organizationalUnitName)
    {
        if (!TypeCast::canCastToString($organizationalUnitName)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid organizationalUnitName type',
                0,
                'organizationalUnitName',
                $organizationalUnitName
            );
        }

        $this->organizationalUnitName = (string)$organizationalUnitName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationalUnitName()
    {
        return $this->organizationalUnitName;
    }

    /**
     * @param mixed $commonName
     * @return Organization
     */
    public function setCommonName($commonName)
    {
        if (!TypeCast::canCastToString($commonName)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid commonName type',
                0,
                'commonName',
                $commonName
            );
        }

        $commonName = (string)$commonName;

        if (preg_match('/^(\/business\/)([A-z0-9]+)/', $commonName)) {
            $this->commonName = $commonName;
        } else {
            $this->commonName = '/business/' . trim($commonName, '/');
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getCommonName()
    {
        return $this->commonName;
    }

    /**
     * @param mixed $emailAddress
     * @return Organization
     */
    public function setEmailAddress($emailAddress)
    {
        if (!TypeCast::canCastToString($emailAddress)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid emailAddress type',
                0,
                'emailAddress',
                $emailAddress
            );
        } elseif (strpos((string)$emailAddress, '@') === FALSE) {
            throw new InvalidPropertyValueException(
                'Invalid emailAddress value',
                0,
                'emailAdress',
                $emailAddress
            );
        }

        $this->emailAddress = (string)$emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function buildByArray($options)
    {
        foreach ($options as $option => $value) {
            $methodName = $this->getMethodName($option);
            if (method_exists($this, $methodName)) {
                $this->{$methodName}($value);
            }
        }

        return $this;
    }

    public function toArray()
    {
        $decodeArr = json_decode(json_encode($this), true);

        $result = [];
        foreach ($decodeArr as $key => $value) {
            if (!empty($value)) {
                $result[$key] = $value;
            }
        }

        return $result;
    }

    private function getMethodName($option)
    {
        $strParts = explode('_', $option);
        $methodName = 'set';

        foreach ($strParts as $part) {
            $methodName .= ucfirst($part);
        }

        return $methodName;
    }
}