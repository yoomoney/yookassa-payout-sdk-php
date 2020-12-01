<?php


namespace Tests\YooKassaPayout\Model\Recipient;


use Exception;
use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Helpers\Random;
use YooKassaPayout\Model\Recipient\BankCardRecipient;

class BankCardRecipientTest extends TestCase
{
    /**
     * @dataProvider validStringValues
     * @param $city
     */
    public function testSetPdrCity($city)
    {
        $instance = new BankCardRecipient();
        $instance->setPdrCity($city);
        $this->assertEquals((string)$city, $instance->getPdrCity());
    }

    /**
     * @dataProvider validStringValues
     * @param $code
     */
    public function testSetPdrPostcode($code)
    {
        $instance = new BankCardRecipient();
        $instance->setPdrPostcode($code);
        $this->assertEquals((string)$code, $instance->getPdrPostcode());
    }

    /**
     * @dataProvider validStringValues
     * @param $synonym
     */
    public function testSetSkrDestinationCardSynonym($synonym)
    {
        $instance = new BankCardRecipient();
        $instance->setSkrDestinationCardSynonym($synonym);
        $this->assertEquals((string)$synonym, $instance->getSkrDestinationCardSynonym());
    }

    /**
     * @dataProvider validStringValues
     * @param $cpsYmAccount
     */
    public function testSetCpsYmAccount($cpsYmAccount)
    {
        $instance = new BankCardRecipient();
        $instance->setCpsYmAccount($cpsYmAccount);
        $this->assertEquals((string)$cpsYmAccount, $instance->getCpsYmAccount());
    }

    public function testHasCpsYmAccount()
    {
        $instance = new BankCardRecipient();
        $instance->setCpsYmAccount('2143353553');
        $this->assertTrue($instance->hasCpsYmAccount());

        $instance = new BankCardRecipient();
        $this->assertFalse($instance->hasCpsYmAccount());
    }

    public function testToArray()
    {
        $instance = new BankCardRecipient();
        try {
            $instance->setCpsYmAccount('2143353553')
                     ->setSmsPhoneNumber('79998887775')
                     ->setPofOfferAccepted(true)
                     ->setSkrDestinationCardSynonym('synonym35435dGgklf')
                     ->setPdrCity('city')
                     ->setPdrCountry('643')
                     ->setPdrPostcode('53535')
                     ->setPdrDocIssueDate('08.10.2015');
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
        $excepted = [
            'skr_destinationCardSynonim' => 'synonym35435dGgklf',
            'pdr_city'          => 'city',
            'pdr_postcode'      => '53535',
            'pdr_country'       => '643',
            'pdr_docIssueDate'  => '08.10.2015',
            'cps_ymAccount'     => '2143353553',
            'smsPhoneNumber'    => '79998887775',
            'pof_offerAccepted' => 1,
        ];
        $this->assertEquals($excepted, $instance->toArray());

        $instance = new BankCardRecipient();
        try {
            $instance->setDocNumber('2143353553')
                     ->setSmsPhoneNumber('79998887775')
                     ->setPofOfferAccepted(true)
                     ->setSkrDestinationCardSynonym('synonym35435dGgklf')
                     ->setPdrCity('city')
                     ->setPdrPostcode('53535')
                     ->setPdrDocIssueDate('08.10.2015')
                     ->setPdrMiddleName('MiddleName')
                     ->setPdrFirstName('FirstName')
                     ->setPdrLastName('LastName')
                     ->setPdrBirthDate('08.07.1988')
                    ->setPdrAddress('address')
                    ->setPdrCountry("643");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
        $excepted = [
            'skr_destinationCardSynonim' => 'synonym35435dGgklf',
            'pdr_city'          => 'city',
            'pdr_postcode'      => '53535',
            'pdr_docIssueDate'  => '08.10.2015',
            'pof_offerAccepted' => 1,
            'pdr_lastName'      => 'LastName',
            'pdr_firstName'     => 'FirstName',
            'pdr_middleName'    => 'MiddleName',
            'pdr_docNumber'     => '2143353553',
            'pdr_birthDate'     => '08.07.1988',
            'pdr_address'       => 'address',
            'smsPhoneNumber'    => '79998887775',
            'pdr_country'       => '643',
        ];

        $this->assertEquals($excepted, $instance->toArray());
    }

    /**
     * @return array
     * @throws Exception
     */
    public function validStringValues()
    {
        return [
            [Random::str(10, 50)],
            [Random::int(10, 1000)],
        ];
    }
}