<?php


namespace YooKassaPayout\Notification;


use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Common\Exceptions\XmlException;
use YooKassaPayout\Common\Helpers\OpenSSL;

/**
 * Класс для обработки входящих уведомлений
 *
 * @example
 * <code>
 *  <?php
 *      $notification = new ErrorDepositionNotification($notificationBody);
 *      $error = $notification->getError();
 *      $response = $notification->createResponse(0, $keychain);
 * </code>
 *
 * @package YooKassaPayout\Notification
 */
class ErrorDepositionNotification
{
    /**
     * @var string
     */
    protected $clientOrderId;

    /**
     * @var string
     */
    protected $requestDT;

    /**
     * @var string
     */
    protected $dstAccount;

    /**
     * @var string
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $error;

    /**
     * ErrorDepositionNotification constructor.
     * @param $body
     * @throws OpenSSLException
     */
    public function __construct($body)
    {
        $decryptedBody = OpenSSL::decryptPKCS7($body);
        $xmlBody       = simplexml_load_string($decryptedBody);
        $attributes = $xmlBody->attributes();

        foreach ($attributes as $attrName => $value) {
            $this->{$attrName} = (string)$value;
        }
    }

    /**
     * @return string
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * @return string
     */
    public function getRequestDT()
    {
        return $this->requestDT;
    }

    /**
     * @return string
     */
    public function getDstAccount()
    {
        return $this->dstAccount;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param $status
     * @param $keychain
     * @return string
     * @throws OpenSSLException
     * @throws XmlException
     */
    public function createResponse($status, $keychain)
    {
        $response = new ErrorDepositionNotificationResponse($this->getClientOrderId(), $status);
        return $response->build($keychain);
    }
}