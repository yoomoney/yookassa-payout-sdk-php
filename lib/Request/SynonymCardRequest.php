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


use YooKassaPayout\Common\Exceptions\InvalidPropertyValueException;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\TypeCast;
use YooKassaPayout\Request\Builders\SynonymCardRequestBuilder;
use YooKassaPayout\Request\Serializers\SynonymCardRequestSerializer;

/**
 * Класс для создания запроса на получение синонима карты
 *
 * @example
 * <code>
 *  <?php
 *      $synonymRequest = new SynonymCardRequest();
 *      $synonymRequest->setSkrDestinationCardNumber('5555555555554444')
 *                     ->setSkrErrorUrl('https://yoomoney.ru')
 *                     ->setSkrSuccessUrl('https://yoomoney.ru');
 *      $client->getSynonymCard($synonymRequest);
 * </code>
 *
 * @package YooKassaPayout\Request
 */
class SynonymCardRequest
{
    /**
     * @const string
     */
    const FORMAT_JSON = 'json';

    /**
     * @const string
     */
    const FORMAT_REDIRECT = 'redirect';

    /**
     * @var array
     */
    private static $validResponseFormats = [
        self::FORMAT_JSON,
        self::FORMAT_REDIRECT,
    ];
    /**
     * @var string
     */
    protected $skrDestinationCardNumber;

    /**
     * @var string
     */
    protected $skrResponseFormat = self::FORMAT_JSON;

    /**
     * @var string
     */
    protected $skrErrorUrl;

    /**
     * @var string
     */
    protected $skrSuccessUrl;

    /**
     * SynonymCardRequest constructor.
     */
    public function __construct()
    {
        if (isset($_SERVER['PATH_INFO'])) {
            $this->setSkrErrorUrl($_SERVER['PATH_INFO'])
                 ->setSkrSuccessUrl($_SERVER['PATH_INFO']);
        }
    }

    /**
     * @param string $skrDestinationCardNumber
     * @return $this
     */
    public function setSkrDestinationCardNumber($skrDestinationCardNumber)
    {
        if (!is_numeric((string)$skrDestinationCardNumber)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid skrDestinationCardNumber value type, for example valid value: 5555555555554444',
                0,
                'skrDestinationCardNumber',
                $skrDestinationCardNumber
            );
        }
        $this->skrDestinationCardNumber = (string)$skrDestinationCardNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkrDestinationCardNumber()
    {
        return $this->skrDestinationCardNumber;
    }

    /**
     * @param string $skrResponseFormat
     * @return SynonymCardRequest
     */
    public function setSkrResponseFormat($skrResponseFormat = self::FORMAT_JSON)
    {
        if (!in_array($skrResponseFormat, self::getValidResponseFormats())) {
            throw new InvalidPropertyValueException(
                "Invalid skrResponseFormat value, valid values: [" . implode(', ', self::getValidResponseFormats()) . "]",
                0,
                'skrResponseFormat',
                $skrResponseFormat
            );
        }
        $this->skrResponseFormat = $skrResponseFormat;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkrResponseFormat()
    {
        return $this->skrResponseFormat;
    }

    /**
     * @param string $skrErrorUrl
     * @return SynonymCardRequest
     */
    public function setSkrErrorUrl($skrErrorUrl)
    {
        if (!TypeCast::canCastToString($skrErrorUrl)) {
            throw new InvalidPropertyValueTypeException('Invalid skrErrorUrl value type', 0, 'skrErrorUrl', $skrErrorUrl);
        }
        $this->skrErrorUrl = (string)$skrErrorUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkrErrorUrl()
    {
        return $this->skrErrorUrl;
    }

    /**
     * @param string $skrSuccessUrl
     * @return SynonymCardRequest
     */
    public function setSkrSuccessUrl($skrSuccessUrl)
    {
        if (!TypeCast::canCastToString($skrSuccessUrl)) {
            throw new InvalidPropertyValueTypeException('Invalid skrSuccessUrl value type', 0, 'skrSuccessUrl', $skrSuccessUrl);
        }
        $this->skrSuccessUrl = (string)$skrSuccessUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkrSuccessUrl()
    {
        return $this->skrSuccessUrl;
    }

    /**
     * @return SynonymCardRequestSerializer
     */
    public function getSerializer()
    {
        return new SynonymCardRequestSerializer();
    }

    /**
     * @return SynonymCardRequestBuilder
     */
    public static function getBuilder()
    {
        return new SynonymCardRequestBuilder();
    }

    /**
     * @return array
     */
    private function getValidResponseFormats()
    {
        return self::$validResponseFormats;
    }
}