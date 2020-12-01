<?php


namespace Tests\YooKassaPayout\Model\Recipient;


use Exception;
use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Helpers\Random;
use YooKassaPayout\Common\Helpers\StringObject;
use YooKassaPayout\Model\Recipient\BankAccountRecipient;

class BankAccountRecipientTest extends TestCase
{
    /**
     * @dataProvider validStringValues
     * @param $custAccount
     */
    public function testSetCustAccount($custAccount)
    {
        $instance = new BankAccountRecipient();
        $instance->setCustAccount($custAccount);
        $this->assertEquals((string)$custAccount, $instance->getCustAccount());
    }

    /**
     * @dataProvider validBankAccounts
     * @param $bik
     */
    public function testSetBankBIK($bik)
    {
        $instance = new BankAccountRecipient();
        $instance->setBankBIK($bik);
        $this->assertEquals((string)$bik, $instance->getBankBIK());
    }

    /**
     * @dataProvider validStringValues
     * @param $purpose
     */
    public function testSetPaymentPurpose($purpose)
    {
        $instance = new BankAccountRecipient();
        $instance->setPaymentPurpose($purpose);
        $this->assertEquals((string)$purpose, $instance->getPaymentPurpose());
    }

    /**
     * @dataProvider validStringValues
     * @param $name
     */
    public function testSetBankName($name)
    {
        $instance = new BankAccountRecipient();
        $instance->setBankName($name);
        $this->assertEquals((string)$name, $instance->getBankName());
    }

    /**
     * @dataProvider validStringValues
     * @param $city
     */
    public function testSetBankCity($city)
    {
        $instance = new BankAccountRecipient();
        $instance->setBankCity($city);
        $this->assertEquals((string)$city, $instance->getBankCity());
    }

    /**
     * @dataProvider validBankAccounts
     * @param $account
     */
    public function testSetBankCorAccount($account)
    {
        $instance = new BankAccountRecipient();
        $instance->setBankCorAccount($account);
        $this->assertEquals((string)$account, $instance->getBankCorAccount());
    }

    /**
     * test toArray
     */
    public function testToArray()
    {
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

    /**
     * @return array|bool
     */
    public function validStringValues()
    {
        try {
            return [
                [Random::str(10, 50)],
                [new StringObject('124gfdgd')],
            ];
        } catch (Exception $e) {
            $this->fail($e->getMessage());
            return false;
        }
    }

    /**
     * @return array|bool
     */
    public function validBankAccounts()
    {
        try {
            return [
                [Random::int(99999999, 9999999999999999)],
                ['9995435346436346643'],
            ];
        } catch (Exception $e) {
            $this->fail($e->getMessage());
            return false;
        }
    }
}