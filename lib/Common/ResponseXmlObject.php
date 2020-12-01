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

namespace YooKassaPayout\Common;


use YooKassaPayout\Common\Exceptions\ApiException;
use YooKassaPayout\Common\Helpers\ErrorConverter;

/**
 * Класс объекта ответа, возвращаемого API, для работы с xml
 *
 * @package YooKassaPayout\Common
 */
class ResponseXmlObject
{
    protected $fullXmlResponse;
    protected $status;
    protected $error;
    protected $clientOrderId;
    protected $processedDT;
    protected $balance;
    protected $techMessage;
    protected $identification;

    /**
     * ResponseXmlObject constructor.
     * @param $xml
     * @throws ApiException
     */
    public function __construct($xml)
    {
        $this->fullXmlResponse = $xml;

        $xmlObject  = simplexml_load_string($xml);
        $attributes = $xmlObject->attributes();

        if (isset($attributes['error'])) {
            $errMessage = !empty($attributes['techMessage'])
                           ? (string)$attributes['techMessage']
                           : ErrorConverter::getErrorMessageByCode((int)$attributes['error']);

            throw new ApiException($errMessage, (int)$attributes['error']);
        }

        foreach ($xmlObject->attributes() as $attrName => $value) {
            $this->{$attrName} = (string)$value;
        }
    }

    /**
     * @return string
     */
    public function getFullXmlResponse()
    {
        return $this->fullXmlResponse;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return (int)$this->status;
    }

    /**
     * @return string
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * @return string
     */
    public function getProcessedDT()
    {
        return $this->processedDT;
    }

    /**
     * @return string
     */
    public function getTechMessage()
    {
        return $this->techMessage;
    }
}