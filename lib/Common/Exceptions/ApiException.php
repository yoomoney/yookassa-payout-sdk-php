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

namespace YooKassaPayout\Common\Exceptions;

use Exception;

/**
 * Class ApiException
 * @package YooKassaPayout
 */
class ApiException extends Exception
{
    /**
     * Тело ответа
     * @var mixed
     */
    protected $responseBody;

    /**
     * Заголовки ответа
     * @var string[]
     */
    protected $responseHeaders;

    /**
     * Constructor
     *
     * @param string $message Текст ошибки
     * @param int $code Код ошибки
     * @param string[] $responseHeaders HTTP Заголовки
     * @param mixed $responseBody Тело запроса
     */
    public function __construct($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Возвращает заголовки ответа
     * @return string[] Заголовки ответа
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Возвращает тело ответа
     * @return mixed Тело ответа
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }
}