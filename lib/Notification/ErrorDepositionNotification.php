<?php


namespace YooKassaPayout\Notification;


use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Common\Exceptions\XmlException;
use YooKassaPayout\Common\Helpers\OpenSSL;
use YooKassaPayout\Request\Keychain;

/**
 * Класс для обработки входящих уведомлений
 *
 * @example 03-notification.php 3 15 Обработка уведомления об ошибке
 *
 * @package YooKassaPayout
 */
class ErrorDepositionNotification
{
    /**
     * Идентификатор операции, полученный от системы контрагента в запросе на зачисление перевода
     * @var string
     */
    protected $clientOrderId;

    /**
     * Дата и время формирования запроса операции на стороне и по часам ЮKassa
     * @var string
     */
    protected $requestDT;

    /**
     * Идентификатор получателя перевода
     * @var string
     */
    protected $dstAccount;

    /**
     * Сумма перевода
     * @var string
     */
    protected $amount;

    /**
     * Код валюты перевода
     * @var string
     */
    protected $currency;

    /**
     * Код ошибки операции
     * @var string
     */
    protected $error;

    /**
     * ErrorDepositionNotification constructor.
     *
     * @param string $body Тело ошибки
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
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
     * Возвращает идентификатор операции, полученный от системы контрагента в запросе на зачисление перевода
     *
     * @return string
     */
    public function getClientOrderId()
    {
        return $this->clientOrderId;
    }

    /**
     * Возвращает дату и время формирования запроса операции на стороне и по часам ЮKassa
     *
     * @return string
     */
    public function getRequestDT()
    {
        return $this->requestDT;
    }

    /**
     * Возвращает идентификатор получателя перевода
     *
     * @return string
     */
    public function getDstAccount()
    {
        return $this->dstAccount;
    }

    /**
     * Возвращает сумму перевода
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Возвращает код валюты перевода
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Возвращает код ошибки операции
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param int|string $status Статус обработки уведомления
     * @param Keychain $keychain Объект с ключами
     *
     * @return string Ответ для ЮKassa
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     * @throws XmlException Выбрасывается при ошибке работы с XML
     */
    public function createResponse($status, $keychain)
    {
        $response = new ErrorDepositionNotificationResponse($this->getClientOrderId(), $status);
        return $response->build($keychain);
    }
}