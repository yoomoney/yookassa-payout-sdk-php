<?php


namespace Tests\YooKassaPayout\Model\Recipient;


use Exception;
use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Helpers\Random;
use YooKassaPayout\Model\Recipient\BankCardRecipient;

class AbstractRecipientTest extends TestCase
{
    /**
     * @dataProvider validPofOffer
     * @param $value
     * @param $exceptedValue
     */
    public function testSetPofOfferAccepted($value, $exceptedValue)
    {
        $instance = new BankCardRecipient();
        $instance->setPofOfferAccepted($value);
        $this->assertEquals($exceptedValue, $instance->getPofOfferAccepted());
    }

    /**
     * @dataProvider validStringValues
     * @param $lastName
     */
    public function testPdrSetLastName($lastName)
    {
        $instance = new BankCardRecipient();
        $instance->setPdrLastName($lastName);
        $this->assertEquals((string)$lastName, $instance->getPdrLastName());
    }

    /**
     * @dataProvider validStringValues
     * @param $firstName
     */
    public function testSetPdrFirstName($firstName)
    {
        $instance = new BankCardRecipient();
        $instance->setPdrFirstName($firstName);
        $this->assertEquals((string)$firstName, $instance->getPdrFirstName());
    }

    /**
     * @dataProvider validStringValues
     * @param $middleName
     */
    public function testSetPdrMiddleName($middleName)
    {
        $instance = new BankCardRecipient();
        $instance->setPdrMiddleName($middleName);
        $this->assertEquals((string)$middleName, $instance->getPdrMiddleName());
    }

    /**
     * @dataProvider validDate
     * @param $exceptedDate
     * @param $date
     */
    public function testSetPdrBirthDate($exceptedDate, $date)
    {
        $instance = new BankCardRecipient();

        try {
            $instance->setPdrBirthDate($date);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($exceptedDate, $instance->getPdrBirthDate());
    }

    /**
     * @dataProvider validStringValues
     * @param $number
     */
    public function testSetDocNumber($number)
    {
        $instance = new BankCardRecipient();
        $instance->setDocNumber($number);
        $this->assertEquals((string)$number, $instance->getPdrDocNumber());
   }

    /**
     * @dataProvider validStringValues
     * @param $address
     */
    public function testSetPdrAddress($address)
    {
        $instance = new BankCardRecipient();
        $instance->setPdrAddress($address);
        $this->assertEquals((string)$address, $instance->getPdrAddress());
    }

    /**
     * @dataProvider validDate
     * @param $date
     * @param $exceptedDate
     */
    public function testSetPdrDocIssueDate($exceptedDate, $date)
    {
        $instance = new BankCardRecipient();

        try {
            $instance->setPdrDocIssueDate($date);
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $this->assertEquals($exceptedDate, $instance->getPdrDocIssueDate());
    }

    public function toArray()
    {
        $instance = new BankCardRecipient();
        try {
            $instance->setPofOfferAccepted(true)
                ->setPdrLastName('Иванов')
                ->setPdrFirstName('Иван')
                ->setPdrMiddleName('Иванович')
                ->setDocNumber(777745)
                ->setPdrBirthDate('05.03.1993')
                ->setPdrAddress('Ст1 88 23')
                ->setSmsPhoneNumber(79000000000)
                ->setPdrDocIssueDate('03.03.2010');
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }

        $excepted =  [
            'skr_destinationCardSynonim' => NULL,
            'pdr_city'          => NULL,
            'pdr_postcode'      => NULL,
            'pdr_docIssueDate'  => '03.03.2010',
            'pof_offerAccepted' => 1,
            'pdr_lastName'      => 'Иванов',
            'pdr_firstName'     => 'Иван',
            'pdr_middleName'    => 'Иванович',
            'pdr_docNumber'     => '777745',
            'pdr_birthDate'     => '05.03.1993',
            'pdr_address'       => 'Ст1 88 23',
            'smsPhoneNumber'    => '79990007788',
        ];

        $this->assertEquals($excepted, $instance->toArray());
    }

    /**
     * @return array
     */
    public function validPofOffer()
    {
        return [
          [true, 1],
          [false, 0],
        ];
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

    /**
     * @return array
     */
    public function validDate()
    {
        return [
            ['10.03.2001', 'March 10, 2001'],
            ['10.03.2020', '10-03-2020'],
        ];
    }
}