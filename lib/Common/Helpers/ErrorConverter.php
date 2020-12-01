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

namespace YooKassaPayout\Common\Helpers;


/**
 * Класс для конвертации ошибок в человекопонятный вид
 *
 * @package YooKassaPayout\Common\Helpers
 */
abstract class ErrorConverter
{
    const UNKNOWN_ERROR_PATTERN = 'Unknown error #%s';

    protected static $errors = [
        10 => 'Error in syntactical parsing of the XML document. The document syntax is invalid or required XML elements are omitted.',
        11 => 'The Counterparty\'s ID is invalid or omitted (agentId).',
        12 => 'The channel for accepting transfers (subagentId) is invalid or omitted.',
        14 => 'The currency (currency) is invalid or omitted.',
        15 => 'The time of document formation (requestDT) is invalid or omitted.',
        16 => 'The recipient\'s ID (dstAccount) is invalid or omitted.',
        17 => 'The amount (amount) is invalid or omitted.',
        18 => 'The transaction number (clientOrderId) is invalid or omitted.',
        19 => 'The basis for depositing the transfer (contract) is invalid or omitted.',
        21 => 'The requested operation is forbidden for this type of Counterparty activation.',
        26 => 'An operation with the same transaction number (clientOrderId) but different parameters was already completed.',
        50 => 'The cryptographic message can\'t be opened due to an error in package integrity.',
        51 => 'The digital signature was not verified (the signature data doesn\'t match the document).',
        53 => 'The request was signed by a certificate unknown to YooMoney.',
        55 => 'The certificate expired in the Counterparty\'s system.',
        40 => 'Account closed.',
        41 => 'YooMoney Wallet blocked. This operation is not allowed for this wallet.',
        42 => 'There is no account with this ID.',
        43 => 'Exceeded the limit on a one-time transfer, or the limit on the recipient\'s account balance.',
        44 => 'Exceeded the limit on the maximum amount of deposits over a period of time.',
        45 => 'Not enough funds to complete the operation.',
        46 => 'The operation amount is too small.',
        48 => 'Error in the request for funds deposit to a bank account, card, or mobile phone.',
        201 => 'Exceeded the limit on the recipient\'s account balance (internal code, not sent to contractors, used by YooMoney\'s) technical specialists)',
        30 => 'Technical problems on the YooMoney side. We recommend repeating the request at a reasonable interval.',
        31 => 'The transfer recipient declined the payment (the recipient refers to the mobile carrier or processing bank).',
        105 => 'Exceeded the time limit for paying with this payment code (when paying in cash at a kiosk or payment point). The code\'s expiration depends on the settings of the merchant who is receiving the payment.',
        110 => 'The transfer recipient returned the payment (the recipient refers to the mobile carrier or processing bank).',
    ];

    public static function getErrorMessageByCode($code)
    {
        if (isset(self::$errors[$code])) {
            return self::$errors[$code];
        }
        return sprintf(self::UNKNOWN_ERROR_PATTERN, $code);
    }

}