<?php


namespace Tests\YooKassaPayout\Common\Helpers;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Helpers\OpenSSL;

class OpenSSLTest extends TestCase
{
    /**
     * @dataProvider validDataDecrypt
     * @param $excepted
     * @param $data
     * @throws \YooKassaPayout\Common\Exceptions\OpenSSLException
     */
    public function testDecryptPKCS7($excepted, $data)
    {
        $actual = OpenSSL::decryptPKCS7($data, dirname(dirname(dirname(__FILE__))) . '/data/client_cert.crt');
        $this->assertXmlStringEqualsXmlString($excepted, $actual);
    }

    public function validDataDecrypt()
    {
        $encrypt = file_get_contents(dirname(dirname(dirname(__FILE__))) . '/data/test.p7s');
        $decrypt = '<?xml version="1.0" encoding="UTF-8"?><makeDepositionResponse clientOrderId="158589992699" status="3" error="48" processedDT="2020-04-03T10:45:28.745+03:00" balance="-19186067.60" techMessage="Операция запрещена. Пожалуйста, обратитесь в службу поддержки." invoiceId="2002368632944" />';
        return [
            [$decrypt, $encrypt],
        ];
    }
}