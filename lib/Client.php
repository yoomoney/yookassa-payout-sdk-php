<?php

/**
 * The MIT License
 *
 * Copyright (c) 2020 "YooMoney", NBСO LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 */

namespace YooKassaPayout;

use YooKassaPayout\Client\CurlClient;
use YooKassaPayout\Client\CurlConfiguration;
use YooKassaPayout\Common\Exceptions\ApiConnectionException;
use YooKassaPayout\Common\Exceptions\ApiException;
use YooKassaPayout\Common\Exceptions\AuthorizeException;
use YooKassaPayout\Common\Exceptions\ExtensionNotFoundException;
use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Common\Exceptions\SaveFileException;
use YooKassaPayout\Common\Exceptions\XmlException;
use YooKassaPayout\Common\Helpers\GeneratorCsr;
use YooKassaPayout\Common\HttpVerb;
use YooKassaPayout\Common\ResponseObject;
use YooKassaPayout\Common\ResponseSynonymCard;
use YooKassaPayout\Model\FormatType;
use YooKassaPayout\Model\Organization;
use YooKassaPayout\Request\AbstractDepositionRequest;
use YooKassaPayout\Request\AbstractRequest;
use YooKassaPayout\Request\BalanceRequest;
use YooKassaPayout\Request\Keychain;
use YooKassaPayout\Request\MakeDepositionRequest;
use YooKassaPayout\Request\Serializers\SynonymCardRequestSerializer;
use YooKassaPayout\Request\SynonymCardRequest;
use YooKassaPayout\Request\TestDepositionRequest;

/**
 * Класс клиента API
 *
 * @example 01-client.php 3 5 Создание клиента
 *
 * @package YooKassaPayout
 */
class Client extends CurlClient
{
    /**
     * Текущая версия SDK
     */
    const SDK_VERSION = '2.2.4';

    /**
     * Корневой URL API
     */
    const PAYOUT_REQUEST_ENDPOINT  = "https://payouts.yookassa.ru:9094/";
    /**
     * Корневой URL для получения синонима карты
     */
    const SYNONYM_REQUEST_ENDPOINT = "https://paymentcard.yoomoney.ru/";

    /**
     * URL для запроса выплаты
     */
    const DEPOSITION_REQUEST   = "webservice/deposition/api/%s";
    /**
     * URL для получения баланса
     */
    const BALANCE_REQUEST      = "webservice/deposition/api/balance";
    /**
     * URL для получения синонима карты
     */
    const SYNONYM_CARD_REQUEST = "gates/card/storeCard";

    /**
     * Client constructor.
     * @param string $agentId Идентификатор контрагента
     * @param Keychain|null $keychain Объект с ключами
     * @param CurlConfiguration|null $curlConfiguration Объект конфигурации CURL
     */
    public function __construct($agentId = '', Keychain $keychain = null, $curlConfiguration = null)
    {
        $this->setAgentId($agentId);
        $this->keychain = $keychain;
        parent::__construct($curlConfiguration);
    }

    /**
     * Создание выплаты.
     *
     * Метод принимает объект запроса Make|Test DepositionRequest
     *
     * @param AbstractDepositionRequest|array $request Объект запроса
     * @param string|int $clientOrderId Идентификатор операции
     *
     * @return ResponseObject Объект ответа
     * @throws AuthorizeException Выбрасывается, если установлены необходимые для коммуникации данные
     * @throws ApiConnectionException Выбрасывается, если CURL запрос завершился ошибкой
     * @throws ApiException Выбрасывается, если API вернул ответ с ошибкой
     * @throws ExtensionNotFoundException Выбрасывается, если не установлено расширение CURL для PHP
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     * @throws XmlException Выбрасывается при ошибке работы с XML
     */
    public function createDeposition($request, $clientOrderId = null)
    {
        if (is_array($request)) {
            if (isset($request['name']) && $request['name'] === 'makeDeposition') {
                $request = MakeDepositionRequest::getBuilder($clientOrderId)->build($request);
            } else {
                $request = TestDepositionRequest::getBuilder($clientOrderId)->build($request);
            }
        }

        $requestEndpoint = str_replace('Request', '', $request->getRequestName());
        $request = $this->prepareRequest($request);

        $this->setRequestUrl(self::PAYOUT_REQUEST_ENDPOINT);
        return $this->execute(sprintf(self::DEPOSITION_REQUEST, $requestEndpoint), HttpVerb::POST, [], $request);
    }

