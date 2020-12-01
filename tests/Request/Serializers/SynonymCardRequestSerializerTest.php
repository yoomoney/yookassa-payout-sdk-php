<?php


namespace Request\Serializers;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Request\SynonymCardRequest;

class SynonymCardRequestSerializerTest extends TestCase
{
    public function testSerialize()
    {
        $request = new SynonymCardRequest();
        $request->setSkrSuccessUrl('http://testcms.ru/success')
                ->setSkrErrorUrl('http://testcms.ru/fail')
                ->setSkrResponseFormat(SynonymCardRequest::FORMAT_JSON)
                ->setSkrDestinationCardNumber('555555555554444');

        $serializer = $request->getSerializer();

        $excepted = [
            "skr_destinationCardNumber" => '555555555554444',
            "skr_responseFormat"        => 'json',
            "skr_errorUrl"              => 'http://testcms.ru/fail',
            "skr_successUrl"            => 'http://testcms.ru/success',
        ];

        $this->assertEquals($excepted, $serializer->serialize($request));
    }
}