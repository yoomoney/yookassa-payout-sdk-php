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


use YooKassaPayout\Common\Exceptions\ApiConnectionException;
use YooKassaPayout\Common\Exceptions\ApiException;
use YooKassaPayout\Common\Exceptions\ExtensionNotFoundException;
use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Common\Helpers\RawHeadersParser;
use YooKassaPayout\Common\ResponseObject;

/**
 * Класс клиента CURL
 *
 * @package YooKassaPayout
 */
class CurlClient extends BaseClient
{
    /**
     * Корневой URL API
     * @var string
     */
    protected $requestUrl = 'https://payouts.yookassa.ru:9094/';

    /**
     * Ресурс CURL
     * @var resource
     */
    private $curl;

    /**
     * Конфигурация CURL
     * @var CurlConfiguration
     */
    private $curlConfiguration;

    /**
     * Заголовки запроса по умолчанию
     * @var array
     */
    private $defaultHeaders = [
        'Content-Type: application/pkcs7-mime',
    ];

    /**
     * CurlClient constructor.
     * @param CurlConfiguration|null $curlConfiguration Конфигурация CURL
     */
    public function __construct($curlConfiguration = null)
    {
        if ($curlConfiguration instanceof CurlConfiguration) {
            $this->curlConfiguration = $curlConfiguration;
        } else {
            $this->curlConfiguration = new CurlConfiguration();
        }
    }

    /**
     * Устанавливает URL запроса
     *
     * @param string $requestUrl URL запроса
     */
    protected function setRequestUrl($requestUrl)
    {
        $this->requestUrl = $requestUrl;
    }

    /**
     * Возвращает URL запроса
     *
     * @return string URL запроса
     */
    protected function getRequestUrl()
    {
        return $this->requestUrl;
    }

    /**
     * Возвращает настройки CURL
     *
     * @return CurlConfiguration Конфигурация CURL
     */
    public function getCurlConfiguration()
    {
        return $this->curlConfiguration;
    }

    /**
     * Выполняет запрос к API и возвращает структурированный ответ
     *
     * @param string $path URL запроса
     * @param string $method HTTP метод
     * @param array $queryParams GET параметры
     * @param string|null $httpBody Тело запроса
     * @param array|null $headers Заголовки
     *
     * @return ResponseObject Объект ответа API
     * @throws ApiConnectionException Выбрасывается, если CURL запрос завершился ошибкой
     * @throws ApiException Выбрасывается, если API вернул ответ с ошибкой
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     * @throws ExtensionNotFoundException Выбрасывается, если не установлено расширение CURL для PHP
     */
    protected function call($path, $method, $queryParams, $httpBody = null, $headers = [])
    {
        $headers = $this->prepareHeaders($headers);

        $this->logRequestParams($path, $method, $queryParams, $httpBody, $headers);

        $url = $this->prepareUrl($path, $queryParams);

        $this->prepareCurl($method, $httpBody, $headers, $url);

        list($httpHeaders, $httpBody, $responseInfo) = $this->sendRequest();

        $this->closeCurlConnection();

        $this->logResponse($httpBody, $responseInfo, $httpHeaders);

        return new ResponseObject([
            'code'    => $responseInfo['http_code'],
            'headers' => $httpHeaders,
            'body'    => $httpBody,
        ]);
    }

    /**
     * Выполняет запрос к API и возвращает структурированный ответ
     *
     * Алиас для CurlClient::call()
     *
     * @param string $path URL запроса
     * @param string $method HTTP метод
     * @param array $queryParams GET параметры
     * @param string|null $httpBody Тело запроса
     * @param array|null $headers Заголовки
     *
     * @return ResponseObject Объект ответа API
     * @throws ApiConnectionException Выбрасывается, если CURL запрос завершился ошибкой
     * @throws ApiException Выбрасывается, если API вернул ответ с ошибкой
     * @throws ExtensionNotFoundException Выбрасывается, если не установлено расширение CURL для PHP
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     */
    protected function execute($path, $method, $queryParams, $httpBody = null, $headers = [])
    {
        return $this->call($path, $method, $queryParams, $httpBody, $headers);
    }

    /**
     * Выполняет CURL запрос
     *
     * @return array Массив данных при ответе CURL
     * @throws ApiConnectionException Выбрасывается, если CURL запрос завершился ошибкой
     */
    protected function sendRequest()
    {
        $response       = curl_exec($this->curl);
        $httpHeaderSize = curl_getinfo($this->curl, CURLINFO_HEADER_SIZE);
        $httpHeaders    = RawHeadersParser::parse(substr($response, 0, $httpHeaderSize));
        $httpBody       = substr($response, $httpHeaderSize);
        $responseInfo   = curl_getinfo($this->curl);
        $curlError      = curl_error($this->curl);
        $curlErrno      = curl_errno($this->curl);
        if ($response === false) {
            $this->handleCurlError($curlError, $curlErrno);
        }

        return [$httpHeaders, $httpBody, $responseInfo];
    }

    /**
     * Инициализирует CURL сессию
     *
     * @return resource Ресурс CURL
     * @throws ExtensionNotFoundException Выбрасывается, если не установлено расширение CURL для PHP
     */
    protected function initCurl()
    {
        if (!extension_loaded('curl')) {
            throw new ExtensionNotFoundException('curl');
        }

        if (!$this->curl) {
            $this->curl = curl_init();
        }

        return $this->curl;
    }

    /**
     * Закрывает CURL сессию
     */
    private function closeCurlConnection()
    {
        if ($this->curl !== null) {
            curl_close($this->curl);
            $this->curl = null;
        }
    }

