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


use YooKassaPayout\Request\Builders\MakeDepositionRequestBuilder;

/**
 * Класс для создания запроса на выплату
 *
 * @example 04-deposition.php 62 27 Запрос на выплату
 *
 * @package YooKassaPayout\Request
 */
class MakeDepositionRequest extends AbstractDepositionRequest
{
    /**
     * @inheritdoc
     */
    protected $requestName = 'makeDeposition';

    /**
     * Возвращает объект для сборки запроса MakeDepositionRequest из массива
     * @param null|string|int $clientOrderId Идентификатор операции
     * @return MakeDepositionRequestBuilder Объект для сборки запроса MakeDepositionRequest из массива
     */
    public static function getBuilder($clientOrderId = null)
    {
        return new MakeDepositionRequestBuilder($clientOrderId);
    }
}