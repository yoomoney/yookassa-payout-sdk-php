<?php


namespace Tests\YooKassaPayout\Notification;


use PHPUnit\Framework\TestCase;
use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Notification\ErrorDepositionNotification;

class ErrorDepositionNotificationTest extends TestCase
{
    public function testConstruct()
    {
        $body = "-----BEGIN PKCS7-----
MIAGCSqGSIb3DQEHAqCAMIACAQExCzAJBgUrDgMCGgUAMIAGCSqGSIb3DQEHAaCA
JIAEgac8ZXJyb3JEZXBvc2l0aW9uTm90aWZpY2F0aW9uUmVxdWVzdCBjbGllbnRP
cmRlcklkPSIzMTY2NzExNyIgcmVxdWVzdERUPSIyMDIwLTAzLTEwVDIxOjQ4OjE3
LjYwOFoiIGRzdEFjY291bnQ9IjI1NzAwMTMwNTM1MTg2IiBhbW91bnQ9IjUwMDAi
IGN1cnJlbmN5PSI2NDMiIGVycm9yPSIzMSIvPgAAAAAAADGCAjcwggIzAgEBMIGE
MHwxCzAJBgNVBAYTAlJVMQ8wDQYDVQQIEwZSdXNzaWExGTAXBgNVBAcTEFNhaW50
LVBldGVyc2J1cmcxGDAWBgNVBAoTD1BTIFlhbmRleC5Nb25leTEQMA4GA1UECxMH
VW5rbm93bjEVMBMGA1UEAxMMWWFuZGV4Lk1vbmV5AgRNWiVmMAkGBSsOAwIaBQCg
gYgwGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMjAw
MzEwMjE0ODE3WjAjBgkqhkiG9w0BCQQxFgQUyRvLH4M6tP0gMKCdNMZsryyAJhQw
KQYJKoZIhvcNAQk0MRwwGjAJBgUrDgMCGgUAoQ0GCSqGSIb3DQEBAQUAMA0GCSqG
SIb3DQEBAQUABIIBAATmOL69LMjeW7NRcrk20XqqJ11rgHYaIx1DMFdJzUtpQlnX
1r5fpvqXr4au0TR757OwMapQForPDULnuj9qT/LCRg+qAxcQbA+Bu6dXccpIvurx
InFcSf9MlJsIB6twAMiXXASj/Smt0mtiAffIcxgYb5VZnFmf2JtyUbhLzg+jwegB
m1Uy+a7ijiTpezce4aVxYvOkM5F9jm532oVxJ/WCou2SbszFqh7brlZJhLpBOG1r
Z8ZbPrZY+Fl9H6t6GiMLWNuveOvBIfC5UvDSV2olsrVTl9qRtgXBQSF2O9wPSX1k
9P2oWQ3dB/pDK4JKWIAVfaMTUdrIF4V2Wgdbd5YAAAAAAAA=
-----END PKCS7-----";

        try {
            $instance = new ErrorDepositionNotification($body);
            $this->assertEquals("31667117", $instance->getClientOrderId());
            $this->assertEquals("2020-03-10T21:48:17.608Z", $instance->getRequestDT());
            $this->assertEquals("25700130535186", $instance->getDstAccount());
            $this->assertEquals("5000", $instance->getAmount());
            $this->assertEquals("643", $instance->getCurrency());
            $this->assertEquals("31", $instance->getError());
        } catch (OpenSSLException $e) {
            $this->fail($e->getMessage());
        }

    }
}