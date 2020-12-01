<?php

namespace Tests\YooKassaPayout\Common\Exceptions;

use YooKassaPayout\Common\Exceptions\AuthorizeException;

class AuthorizeExceptionTest extends ApiExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new AuthorizeException($message, $code, $responseHeaders, $responseBody);
    }
}