    /**
     * Устанавливает параметр CURL
     *
     * @param int $optionName Параметр CURL
     * @param mixed $optionValue Значение параметра
     *
     * @return bool Результат установки параметра
     */
    protected function setCurlOption($optionName, $optionValue)
    {
        return curl_setopt($this->curl, $optionName, $optionValue);
    }

    /**
     * Устанавливает тело запроса для CURL
     *
     * @param string $method HTTP метод
     * @param string $httpBody Тело запроса
     */
    protected function setBody($method, $httpBody)
    {

        $this->setCurlOption(CURLOPT_CUSTOMREQUEST, $method);
        if(!empty($httpBody)) {
            $this->setCurlOption(CURLOPT_POSTFIELDS, $httpBody);
        }
    }

    /**
     * Выбрасывает исключение с текстом в зависимости от ошибки
     *
     * @param string $error Текст ошибки
     * @param int $errno Номер ошибки
     *
     * @throws ApiConnectionException Выбрасывается, если CURL запрос завершился ошибкой
     */
    private function handleCurlError($error, $errno)
    {
        switch ($errno) {
            case CURLE_COULDNT_CONNECT:
            case CURLE_COULDNT_RESOLVE_HOST:
            case CURLE_OPERATION_TIMEOUTED:
                $msg = 'Could not connect to YooKassa API. Please check your internet connection and try again.';
                break;
            case CURLE_SSL_CACERT:
            case CURLE_SSL_PEER_CERTIFICATE:
                $msg = 'Could not verify SSL certificate.';
                break;
            default:
                $msg = 'Unexpected error communicating.';
        }
        $msg .= "\n\n(Network error [errno $errno]: $error)";
        throw new ApiConnectionException($msg);
    }

    /**
     * Логирование параметров CURL запроса
     *
     * @param string $path URL запроса
     * @param string $method HTTP метод
     * @param array $queryParams GET параметры
     * @param string $httpBody Тело запроса
     * @param array $headers Заголовки
     */
    private function logRequestParams($path, $method, $queryParams, $httpBody, $headers)
    {
        if ($this->getLogger() !== null) {
            $message = 'Send request: ' . $method . ' ' . $path;
            $context = array();
            if (!empty($queryParams)) {
                $context['query_params'] = $queryParams;
            }
            if (!empty($httpBody)) {
                $context['body'] = $httpBody;
            }
            if (!empty($headers)) {
                $context['headers'] = $headers;
            }
            $this->getLogger()->info($message, $context);
        }
    }

    /**
     * Логирование ответа
     *
     * @param string $httpBody Тело ответа
     * @param array $responseInfo Информация об ответе
     * @param array $httpHeaders Заголовки ответа
     */
    private function logResponse($httpBody, $responseInfo, $httpHeaders)
    {
        if ($this->getLogger() !== null) {
            $message = 'Response with code ' . $responseInfo['http_code'] . ' received.';
            $context = array();
            if (!empty($httpBody)) {
                $data = json_decode($httpBody, true);
                if (JSON_ERROR_NONE !== json_last_error()) {
                    $data = $httpBody;
                }
                $context['body'] = $data;
            }
            if (!empty($httpHeaders)) {
                $context['headers'] = $httpHeaders;
            }
            $this->getLogger()->info($message, $context);
        }
    }

    /**
     * Подготавливает необходимые заголовки для запроса
     *
     * @param array $headers Заголовки
     *
     * @return array Заголовки
     */
    private function prepareHeaders($headers)
    {
        if (empty($headers)) {
            return $this->defaultHeaders;
        }

        return $headers;
    }

    /**
     * Формирует полный URL для запроса
     *
     * @param string $path URL запроса
     * @param array $queryParams GET параметры
     *
     * @return string Полный URL
     */
    private function prepareUrl($path, $queryParams)
    {
        $url = $this->getRequestUrl() . $path;

        if (!empty($queryParams)) {
            $url = $url . '?' . http_build_query($queryParams);
        }

        return $url;
    }

    /**
     * Подготовка параметров CURL
     *
     * @param string $method HTTP метод
     * @param string $httpBody Тело запроса
     * @param array $headers Заголовки
     * @param string $url URL запроса
     * @throws ExtensionNotFoundException Выбрасывается, если не установлено расширение CURL для PHP
     */
    private function prepareCurl($method, $httpBody, $headers, $url)
    {
        $this->initCurl();

        $this->setCurlOption(CURLOPT_URL, $url);

        $this->setCurlOption(CURLOPT_RETURNTRANSFER, true);

        $this->setCurlOption(CURLOPT_HEADER, true);

        $this->setCurlOption(CURLOPT_BINARYTRANSFER, true);

        $this->setCurlOption(CURLOPT_POST, true);

        $this->setCurlOption(CURLOPT_SSL_VERIFYPEER, false);

        $this->setCurlOption(CURLOPT_SSL_VERIFYHOST, false);

        if ($this->getCurlConfiguration()->getProxy()) {
            $this->setCurlOption(CURLOPT_PROXY, $this->getCurlConfiguration()->getProxy());
            $this->setCurlOption(CURLOPT_HTTPPROXYTUNNEL, true);
        }

        $this->setBody($method, $httpBody);

        $this->setCurlOption(CURLOPT_HTTPHEADER, $headers);

        $this->setCurlOption(CURLOPT_CONNECTTIMEOUT, $this->getCurlConfiguration()->getConnectionTimeout());

        $this->setCurlOption(CURLOPT_TIMEOUT, $this->getCurlConfiguration()->getTimeout());
    }
}