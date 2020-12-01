<?php


namespace YooKassaPayout\Notification;


use SimpleXMLElement;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Common\Exceptions\XmlException;
use YooKassaPayout\Common\Helpers\OpenSSL;
use YooKassaPayout\Common\Helpers\TypeCast;
use YooKassaPayout\Model\RequestDateTime;
use YooKassaPayout\Request\Keychain;

/**
 * Класс для создания ответа на errorDepositionNotification
 *
 * @example
 * <code>
 *  <?php
 *      $response = new ErrorDepositionNotificationResponse($clientOrderId, $status);
 *      return $response->build($keychain);
 * </code>
 *
 * @package YooKassaPayout\Notification
 */
class ErrorDepositionNotificationResponse
{
    /**
     * @const string
     */
    const RESPONSE_TAG = 'errorDepositionNotificationResponse';

    /**
     * @var string
     */
    protected $clientOrderId;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $processedDT;

    public function __construct($clientOrderId, $status, $processedDT = '')
    {
        if (!$processedDT) {
            $processedDT = RequestDateTime::getDateTime();
        }

        $this->setStatus($status);
        $this->setClientOrderId($clientOrderId);
        $this->setProcessedDT($processedDT);
    }

    /**
     * @param string $clientOrderId
     * @return $this
     */
    public function setClientOrderId($clientOrderId)
    {
        if (!TypeCast::canCastToString($clientOrderId)) {
            throw new InvalidPropertyValueTypeException('Invalid clientOrderId type', 0, 'clientOrderId', $clientOrderId);
        }
        $this->clientOrderId = (string)$clientOrderId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        if (!is_numeric($status)) {
            throw new InvalidPropertyValueTypeException('Invalid status type', 0, 'status', $status);
        }
        $this->status = (string)$status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $processedDT
     * @return $this
     */
    public function setProcessedDT($processedDT)
    {
        if (!TypeCast::canCastToString($processedDT)) {
            throw new InvalidPropertyValueTypeException('Invalid processedDT type', 0, 'processedDT', $processedDT);
        }
        $this->processedDT = (string)$processedDT;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessedDT()
    {
        return $this->processedDT;
    }

    /**
     * Строит ответ на запрос, упаковывает его в PKCS#7 пакет.
     *
     * @param Keychain $keychain
     * @return string
     * @throws OpenSSLException
     * @throws XmlException
     */
    public function build(Keychain $keychain)
    {
        return OpenSSL::encryptPKCS7($this->buildXml(), $keychain);
    }

    /**
     * @return mixed
     * @throws XmlException
     */
    private function buildXml()
    {
        libxml_use_internal_errors(true);
        $xmlBaseString = "<?xml version='1.0' encoding='UTF-8'?><".self::RESPONSE_TAG.">" ;

        $xml = new SimpleXMLElement($xmlBaseString);
        $xml->{self::RESPONSE_TAG}->addAttribute('clientOrderId', $this->getClientOrderId());
        $xml->{self::RESPONSE_TAG}->addAttribute('status', $this->getStatus());
        $xml->{self::RESPONSE_TAG}->addAttribute('processDT', $this->getProcessedDT());

        $result = $xml->asXML();
        if ($result === false) {
            throw new XmlException(libxml_get_last_error(), 0);
        }

        return $result;
    }
}