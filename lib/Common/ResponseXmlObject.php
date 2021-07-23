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
 * @package YooKassaPayout
 */
class ResponseXmlObject
{
    /**
     * Полная XML строка ответа
     * @var string
     */
    protected $fullXmlResponse;
    /**
     * Результат выполнения операции
     * @var int
     */
    protected $status;
    /**
     * Код ошибки выполнения запроса
     * @var int
     */
    protected $error;
    /**
     * Идентификатор операции
     * @var string
     */
    protected $clientOrderId;
    /**
     * Время обработки запроса
     * @var string
     */
    protected $processedDT;
    /**
     * Баланс
     *
     * Разница между суммой обеспечения и суммой, которую ЮKassa перечислили по запросам контрагента
     * @var numeric
     */
    protected $balance;
    /**
     * Дополнительный поясняющий текст к отказам в приеме перевода
     * @var string
     */
    protected $techMessage;
    /**
     * Поле содержит информацию о статусе кошелька в сервисе ЮMoney
     * @var string
     */
    protected $identification;

    /**
     * ResponseXmlObject constructor.
     * @param string $xml Исходная строка XML
     * @throws ApiException Выбрасывается, если API вернул ответ с ошибкой
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
     * Возвращает полную XML строку ответа
     * @return string Полная XML строка ответа
     */
    public function getFullXmlResponse()
    {
        return $this->fullXmlResponse;
    }

    /**
     * Возвращает результат выполнения операции
     * @return int Результат выполнения операции
     */
    public function getStatus()
    {
        return (int)$this->status;
    }

    /**
     * Возвращает Идентификатор операции
     * @return string Идентификатор операции
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * Возвращает баланс
     * @return string Баланс
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Врзвращает информацию о статусе кошелька в сервисе ЮMoney
     * @return string Информация о статусе кошелька в сервисе ЮMoney
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Возвращает время обработки запроса
     * @return string Время обработки запроса
     */
    public function getProcessedDT()
    {
        return $this->processedDT;
    }

    /**
     * Возвращает дополнительный поясняющий текст к отказам в приеме перевода
     * @return string Дополнительный поясняющий текст к отказам в приеме перевода
     */
    public function getTechMessage()
    {
        return $this->techMessage;
    }
}