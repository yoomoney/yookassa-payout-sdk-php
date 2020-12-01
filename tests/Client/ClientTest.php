<?php


namespace Tests\YooKassaPayout\Client;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Model\CurrencyCode;
use YooKassaPayout\Request\MakeDepositionRequest;
use YooKassaPayout\Request\TestDepositionRequest;

class ClientTest extends TestCase
{

    /**
     * @dataProvider validCreateDescriptionData
     * @param $request
     * @param null $clientOrderId
     */
    public function testCreateDeposition($request, $clientOrderId = null)
    {
        if (is_array($request)) {
            if (isset($request['name']) && $request['name'] === 'makeDeposition') {
                $request = MakeDepositionRequest::getBuilder($clientOrderId)->build($request);
            }
            $request = TestDepositionRequest::getBuilder($clientOrderId)->build($request);
        }

        $this->assertEquals('10.00', $request->getAmount());
        $this->assertEquals('test',  $request->getContract());
        $this->assertEquals('123', $request->getClientOrderId());
        $this->assertEquals('10.00', $request->getAmount());
        $this->assertEquals('5554353454353', $request->getDstAccount());
        $this->assertEquals('643', $request->getCurrency());

        $requestEndpoint = str_replace('Request', '', $request->getRequestName());

        $this->assertEquals('makeDeposition', $requestEndpoint);
    }

    public function validCreateDescriptionData()
    {
        $request = new MakeDepositionRequest();
        $request->setAmount('10')
                ->setContract('test')
                ->setClientOrderId('123')
                ->setDstAccount('5554353454353');

        return [
            [
                [
                    'requestName' => 'makeDeposition',
                    'clientOrderId' => '123',
                    'dstAccount' => '5554353454353',
                    'amount' => 10,
                    'currency' => CurrencyCode::RUB,
                    'contract' => 'test',
                ],
            ],
            [$request],
        ];
    }
}