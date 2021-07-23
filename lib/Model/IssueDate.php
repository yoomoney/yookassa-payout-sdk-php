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

namespace YooKassaPayout\Model;

/**
 * Класс для работы с датой
 *
 * @package YooKassaPayout
 */
class IssueDate
{
    /**
     * Полная дата в формате дд.мм.гггг
     * @var string
     */
    protected $fullDate;
    /**
     * Год
     * @var string
     */
    protected $year;
    /**
     * Месяц
     * @var string
     */
    protected $month;
    /**
     * День
     * @var string
     */
    protected $day;

    /**
     * IssueDate constructor.
     * @param string $fullDate Полная дата в формате дд.мм.гггг
     * @param string $year Год
     * @param string $month Месяц
     * @param string $day День
     */
    public function __construct($fullDate, $year, $month, $day)
    {
        $this->fullDate = $fullDate;
        $this->year     = $year;
        $this->month    = $month;
        $this->day      = $day;
    }

    /**
     * Устанавливает полную дату в формате дд.мм.гггг
     * @param string $fullDate Полная дата
     */
    public function setFullDate($fullDate)
    {
        $this->fullDate = $fullDate;
    }

    /**
     * Возвращает полную дату в формате дд.мм.гггг
     * @return string Полная дата
     */
    public function getFullDate()
    {
        return $this->fullDate;
    }

    /**
     * Устанавливает год
     * @param string $year Год
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * Возвращает год
     * @return string Год
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Устанавливает месяц
     * @param string $month Месяц
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * Возвращает месяц
     * @return string Месяц
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Устанавливает день
     * @param string $day День
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * Возвращает день
     * @return string День
     */
    public function getDay()
    {
        return $this->day;
    }
}