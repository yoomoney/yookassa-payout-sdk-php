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
 * @example 03-notification.php 3 15 Обработка уведомления об ошибке
 *
 * @package YooKassaPayout
 */
class ErrorDepositionNotificationResponse
{
    /**
     * @const string
     */
    const RESPONSE_TAG = 'errorDepositionNotificationResponse';

    /**
     * Копия параметра clientOrderId запроса
     * @var string
     */
    protected $clientOrderId;

    /**
     * Результат выполнения операции
     * @var int|string
     */
    protected $status;

    /**
     * Время обработки запроса по часам ЮKassa
     * @var string
     */
    protected $processedDT;

    /**
     * ErrorDepositionNotificationResponse constructor.
     *
     * @param string $clientOrderId Копия параметра clientOrderId запроса
     * @param int|string $status Результат выполнения операции
     * @param string $processedDT Время обработки запроса по часам ЮKassa
     */
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
     * Устанавливает идентификатор операции
     *
     * @param string $clientOrderId Копия параметра clientOrderId запроса
     *
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
     * Возвращает идентификатор операции
     *
     * @return string Идентификатор операции
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * Устанавливает результат выполнения операции
     *
     * @param string $status Результат выполнения операции
     *
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
     * Возвращает результат выполнения операции
     *
     * @return string Результат выполнения операции
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Устанавливает время обработки запроса по часам ЮKassa
     *
     * @param string $processedDT Время обработки запроса по часам ЮKassa
     *
     * @return $this
     * @throws InvalidPropertyValueTypeException Выбрасывается, если данные неправильного типа
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
     * Возвращает время обработки запроса по часам ЮKassa
     *
     * @return string Время обработки запроса по часам ЮKassa
     */
    public function getProcessedDT()
    {
        return $this->processedDT;
    }

    /**
     * Строит ответ на запрос, упаковывает его в PKCS#7 пакет.
     *
     * @param Keychain $keychain Объект с ключами
     *
     * @return string Ответ для ЮKassa
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     * @throws XmlException Выбрасывается при ошибке работы с XML
     */
    public function build(Keychain $keychain)
    {
        return OpenSSL::encryptPKCS7($this->buildXml(), $keychain);
    }

    /**
     * Создает XML документ из объекта
     *
     * @return string
     * @throws XmlException Выбрасывается при ошибке работы с XML
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