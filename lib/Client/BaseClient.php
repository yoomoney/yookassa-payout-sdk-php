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
 * Class BaseClient
 *
 * @package YooKassaPayout\Client
 */
class BaseClient
{
    /**
     * @var LoggerInterface|null
     */
    protected $logger;

    /**
     * @var string
     */
    protected $agentId;

    /**
     * @var Keychain
     */
    protected $keychain;

    /**
     * @param LoggerInterface|null $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return LoggerInterface | null
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param string $id
     * @return BaseClient
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
     * @return string
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * @return Keychain
     */
    public function getKeychain()
    {
        return $this->keychain;
    }

    /**
     * @param AbstractRequest $request
     * @return bool|false|string
     * @throws OpenSSLException
     * @throws XmlException
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

    protected function prepareJson($request)
    {
        return '';
    }
}