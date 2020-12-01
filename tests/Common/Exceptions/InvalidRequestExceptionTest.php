<?php

namespace Tests\YooKassaPayout\Common\Exceptions;

use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Exceptions\InvalidRequestException;
use YooKassaPayout\Request\AbstractRequest;
use YooKassaPayout\Request\MakeDepositionRequest;

class InvalidRequestExceptionTest extends TestCase
{
    /**
     * @dataProvider requestObjectDataProvider
     * @param $requestObject
     */
    public function testGetRequestObject($requestObject)
    {
        $instance = new InvalidRequestException($requestObject);
        if ($requestObject instanceof AbstractRequest) {
            self::assertSame($requestObject, $instance->getRequestObject());
            $message = 'Failed to build request "' . get_class($requestObject) . '": ""';
            self::assertEquals($message, $instance->getMessage());
        } else {
            self::assertNull($instance->getRequestObject());
            self::assertEquals($requestObject, $instance->getMessage());
        }
    }

    public function requestObjectDataProvider()
    {
        return array(
            array(''),
            array('test'),
            array(new MakeDepositionRequest()),
        );
    }
}
