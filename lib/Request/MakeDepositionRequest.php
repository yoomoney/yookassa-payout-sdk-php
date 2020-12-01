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
 * @example
 * <code>
 *  <?php
 *     $depositionRequest = new MakeDepositionRequest();
*      $depositionRequest->setDstAccount('41001614575714')
*                        ->setAmount(100)
*                        ->setCurrency(CurrencyCode::RUB)
*                        ->setContract('test')
*                        ->setPaymentParams($params);
 * </code>
 *
 * @package YooKassaPayout\Request
 */
class MakeDepositionRequest extends AbstractDepositionRequest
{
    /**
     * @var string
     */
    protected $requestName = 'makeDeposition';

    /**
     * @param null|string|int $clientOrderId
     * @return MakeDepositionRequestBuilder
     */
    public static function getBuilder($clientOrderId = null)
    {
        return new MakeDepositionRequestBuilder($clientOrderId);
    }
}