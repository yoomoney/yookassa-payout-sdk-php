<?php

namespace Tests\YooKassaPayout\Request;

use Exception;
use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Helpers\Random;
use YooKassaPayout\Common\Helpers\StringObject;
use YooKassaPayout\Model\Recipient\BankCardRecipient;
use YooKassaPayout\Request\MakeDepositionRequest;

class MakeDepositionRequestTest extends TestCase
{
    /**
     * @param $account
     * @dataProvider validDstAccountProvider
     */
    public function testSetDstAccount($account)
    {
        $instance = new MakeDepositionRequest();
        $instance->setDstAccount($account);
        $this->assertEquals((string)$account, $instance->getDstAccount());
    }

    /**
     * @param $itn
     * @dataProvider validItnProvider
     */
    public function testSetItn($itn)
    {
        $instance = new MakeDepositionRequest();
        $instance->setItn($itn);
        $this->assertEquals((string)$itn, $instance->getItn());
    }

    /**
     * @param $amount
     * @param $exceptParameter
     * @dataProvider validAmount
     */
    public function testSetAmount($exceptParameter, $amount)
    {
        $instance = new MakeDepositionRequest();
        $instance->setAmount($amount);
        $this->assertEquals($exceptParameter, $instance->getAmount());
    }

    /**
     * @param $currency
     * @dataProvider validCurrency
     */
    public function testSetCurrency($currency)
    {
        $instance = new MakeDepositionRequest();
        $instance->setCurrency($currency);
        $this->assertEquals((string)$currency, $instance->getCurrency());
    }

    /**
     * @param $contract
     * @dataProvider validContract
     */
    public function testSetContract($contract)
    {
        $instance = new MakeDepositionRequest();
        $instance->setContract($contract);
        $this->assertEquals((string)$contract, $instance->getContract());
    }

    /**
     * @dataProvider validPaymentParams
     * @param $params
     */
    public function testSetPaymentParams($params)
    {
        $instance = new MakeDepositionRequest();
        $instance->setPaymentParams($params);
        $this->assertEquals($params, $instance->getPaymentParams());
    }

    /**
     * @return array|bool
     */
    public function validPaymentParams()
    {
        $recipient = new BankCardRecipient();
        $recipient->setSkrDestinationCardSynonym('gfdgdfgdfgdf')
                  ->setPofOfferAccepted(true);
        try {
            return [
                [$recipient],
                [['random1' => Random::str(1, 10), 'random2' => Random::int(10, 55)]]
            ];
        } catch (Exception $e) {
            $this->fail($e->getMessage());
            return false;
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function validContract()
    {
        return [
            ['Test Contract'],
            [Random::str(1, 100)],
            [5345345435],
            [new StringObject('123gfgf')],
        ];
    }

    /**
     * @return array
     * @throws Exception
     */
    public function validCurrency()
    {
        return [
            ['545'],
            [Random::int(99, 999)],
            [new StringObject('445')],
        ];
    }

    /**
     * @return array
     */
    public function validAmount()
    {
        return [
            ['10.00', 10],
            ['10.02', 10.02424],
            ['10.44', 10.44],
            ['10423.00', new StringObject('10423')]
        ];
    }

    /**
     * @return array
     */
    public function validDstAccountProvider()
    {
        return [
            ['4454654645645654'],
            [10534534.54354],
            [5454],
            ['gfgfdgdfgfdgdfg'],
            [new StringObject('123gfgf')],
        ];
    }

    /**
     * @return array
     */
    public function validItnProvider()
    {
        return [
            ['123456789000'],
            [123456789000],
            [new StringObject('123456789000')],
        ];
    }
}
