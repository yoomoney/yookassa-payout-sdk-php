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
 * Class CurlConfiguration
 *
 * @package YooKassaPayout\Client
 */
class CurlConfiguration
{
    /**
     * @var
     */
    private $proxy;

    /**
     * @var int
     */
    private $connectionTimeout = 1000;

    /**
     * @var int
     */
    protected $attempts = 7;

    /**
     * @var int
     */
    protected $timeout = 1000;

    /**
     * @param string $proxy
     */
    public function setProxy($proxy)
    {
        if (!TypeCast::canCastToString($proxy)) {
            throw new InvalidPropertyValueTypeException('Invalid proxy type', 0, 'proxy', $proxy);
        }
        $this->proxy = (string)$proxy;
    }

    /**
     * @return string
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param int $connectionTimeout
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
     * @return int
     */
    public function getConnectionTimeout()
    {
        return $this->connectionTimeout;
    }

    /**
     * @param int $attempts
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
     * @return int
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * @param int $timeout
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
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
}