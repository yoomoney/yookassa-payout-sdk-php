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


use DateTime;
use Exception;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueException;
use YooKassaPayout\Model\IssueDate;

/**
 * Class Parser
 *
 * @package YooKassaPayout\Common\Helpers
 */
class Parser
{
    /**
     * @param $date
     * @return array
     * @throws Exception
     */
    public static function parseDateToArray($date)
    {
        $dateTime = new DateTime($date);

        $result = [
            'full_date' => $dateTime->format('d.m.Y'),
            'year'      => $dateTime->format('Y'),
            'month'     => $dateTime->format('m'),
            'day'       => $dateTime->format('d'),
        ];

        if (empty($result)) {
            throw new InvalidPropertyValueException('Date has incorrect format. For example correct format: 10.10.1990', 0, 'DocIssueDate', $date);
        }

        return $result;
    }

    /**
     * @param $date
     * @return IssueDate
     * @throws Exception
     */
    public static function parseDateToIssueDate($date)
    {
        $arrDate = self::parseDateToArray($date);
        return new IssueDate($arrDate['full_date'], $arrDate['year'], $arrDate['month'], $arrDate['day']);
    }
}