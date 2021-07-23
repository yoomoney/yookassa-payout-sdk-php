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

namespace YooKassaPayout\Client;

use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Helpers\TypeCast;

/**
 * Класс конфигурации CURL
 *
 * @package YooKassaPayout
 */
class CurlConfiguration
{
    /**
     * Прокси
     * @var string
     */
    private $proxy;

    /**
     * Таймаут соединения
     * @var int
     */
    private $connectionTimeout = 1000;

    /**
     * Количество попыток соединения
     * @var int
     */
    protected $attempts = 7;

    /**
     * Таймаут между попытками соединения
     * @var int
     */
    protected $timeout = 1000;

    /**
     * Устанавливает прокси
     * @param string $proxy Прокси
     */
    public function setProxy($proxy)
    {
        if (!TypeCast::canCastToString($proxy)) {
            throw new InvalidPropertyValueTypeException('Invalid proxy type', 0, 'proxy', $proxy);
        }
        $this->proxy = (string)$proxy;
    }

    /**
     * Возвращает прокси
     * @return string Прокси
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * Устанавливает таймаут соединения
     * @param int $connectionTimeout Таймаут соединения
     */
    public function setConnectionTimeout($connectionTimeout)
    {
        if (!is_numeric($connectionTimeout)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid connectionTimeout type',
                0,
                'connectionTimeout',
                $connectionTimeout
            );
        }
        $this->connectionTimeout = (int)$connectionTimeout;
    }

    /**
     * Возвращает таймаут соединения
     * @return int Таймаут соединения
     */
    public function getConnectionTimeout()
    {
        return $this->connectionTimeout;
    }

    /**
     * Устанавливает количество попыток соединения
     * @param int $attempts Количество попыток соединения
     */
    public function setAttempts($attempts)
    {
        if (!is_numeric($attempts)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid attempts type',
                0,
                'attempts',
                $attempts
            );
        }
        $this->attempts = (int)$attempts;
    }

    /**
     * Возвращает количество попыток соединения
     * @return int Количество попыток соединения
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Устанавливает таймаут между попытками соединения
     * @param int $timeout Таймаут между попытками соединения
     */
    public function setTimeout($timeout)
    {
        if (!is_numeric($timeout)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid timeout type',
                0,
                'timeout',
                $timeout
            );
        }
        $this->timeout = (int)$timeout;
    }

    /**
     * Возвращает таймаут между попытками соединения
     * @return int Таймаут между попытками соединения
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
}