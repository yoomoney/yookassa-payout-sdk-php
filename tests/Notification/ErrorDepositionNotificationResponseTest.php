<?php


namespace Tests\YooKassaPayout\Notification;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Helpers\StringObject;
use YooKassaPayout\Model\RequestDateTime;
use YooKassaPayout\Notification\ErrorDepositionNotificationResponse;

class ErrorDepositionNotificationResponseTest extends TestCase
{
    public function testConstruct()
    {
        $coid = '54543';
        $status = '0';
        $processDT = RequestDateTime::getDateTime();

        $instance = new ErrorDepositionNotificationResponse($coid, $status, $processDT);

        $this->assertEquals($coid, $instance->getClientOrderId());
        $this->assertEquals($status, $instance->getStatus());
        $this->assertEquals($processDT, $instance->getProcessedDT());
    }

    /**
     * @dataProvider validClientOrderId
     * @param $excepted
     * @param $value
     */
    public function testSetClientOrderId($excepted, $value)
    {
        $processDT = RequestDateTime::getDateTime();
        $instance = new ErrorDepositionNotificationResponse('1', 0, $processDT);
        $instance->setClientOrderId($value);
        $this->assertEquals($excepted, $instance->getClientOrderId());
    }

    /**
     * @dataProvider validStatusValues
     * @param $excepted
     * @param $value
     */
    public function testSetStatus($excepted, $value)
    {
        $processDT = RequestDateTime::getDateTime();
        $instance = new ErrorDepositionNotificationResponse('1', 0, $processDT);
        $instance->setStatus($value);
        $this->assertEquals($excepted, $value);
    }

    public function testSetProcessedDT()
    {
        $processDT = RequestDateTime::getDateTime();
        $instance = new ErrorDepositionNotificationResponse('1', 0, $processDT);

        $processDT = RequestDateTime::getDateTime();
        $instance->setProcessedDT($processDT);
        $this->assertEquals($processDT, $instance->getProcessedDT());
    }

    public function validStatusValues()
    {
        return [
            ['3', '3'],
            [4, '4'],
            [new StringObject('1'), '1'],
        ];
    }

    /**
     * @return array
     */
    public function validClientOrderId()
    {
        return [
            ['4454654645645654', '4454654645645654'],
            [1053453454354, '1053453454354'],
            [5454, '5454'],
            [new StringObject('5435435'), '5435435'],
        ];
    }
}