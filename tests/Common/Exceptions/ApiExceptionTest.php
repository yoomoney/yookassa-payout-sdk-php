<?php

namespace Tests\YooKassaPayout\Common\Exceptions;

use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Exceptions\ApiException;

class ApiExceptionTest extends TestCase
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new ApiException($message, $code, $responseHeaders, $responseBody);
    }

    /**
     * @dataProvider responseHeadersDataProvider
     * @param array $headers
     */
    public function testGetResponseHeaders($headers)
    {
        $instance = $this->getTestInstance('', 0, $headers);
        self::assertEquals($headers, $instance->getResponseHeaders());
    }

    public function responseHeadersDataProvider()
    {
        return [
            [
                [],
            ],
            [
                ['HTTP/1.1 200 Ok'],
            ],
            [
                [
                    'HTTP/1.1 200 Ok',
                    'Content-length: 0',
                ],
            ],
            [
                [
                    'HTTP/1.1 200 Ok',
                    'Content-length: 0',
                    'Connection: close',
                ],
            ],
        ];
    }

    /**
     * @dataProvider responseBodyDataProvider
     * @param string $body
     */
    public function testGetResponseBody($body)
    {
        $instance = $this->getTestInstance('', 0, [], $body);
        self::assertEquals($body, $instance->getResponseBody());
    }

    public function responseBodyDataProvider()
    {
        return [
            [
                '',
            ],
            [
                '{"success":true}',
            ],
            [
                '<html></html>',
            ],
        ];
    }
}
