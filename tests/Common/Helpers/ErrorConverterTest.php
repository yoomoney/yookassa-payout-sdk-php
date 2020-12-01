<?php


namespace Tests\YooKassaPayout\Common\Helpers;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Helpers\ErrorConverter;

class ErrorConverterTest extends TestCase
{
    const UNKNOWN_ERROR_PATTERN = 'Unknown error #%s';

    /**
     * @dataProvider errorProvider
     * @param $excepted
     * @param $code
     */
    public function testGetErrorMessageByCode($excepted, $code)
    {
        $this->assertEquals($excepted, ErrorConverter::getErrorMessageByCode($code));
    }

    public function errorProvider()
    {
        return [
            ['Unknown error #0', 0],
            ['Error in syntactical parsing of the XML document. The document syntax is invalid or required XML elements are omitted.', 10],
            ['The transfer recipient returned the payment (the recipient refers to the mobile carrier or processing bank).', 110],
        ];
    }
}