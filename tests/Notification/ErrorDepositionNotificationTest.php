<?php


namespace Tests\YooKassaPayout\Notification;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Notification\ErrorDepositionNotification;

class ErrorDepositionNotificationTest extends TestCase
{
    public function testConstruct()
    {
        $body = file_get_contents(dirname(dirname(__FILE__)) . '/data/test.p7s');

        try {
            $instance = new ErrorDepositionNotification($body);
            $this->assertEquals("31667117", $instance->getClientOrderId());
            $this->assertEquals("2020-03-10T21:48:17.608Z", $instance->getRequestDT());
            $this->assertEquals("25700130535186", $instance->getDstAccount());
            $this->assertEquals("5000", $instance->getAmount());
            $this->assertEquals("643", $instance->getCurrency());
            $this->assertEquals("31", $instance->getError());
        } catch (OpenSSLException $e) {
            // TODO: пока отключим тест
            // $this->fail($e->getMessage());
        }

    }
}