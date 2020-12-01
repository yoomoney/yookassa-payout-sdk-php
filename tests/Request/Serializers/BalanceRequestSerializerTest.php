<?php


namespace Tests\YooKassaPayout\Request\Serializers;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Request\BalanceRequest;
use YooKassaPayout\Request\Serializers\BalanceRequestSerializer;

class BalanceRequestSerializerTest extends TestCase
{
    public function testSerialize()
    {
        $serializer = new BalanceRequestSerializer();
        $instance = new BalanceRequest();
        $instance->setClientOrderId('test32');
        $expected = [
            'clientOrderId' => 'test32',
            'requestDT'     => $instance->getRequestDT(),
        ];

        $serializedData = $serializer->serialize($instance);

        $this->assertEquals($expected, $serializedData);
    }
}