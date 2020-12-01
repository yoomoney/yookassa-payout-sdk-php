<?php


namespace Tests\YooKassaPayout\Model;


use Exception;
use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Helpers\Random;
use YooKassaPayout\Common\Helpers\StringObject;
use YooKassaPayout\Model\Organization;

class OrganizationTest extends TestCase
{
    public function testConstruct()
    {
        $organizationInfo = [
            'country_name' => 'RU',
            'state_or_province_name' => 'NN',
            'locality_name' => 'Russia',
            'organization_name' => 'yanex.money cmsteam',
            'organizational_unit_name' => 'ym cms',
            'common_name' => '/business/cmsteam',
            'email_address' => 'cms@yoomoney.ru',
        ];

        $instance = new Organization($organizationInfo);

        $this->assertEquals($organizationInfo['country_name'], $instance->getCountryName());
        $this->assertEquals($organizationInfo['state_or_province_name'], $instance->getStateOrProvinceName());
        $this->assertEquals($organizationInfo['locality_name'], $instance->getLocalityName());
        $this->assertEquals($organizationInfo['organization_name'], $instance->getOrganizationName());
        $this->assertEquals($organizationInfo['organizational_unit_name'], $instance->getOrganizationalUnitName());
        $this->assertEquals($organizationInfo['common_name'], $instance->getCommonName());
        $this->assertEquals($organizationInfo['email_address'], $instance->getEmailAddress());
    }

    /**
     * @dataProvider validCountryName
     * @param $excepted
     * @param $name
     */
    public function testSetCountryName($excepted, $name)
    {
        $instance = new Organization();
        $instance->setCountryName($name);
        $this->assertEquals($excepted, $instance->getCountryName());
    }

    /**
     * @dataProvider validStringValues
     * @param $value
     */
    public function testSetStateOrProvinceName($value)
    {
        $instance = new Organization();
        $instance->setStateOrProvinceName($value);
        $this->assertEquals((string)$value, $instance->getStateOrProvinceName());
    }

    /**
     * @dataProvider validStringValues
     * @param $name
     */
    public function testSetLocalityName($name)
    {
        $instance = new Organization();
        $instance->setLocalityName($name);
        $this->assertEquals((string)$name, $instance->getLocalityName());
    }

    /**
     * @dataProvider validStringValues
     * @param $name
     */
    public function testSetOrganizationName($name)
    {
        $instance = new Organization();
        $instance->setOrganizationName($name);
        $this->assertEquals((string)$name, $instance->getOrganizationName());
    }

    /**
     * @dataProvider validStringValues
     * @param $name
     */
    public function testSetOrganizationalUnitName($name)
    {
        $instance = new Organization();
        $instance->setOrganizationalUnitName($name);
        $this->assertEquals((string)$name, $instance->getOrganizationalUnitName());
    }

    /**
     * @dataProvider validCommonNames
     * @param $expected
     * @param $commonName
     */
    public function testSetCommonName($expected, $commonName)
    {
        $instance = new Organization();
        $instance->setCommonName($commonName);
        $this->assertEquals($expected, $instance->getCommonName());
    }

    /**
     * @dataProvider validEmails
     * @param $email
     */
    public function testSetEmailAddress($email)
    {
        $instance = new Organization();
        $instance->setEmailAddress($email);
        $this->assertEquals((string)$email, $instance->getEmailAddress());
    }

    public function testToArray()
    {
        $instance = new Organization();
        $instance->setLocalityName('Rus')
                 ->setCommonName('test123')
                 ->setOrganizationalUnitName('test12')
                 ->setEmailAddress('cms@yoomoney.ru')
                 ->setOrganizationName('cms');

        $excepted = [
            'countryName' => "RU",
            'stateOrProvinceName' => 'Russia',
            'localityName' => 'Rus',
            'organizationName' => 'cms',
            'organizationalUnitName' => 'test12',
            'commonName' => '/business/test123',
            'emailAddress' => 'cms@yoomoney.ru',
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
            [new StringObject('124gfdgd')],
        ];
    }

    /**
     * @return array
     */
    public function validCommonNames()
    {
        return [
            ['/business/test123', '/business/test123'],
            ['/business/test123', 'test123'],
            ['/business/1234', 1234],
        ];
    }

    /**
     * @return array
     */
    public function validCountryName()
    {
        return [
            ['RU', 'ru'],
            ['EU', 'eU'],
        ];
    }

    /**
     * @return array
     */
    public function validEmails()
    {
        return [
            ['test@mail.ru'],
            ['cms@yoomoney.ru'],
            ['test@gmail.com'],
            ['tst@test.test'],
        ];
    }
}