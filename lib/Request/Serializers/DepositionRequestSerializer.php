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

namespace YooKassaPayout\Request\Serializers;


use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Model\Recipient\BaseRecipient;
use YooKassaPayout\Request\AbstractRequest;

/**
 * Класс для преобразования запроса выплаты в массив
 *
 * @package YooKassaPayout
 */
class DepositionRequestSerializer extends AbstractRequestSerializer
{
    /**
     * Формирует массив из запроса
     *
     * @param AbstractRequest $request Запрос
     *
     * @return array Массив параметров
     */
    public function serialize(AbstractRequest $request)
    {
        $serializedParams = parent::serialize($request);
        $result = [
            'dstAccount'    => $request->getDstAccount(),
            'amount'        => $request->getAmount(),
            'currency'      => $request->getCurrency(),
            'contract'      => $request->getContract(),
        ];

        if ($request->hasPaymentParams()) {
            $result['paymentParams'] = $this->serializePaymentParams($request->getPaymentParams());
        }

        return array_merge($result, $serializedParams);
    }

    /**
     * Формирует платежные параметры
     *
     * @param BaseRecipient|array $paymentParams Платежные параметры
     *
     * @return array
     */
    public function serializePaymentParams($paymentParams)
    {
        if ($paymentParams instanceof BaseRecipient) {
            $result = $paymentParams->toArray();
        } elseif (is_array($paymentParams)) {
            $result = $paymentParams;
        } else {
            throw new InvalidPropertyValueTypeException(
                'Invalid paymentParams type',
                0,
                'paymentParams',
                $paymentParams
            );
        }

        return $result;
    }
}