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

use Exception;
use YooKassaPayout\Client\CurlClient;
use YooKassaPayout\Common\Exceptions\AuthorizeException;
use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Common\Helpers\GeneratorCsr;
use YooKassaPayout\Common\HttpVerb;
use YooKassaPayout\Common\ResponseObject;
use YooKassaPayout\Common\ResponseSynonymCard;
use YooKassaPayout\Model\FormatType;
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
 * @example
 * <code>
 *  <?php
 *      $keychain = new Keychain('publicCert.cer', 'privateCert.pem', 'password');
 *      $client = new Client('000000', $keychain);
 *      $response = $client->createDeposition($request);
 *      $response->getXmlResponse()->getStatus();
 * </code>
 *
 * @package YooKassaPayout
 */
class Client extends CurlClient
{
    const SDK_VERSION = '2.0.2';

    const PAYOUT_REQUEST_ENDPOINT  = "https://calypso.yamoney.ru:9094/";
    const SYNONYM_REQUEST_ENDPOINT = "https://paymentcard.yamoney.ru/";

    const DEPOSITION_REQUEST   = "webservice/deposition/api/%s";
    const BALANCE_REQUEST      = "webservice/deposition/api/balance";
    const SYNONYM_CARD_REQUEST = "gates/card/storeCard";

    /**
     * Client constructor.
     * @param string $agentId
     * @param Keychain $keychain
     * @param null $curlConfiguration
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
     * @param AbstractDepositionRequest|array $request
     * @param string|int $clientOrderId
     * @return ResponseObject
     * @throws Common\Exceptions\ApiConnectionException
     * @throws Common\Exceptions\ApiException
     * @throws Common\Exceptions\ExtensionNotFoundException
     * @throws Common\Exceptions\OpenSSLException
     * @throws Common\Exceptions\XmlException
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
        return $this->execute(sprintf(self::DEPOSITION_REQUEST, $requestEndpoint), HttpVerb::POST, '', $request);
    }

    /**
     * Возвращает баланс
     *
     * @return ResponseObject
     * @throws Common\Exceptions\ApiConnectionException
     * @throws Common\Exceptions\ApiException
     * @throws Common\Exceptions\ExtensionNotFoundException
     * @throws Common\Exceptions\OpenSSLException
     * @throws Common\Exceptions\XmlException
     */
    public function getBalance()
    {
        $request = new BalanceRequest();
        $request = $this->prepareRequest($request);

        $this->setRequestUrl(self::PAYOUT_REQUEST_ENDPOINT);
        return $this->execute(self::BALANCE_REQUEST, HttpVerb::POST, '', $request);
    }

    /**
     * Создает приватный ключ и запрос на сертификат для ЮMoney.
     * Возвращает подпись
     *
     * @param $organizationInfo
     * @param $outputDir
     * @param string $privateKeyPassword
     * @return string|string[]
     * @throws Common\Exceptions\OpenSSLException
     * @throws Exception
     */
    public function createCsr($organizationInfo, $outputDir = __DIR__, $privateKeyPassword = '')
    {
        $generator = new GeneratorCsr($organizationInfo, $outputDir, $privateKeyPassword);
        return $generator->generate();
    }

    /**
     * Возвращает синоним карты
     * Принимает объект запроса SynonymCardRequest
     *
     * @param SynonymCardRequest|array $request
     * @return ResponseSynonymCard
     * @throws Common\Exceptions\ApiConnectionException
     * @throws Common\Exceptions\ApiException
     * @throws Common\Exceptions\ExtensionNotFoundException
     * @throws Common\Exceptions\OpenSSLException
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
     * @param AbstractRequest $request
     * @return bool|false|string
     * @throws AuthorizeException
     * @throws OpenSSLException
     * @throws Common\Exceptions\ExtensionNotFoundException
     * @throws Common\Exceptions\XmlException
     */
    private function prepareRequest($request)
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

        if ($request->getFormatType() === FormatType::XML) {
            $result = $this->prepareXml($request);
        } else {
            $result = $this->prepareJson($request);
        }

        return $result;
    }
}