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


use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\TypeCast;

/**
 * Класс ключница
 *
 * @package YooKassaPayout\Request
 */
class Keychain
{
    /**
     * @var string
     */
    protected $publicCert;

    /**
     * @var string
     */
    protected $privateKey;

    /**
     * @var string
     */
    protected $keyPassword;

    public function __construct($publicCert, $privateKey, $keyPassword = '')
    {
        $this->setPublicCert($publicCert);
        $this->setPrivateKey($privateKey);
        $this->setKeyPassword($keyPassword);
    }

    /**
     * @return string
     */
    public function getPublicCert()
    {
        return $this->publicCert;
    }

    /**
     * @param string $publicCert
     * @return Keychain
     */
    public function setPublicCert($publicCert)
    {
        if (!TypeCast::canCastToString($publicCert)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid type publicCert',
                0,
                'publicCert',
                $publicCert
            );
        }
        $this->publicCert = (string)$publicCert;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * @param string $privateKey
     * @return Keychain
     */
    public function setPrivateKey($privateKey)
    {
        if (!TypeCast::canCastToString($privateKey)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid type privateKey',
                0,
                'privateKey',
                $privateKey
            );
        }
        $this->privateKey = (string)$privateKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeyPassword()
    {
        return $this->keyPassword;
    }

    /**
     * @param string $keyPassword
     * @return Keychain
     */
    public function setKeyPassword($keyPassword)
    {
        if (!TypeCast::canCastToString($keyPassword)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid type keyPassword',
                0,
                'keyPassword',
                $keyPassword
            );
        }
        $this->keyPassword = (string)$keyPassword;
        return $this;
    }
}