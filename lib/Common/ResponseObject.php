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
use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Common\Helpers\OpenSSL;

/**
 * Класс объекта ответа, возвращаемого API при запросе выплаты, баланса
 *
 * @package YooKassaPayout
 */
class ResponseObject
{
    /**
     * Код ответа
     * @var mixed
     */
    protected $code;
    /**
     * Заголовки ответа
     * @var mixed
     */
    protected $headers;
    /**
     * Тело ответа
     * @var mixed
     */
    protected $body;
    /**
     * Расшифрованное тело ответа
     * @var ResponseXmlObject
     */
    protected $xmlResponse;

    /**
     * ResponseObject constructor.
     * @param array|null $config Массив с данными ответа
     * @throws ApiException Выбрасывается, если API вернул ответ с ошибкой
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     */
    public function __construct($config = null)
    {
        if (isset($config['headers'])) {
            $this->headers = $config['headers'];
        }

        if (isset($config['body'])) {
            $this->body = $config['body'];
            if ($this->isPkcs7($this->body)) {
                $this->xmlResponse = new ResponseXmlObject(OpenSSL::decryptPKCS7($this->body));
            }
        }

        if (isset($config['code'])) {
            $this->code = $config['code'];
        }
    }

    /**
     * Возвращает массив заголовков ответа
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Возвращает тело ответа
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Возвращает преобразованное в объект тело ответа
     * @return ResponseXmlObject
     */
    public function getXmlResponse()
    {
        return $this->xmlResponse;
    }

    /**
     * Возвращает код ответа
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Проверяет является ли содержимое $data пакетом PKCS#7
     * @param string $data Тело ответа
     * @return bool
     */
    private function isPkcs7($data)
    {
        if (preg_match('/-----BEGIN PKCS7-----/', $data)) {
            return true;
        }
        return false;
    }
}