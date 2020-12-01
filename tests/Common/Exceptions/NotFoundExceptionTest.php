<?php

namespace Tests\YooKassaPayout\Common\Exceptions;

use YooKassaPayout\Common\Exceptions\NotFoundException;

class NotFoundExceptionTest extends AbstractApiRequestExceptionTest
{
    public function getTestInstance($message = '', $code = 0, $responseHeaders = [], $responseBody = null)
    {
        return new NotFoundException($responseHeaders, $responseBody);
    }

    public function expectedHttpCode()
    {
        return NotFoundException::HTTP_CODE;
    }
}
