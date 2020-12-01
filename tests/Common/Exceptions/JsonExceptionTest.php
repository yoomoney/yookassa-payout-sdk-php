<?php

namespace Tests\YooKassaPayout\Common\Exceptions;

use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Exceptions\JsonException;

class JsonExceptionTest extends TestCase
{
    /**
     * @dataProvider messageDataProvider
     * @param $message
     * @param $code
     */
    public function testGetMessage($message, $code)
    {
        $instance = new JsonException($message, $code);

        if (array_key_exists($code, JsonException::$errorLabels)) {
            $message .= ' ' . JsonException::$errorLabels[$code];
        } else {
            $message .= ' Unknown error';
        }
        self::assertEquals($message, $instance->getMessage());
    }

    public function messageDataProvider()
    {
        $result = [];
        foreach (JsonException::$errorLabels as $code => $message) {
            $result[] = [$message, $code];
        }
        $result[] = ['Test error', -1];
        return $result;
    }
}
