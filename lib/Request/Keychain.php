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
 * @package YooKassaPayout
 */
class Keychain
{
    /**
     * Путь к публичному сертификату
     * @var string
     */
    protected $publicCert;

    /**
     * Путь к закрытому ключу
     * @var string
     */
    protected $privateKey;

    /**
     * Пароль закрытого ключа
     * @var string
     */
    protected $keyPassword;

    /**
     * Keychain constructor.
     * @param string $publicCert Путь к публичному сертификату
     * @param string $privateKey Путь к закрытому ключу
     * @param string $keyPassword Пароль закрытого ключа
     */
    public function __construct($publicCert, $privateKey, $keyPassword = '')
    {
        $this->setPublicCert($publicCert);
        $this->setPrivateKey($privateKey);
        $this->setKeyPassword($keyPassword);
    }

    /**
     * Возвращает путь к публичному сертификату
     * @return string Путь к публичному сертификату
     */
    public function getPublicCert()
    {
        return $this->publicCert;
    }

    /**
     * Устанавливает путь к публичному сертификату
     * @param string $publicCert Путь к публичному сертификату
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
     * Возвращает путь к закрытому ключу
     * @return string Путь к закрытому ключу
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * Устанавливает путь к закрытому ключу
     * @param string $privateKey Путь к закрытому ключу
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
     * Возвращает пароль закрытого ключа
     * @return string Пароль закрытого ключа
     */
    public function getKeyPassword()
    {
        return $this->keyPassword;
    }

    /**
     * Устанавливает пароль закрытого ключа
     * @param string $keyPassword Пароль закрытого ключа
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