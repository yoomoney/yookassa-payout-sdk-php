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
        $actual = OpenSSL::decryptPKCS7($data);
        $this->assertXmlStringEqualsXmlString($excepted, $actual);
    }

    public function validDataDecrypt()
    {
        $encrypt = "-----BEGIN PKCS7-----
MIAGCSqGSIb3DQEHAqCAMIACAQExCzAJBgUrDgMCGgUAMIAGCSqGSIb3DQEHAaCA
JIAEggFWPD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4NCjxt
YWtlRGVwb3NpdGlvblJlc3BvbnNlIGNsaWVudE9yZGVySWQ9IjE1ODU4OTk5MjY5
OSIgc3RhdHVzPSIzIiBlcnJvcj0iNDgiIHByb2Nlc3NlZERUPSIyMDIwLTA0LTAz
VDEwOjQ1OjI4Ljc0NSswMzowMCIgYmFsYW5jZT0iLTE5MTg2MDY3LjYwIiB0ZWNo
TWVzc2FnZT0i0J7Qv9C10YDQsNGG0LjRjyDQt9Cw0L/RgNC10YnQtdC90LAuINCf
0L7QttCw0LvRg9C50YHRgtCwLCDQvtCx0YDQsNGC0LjRgtC10YHRjCDQsiDRgdC7
0YPQttCx0YMg0L/QvtC00LTQtdGA0LbQutC4LiIgaW52b2ljZUlkPSIyMDAyMzY4
NjMyOTQ0IiAvPg0KAAAAAAAAMYICNzCCAjMCAQEwgYQwfDELMAkGA1UEBhMCUlUx
DzANBgNVBAgTBlJ1c3NpYTEZMBcGA1UEBxMQU2FpbnQtUGV0ZXJzYnVyZzEYMBYG
A1UEChMPUFMgWWFuZGV4Lk1vbmV5MRAwDgYDVQQLEwdVbmtub3duMRUwEwYDVQQD
EwxZYW5kZXguTW9uZXkCBE1aJWYwCQYFKw4DAhoFAKCBiDAYBgkqhkiG9w0BCQMx
CwYJKoZIhvcNAQcBMBwGCSqGSIb3DQEJBTEPFw0yMDA0MDMwNzQ1MjhaMCMGCSqG
SIb3DQEJBDEWBBRKr+C6fLJIT6OyHHSx6cSNxTLSlzApBgkqhkiG9w0BCTQxHDAa
MAkGBSsOAwIaBQChDQYJKoZIhvcNAQEBBQAwDQYJKoZIhvcNAQEBBQAEggEASB+q
naaO2PiTI2n+DHgj3yV0ZvUZM7rO7W+CrS5SBKUviV3zhXzbwP7S5Gg1gc7cgYnp
32x79tArLD1S1RahAgIkxdkcyyuhiC0zIZMFaF28ZmuV1LK4epgxrcXhG8P6D2Yb
1PS1cyDVzoUhxVZp+pw8IQDYUE7lziDrmknsA7JNySsx2tJ8HyaWhpQSPbsbGULD
ZOxoCVvz54pv78u608Ddyz6jdHS86xDHe8RzIUt4lxGfH8SNWIde9dMiM9pvp+6R
/+XDUrzn+l2lVZCqoJB8EZ1s6bL7PQ7XngfMaY8hTi3hnsSh0MZY9T891NDtiVoh
Tu+cb8vpCyGIX3AuSwAAAAAAAA==
-----END PKCS7-----";
        $decrypt = '<?xml version="1.0" encoding="UTF-8"?><makeDepositionResponse clientOrderId="158589992699" status="3" error="48" processedDT="2020-04-03T10:45:28.745+03:00" balance="-19186067.60" techMessage="Операция запрещена. Пожалуйста, обратитесь в службу поддержки." invoiceId="2002368632944" />';
        return [
            [$decrypt, $encrypt],
        ];
    }
}