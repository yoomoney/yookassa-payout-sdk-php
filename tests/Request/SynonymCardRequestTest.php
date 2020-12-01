<?php


namespace Tests\YooKassaPayout\Request;


use Exception;
use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Helpers\Random;
use YooKassaPayout\Request\SynonymCardRequest;

class SynonymCardRequestTest extends TestCase
{
    /**
     * @dataProvider validCards
     * @param $cardNumber
     */
    public function testSetSkrDestinationCardNumber($cardNumber)
    {
        $instance = new SynonymCardRequest();
        $instance->setSkrDestinationCardNumber($cardNumber);
        $this->assertEquals((string)$cardNumber, $instance->getSkrDestinationCardNumber());
    }

    /**
     * @dataProvider validFormats
     * @param $format
     */
    public function testSetSkrResponseFormat($format)
    {
        $instance = new SynonymCardRequest();
        $instance->setSkrResponseFormat($format);
        $this->assertEquals($format, $instance->getSkrResponseFormat());
    }

    /**
     * @dataProvider validUrls
     * @param $url
     */
    public function testSetSkrErrorUrl($url)
    {
        $instance = new SynonymCardRequest();
        $instance->setSkrErrorUrl($url);
        $this->assertEquals((string)$url, $instance->getSkrErrorUrl());
    }

    /**
     * @dataProvider validUrls
     * @param $url
     */
    public function testSetSkrSuccessUrl($url)
    {
        $instance = new SynonymCardRequest();
        $instance->setSkrSuccessUrl($url);
        $this->assertEquals((string)$url, $instance->getSkrSuccessUrl());
    }

    /**
     * @return array
     * @throws Exception
     */
    public function validCards()
    {
        return [
            ['45454364645656546'],
            [Random::int(11111111111111, 9999999999999999)],
        ];
    }

    /**
     * @return array
     * @throws Exception
     */
    public function validUrls()
    {
        return [
            ['http://ggdfg.ru'],
            [Random::str(5, 100)],
        ];
    }

    /**
     * @return array
     */
    public function validFormats()
    {
        return [
            [SynonymCardRequest::FORMAT_REDIRECT],
            [SynonymCardRequest::FORMAT_JSON],
        ];
    }
}