    /**
     * Возвращает баланс
     *
     * @return ResponseObject Объект ответа
     * @throws ApiConnectionException Выбрасывается, если CURL запрос завершился ошибкой
     * @throws ApiException Выбрасывается, если API вернул ответ с ошибкой
     * @throws ExtensionNotFoundException Выбрасывается, если не установлено расширение CURL для PHP
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     * @throws XmlException Выбрасывается при ошибке работы с XML
     */
    public function getBalance()
    {
        $request = new BalanceRequest();
        $request = $this->prepareRequest($request);

        $this->setRequestUrl(self::PAYOUT_REQUEST_ENDPOINT);
        return $this->execute(self::BALANCE_REQUEST, HttpVerb::POST, [], $request);
    }

    /**
     * Создает приватный ключ и запрос на сертификат для ЮMoney.
     * Возвращает подпись
     *
     * @param array|Organization $organizationInfo Данные организации
     * @param string $outputDir Каталог для сгенерированных файлов
     * @param string $privateKeyPassword Пароль для закрытого ключа
     * @param string|string[]|null $privateKeyPath Путь к имеющемуся закрытому ключу
     * @param array|null $config Путь к файлу openssl.cnf
     *
     * @return string|string[] Подпись
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     * @throws SaveFileException Выбрасывается при ошибке сохранения файла
     */
    public function createCsr($organizationInfo,
                              $outputDir = __DIR__,
                              $privateKeyPassword = '',
                              $privateKeyPath = null,
                              $config = null)
    {
        $generator = new GeneratorCsr($organizationInfo, $outputDir, $privateKeyPassword);
        if (!empty($config)) {
            $generator->setConfig($config);
        }
        return $generator->generate($privateKeyPath);
    }

    /**
     * Возвращает синоним карты.
     * Принимает объект запроса SynonymCardRequest
     *
     * @param SynonymCardRequest|array $request Объект запроса получения синонима карты
     *
     * @return ResponseSynonymCard Объект содержащий синоним карты
     * @throws ApiConnectionException Выбрасывается, если CURL запрос завершился ошибкой
     * @throws ApiException Выбрасывается, если API вернул ответ с ошибкой
     * @throws ExtensionNotFoundException Выбрасывается, если не установлено расширение CURL для PHP
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     */
    public function getSynonymCard($request)
    {
        if (is_array($request)) {
            $request = SynonymCardRequest::getBuilder()->build($request);
        }

        $serializer = new SynonymCardRequestSerializer();
        $requestBody = $serializer->serialize($request);

        $this->setRequestUrl(self::SYNONYM_REQUEST_ENDPOINT);
        $response = $this->execute(self::SYNONYM_CARD_REQUEST, HttpVerb::POST, $requestBody, '', ['Content-Type: application/x-www-form-urlencoded']);
        return new ResponseSynonymCard($response->getBody());
    }

    /**
     * Выполняет CURL запрос к API
     *
     * @param AbstractRequest $request Объект запроса
     *
     * @return bool|string Результат выполнения запроса
     * @throws AuthorizeException Выбрасывается, если установлены необходимые для коммуникации данные
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     * @throws ExtensionNotFoundException Выбрасывается, если не установлено расширение CURL для PHP
     * @throws XmlException Выбрасывается при ошибке работы с XML
     */
    private function prepareRequest(AbstractRequest $request)
    {
        if (empty($this->getAgentId())) {
            throw new AuthorizeException('Missing required property agentId');
        } elseif (empty($this->getKeychain())) {
            throw new AuthorizeException('Missing required property keychain');
        }

        $this->initCurl();

        $this->setCurlOption(CURLOPT_SSLCERT, $this->getKeychain()->getPublicCert());

        $this->setCurlOption(CURLOPT_SSLKEY, $this->getKeychain()->getPrivateKey());

        $this->setCurlOption(CURLOPT_SSLCERTPASSWD, $this->getKeychain()->getKeyPassword());

        if ($request->getFormatType() == FormatType::XML) {
            $result = $this->prepareXml($request);
        } else {
            $result = $this->prepareJson($request);
        }

        return $result;
    }
}
