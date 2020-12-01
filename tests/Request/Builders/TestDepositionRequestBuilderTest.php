<?php


namespace Tests\YooKassaPayout\Request\Builders;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Model\CurrencyCode;
use YooKassaPayout\Request\Builders\TestDepositionRequestBuilder;

class TestDepositionRequestBuilderTest extends TestCase
{
    public function testBuild()
    {
        $instance = new TestDepositionRequestBuilder();

        $paymentParams = [
            'pof_offerAccepted' => 1,
            'pdr_lastName'      => 'Иванов',
            'pdr_firstName'     => 'Иван',
            'pdr_middleName'    => 'Иванович',
            'pdr_docNumber'     => '7785325',
            'pdr_birthDate'     => '08.09.1989',
            'pdr_address'       => 'test 12 kkl',
            'smsPhoneNumber'    => '+798888434443',
        ];

        $request = [
            'dstAccount' => '2443543534535',
            'amount'     => 10,
            'currency'   => CurrencyCode::RUB,
            'contract'   => 'test',
            'paymentParams' => $paymentParams,
        ];

        $makeDepositionRequest = $instance->build($request);

        $this->assertEquals('2443543534535', $makeDepositionRequest->getDstAccount());
        $this->assertEquals('10.00', $makeDepositionRequest->getAmount());
        $this->assertEquals('643', $makeDepositionRequest->getCurrency());
        $this->assertEquals('test', $makeDepositionRequest->getContract());
        $this->assertEquals($paymentParams, $makeDepositionRequest->getPaymentParams());
        $this->assertEquals('testDepositionRequest', $makeDepositionRequest->getRequestName());
    }
}