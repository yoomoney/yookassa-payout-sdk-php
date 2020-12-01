<?php


namespace Tests\YooKassaPayout\Request;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Request\Keychain;

class KeychainTest extends TestCase
{
    private function getInstance()
    {
        return new Keychain('./public.cert', './private.pem', 'testpass');
    }

    public function constructTest()
    {
        $instance = $this->getInstance();
        $this->assertEquals('./public.cert', $instance->getPublicCert());
        $this->assertEquals('./private.pem', $instance->getPrivateKey());
        $this->assertEquals('testpass', $instance->getKeyPassword());
    }

    public function testSetPublicCert()
    {
        $instance = $this->getInstance();
        $instance->setPublicCert('./newpublic.cert');
        $this->assertEquals('./newpublic.cert', $instance->getPublicCert());
    }

    public function testSetPrivateKey()
    {
        $instance = $this->getInstance();
        $instance->setPrivateKey('./newprivate.key');
        $this->assertEquals('./newprivate.key', $instance->getPrivateKey());
    }

    public function testSetKeyPassword()
    {
        $instance = $this->getInstance();
        $instance->setKeyPassword('testnewpass');
        $this->assertEquals('testnewpass', $instance->getKeyPassword());
    }
}