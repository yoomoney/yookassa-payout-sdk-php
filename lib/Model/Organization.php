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
 * @example 04-generate-csr.php 3 23 Генерация ключей и создание запроса
 *
 * @package YooKassaPayout
 */
class Organization
{
    /**
     * Код страны
     *
     * Пример: RU
     * @var string
     */
    public $countryName = "RU";
    /**
     * Название страны
     *
     * Пример: Russia
     * @var string
     */
    public $stateOrProvinceName = "Russia";
    /**
     * Название населенного пункта
     *
     * Пример: Moscow
     * @var string
     */
    public $localityName;
    /**
     * Название организации (латинскими буквами)
     *
     * Пример: OOO Predpriyatie
     * @var string
     */
    public $organizationName;
    /**
     * Название подразделения
     * @var string
     */
    public $organizationalUnitName;
    /**
     * Общее название организации
     *
     * /business/ — обязательная часть этого параметра, ее менять не нужно.
     * После нее могут следовать любые латинские буквы без пробелов. Например, название вашей компании латиницей
     * Пример: /business/predpriyatie
     *
     * @var string
     */
    public $commonName;
    /**
     * Контактный email
     *
     * Пример: predpriyatie@example.com
     * @var string
     */
    public $emailAddress;

    /**
     * Organization constructor.
     * @param array|null $organizationInfo Массив данных организации
     */
    public function __construct($organizationInfo = null)
    {
        if ($organizationInfo) {
            $this->buildByArray($organizationInfo);
        }
    }

    /**
     * Устанавливает код страны
     * @param string $countryName Код страны
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
     * Возвращает код страны
     * @return string Код страны
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Устанавливает название страны
     * @param string $stateOrProvinceName Название страны
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
     * Возвращает название страны
     * @return string Название страны
     */
    public function getStateOrProvinceName()
    {
        return $this->stateOrProvinceName;
    }

    /**
     * Устанавливает название населенного пункта
     * @param string $localityName Название населенного пункта
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
     * Возвращает название населенного пункта
     * @return string Название населенного пункта
     */
    public function getLocalityName()
    {
        return $this->localityName;
    }

    /**
     * Устанавливает название организации
     * @param string $organizationName Название организации
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
     * Возвращает название организации
     * @return string Название организации
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * Устанавливает название подразделения
     * @param string $organizationalUnitName Название подразделения
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
     * Возвращает название подразделения
     * @return string Название подразделения
     */
    public function getOrganizationalUnitName()
    {
        return $this->organizationalUnitName;
    }

    /**
     * Устанавливает общее название организации
     * @param string $commonName Общее название организации
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
     * Возвращает общее название организации
     * @return string Общее название организации
     */
    public function getCommonName()
    {
        return $this->commonName;
    }

    /**
     * Устанавливает контактный email
     * @param string $emailAddress Контактный email
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
        } elseif (strpos((string)$emailAddress, '@') === false) {
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
     * Возвращает контактный email
     * @return string Контактный email
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Заполняет свойства объекта из массива
     * @param array $options Массив данных организации
     * @return $this
     */
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

    /**
     * Преобразует объект в массив
     * @return array Массив данных организации
     */
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

    /**
     * Возвращает название сеттера для свойства объекта
     * @param string $option Название свойства
     * @return string Название метода
     */
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