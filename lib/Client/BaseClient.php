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
 */

namespace YooKassaPayout\Client;

use Psr\Log\LoggerInterface;
use SimpleXMLElement;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Common\Exceptions\XmlException;
use YooKassaPayout\Common\Helpers\OpenSSL;
use YooKassaPayout\Common\Helpers\TypeCast;
use YooKassaPayout\Request\AbstractRequest;
use YooKassaPayout\Request\Keychain;

/**
 * Базовый класс клиента API
 *
 * @package YooKassaPayout\Client
 */
class BaseClient
{
    /**
     * Объект для логирования
     * @var LoggerInterface|null
     */
    protected $logger;

    /**
     * Идентификатор контрагента
     * @var string
     */
    protected $agentId;

    /**
     * Объект с ключами
     * @var Keychain
     */
    protected $keychain;

    /**
     * Устанавливает объект для логирования
     *
     * @param LoggerInterface|null $logger Объект для логирования
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    /**
     * Возвращает объект для логирования
     *
     * @return LoggerInterface|null Объект для логирования
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * Устанавливает идентификатор контрагента
     *
     * @param string $id Идентификатор контрагента
     * @return BaseClient Объект клиента
     */
    public function setAgentId($id)
    {
        if (!TypeCast::canCastToString($id)) {
            throw new InvalidPropertyValueTypeException('Invalid agentId type', 0, 'agentId', $id);
        }
        $this->agentId = (string)$id;
        return $this;
    }

    /**
     * Возвращает идентификатор контрагента
     *
     * @return string Идентификатор контрагента
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * Возвращает объект, хранящий ключи
     *
     * @return Keychain Объект с ключами
     */
    public function getKeychain()
    {
        return $this->keychain;
    }

    /**
     * Формирует XML из запроса и шифрует его
     *
     * @param AbstractRequest $request Объект запроса
     * @return bool|string Результат выполнения запроса
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     * @throws XmlException Выбрасывается при ошибке работы с XML
     */
    protected function prepareXml($request)
    {
        libxml_use_internal_errors(true);
        $requestTag = $request->getRequestName();
        $xmlBaseString = "<?xml version='1.0' encoding='UTF-8'?><$requestTag agentId='{$this->getAgentId()}'></$requestTag>";

        $serializer   = $request->getSerializer();
        $requestArray = $serializer->serialize($request);

        $xml = new SimpleXMLElement($xmlBaseString);
        foreach ($requestArray as $name => $value) {
            if (!empty($value) && $name !== 'paymentParams') {
                $xml->addAttribute($name, $value);
            }
        }

        if (!empty($requestArray['paymentParams'])) {
            $xml->addChild('paymentParams');

            foreach ($requestArray['paymentParams'] as $name => $value) {
                if (!empty($value) && isset($xml->paymentParams)) {
                    $xml->paymentParams->addChild($name, $value);
                }
            }
        }

        $resultXml = $xml->asXML();
        if ($resultXml === false) {
            throw new XmlException(libxml_get_last_error(), 0);
        }

        return OpenSSL::encryptPKCS7(
            $resultXml,
            $this->keychain
        );
    }

    /**
     * Формирует JSON из запроса и шифрует его
     *
     * @deprecated Не реализован в текущей версии API
     *
     * @param AbstractRequest $request Объект запроса
     * @return string Результат выполнения запроса
     */
    protected function prepareJson($request)
    {
        return '';
    }
}