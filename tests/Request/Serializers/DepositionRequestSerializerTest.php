<?php


namespace Request\Serializers;


use Exception;
use PHPUnit\Framework\TestCase;
use YooKassaPayout\Model\CurrencyCode;
use YooKassaPayout\Model\Recipient\BankAccountRecipient;
use YooKassaPayout\Request\MakeDepositionRequest;
use YooKassaPayout\Request\Serializers\DepositionRequestSerializer;

class DepositionRequestSerializerTest extends TestCase
{
    public function testSerialize()
    {
        $instance = new MakeDepositionRequest();
        $instance->setClientOrderId(12)
                ->setDstAccount(55555512)
                ->setAmount(3.239124)
                ->setContract('cms contract plus edition');

        $expected = [
            'clientOrderId' => '12',
            'requestDT'     => $instance->getRequestDT(),
            'dstAccount'    => '55555512',
            'amount'        => '3.24',
            'currency'      => (string)CurrencyCode::RUB,
            'contract'      => 'cms contract plus edition',
        ];

        $this->assertEquals($expected, $instance->getSerializer()->serialize($instance));
    }

    public function testSerializePaymentParams()
    {
        $params = [
            'test1' => 'test2',
            'test3' => 'test4',
            464 => '44',
            'test5' => 246,
        ];

        $serializer = new DepositionRequestSerializer();
        $result = $serializer->serializePaymentParams($params);

        $this->assertEquals($params, $result);

        $instance = new BankAccountRecipient();
        try {
            $instance->setBankCity('bank city')
                ->setBankName('bank name')
                ->setBankBIK(111111)
                ->setPaymentPurpose('purpose')
                ->setBankCorAccount('accountngfgfg44')
                ->setPofOfferAccepted(true)
                ->setPdrDocIssueDate('08.12.2020')
                ->setCustAccount('74343443434')
                ->setPdrMiddleName('Иванович')
                ->setPdrLastName('Иванов')
                ->setPdrFirstName('Иван')
                ->setPdrBirthDate('01.08.1987')
                ->setPdrAddress('Яндексграунд')
                ->setDocNumber(7889009)
                ->setSmsPhoneNumber('79998887775');

            $result = $instance->toArray();
        } catch (Exception $e) {
            $this->fail($e->getMessage());
            return;
        }

        $excepted = [
            'pof_offerAccepted' => 1,
            'pdr_lastName'      => 'Иванов',
            'pdr_firstName'     => 'Иван',
            'pdr_middleName'    => 'Иванович',
            'pdr_docNumber'     => '7889009',
            'pdr_birthDate'     => '01.08.1987',
            'pdr_address'       => 'Яндексграунд',
            'smsPhoneNumber'    => '79998887775',
            'CustAccount'       => '74343443434',
            'BankBik'           => '111111',
            'payment_purpose'   => 'purpose',
            'pdr_docIssueYear'  => '2020',
            'pdr_docIssueMonth' => '12',
            'pdr_docIssueDay'   => '08',
            'BankName'          => 'bank name',
            'BankCity'          => 'bank city',
            'BankCorAccount'    => 'accountngfgfg44'
        ];

        $this->assertEquals($excepted, $result);
    }
}