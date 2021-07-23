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

namespace YooKassaPayout\Common\Helpers;


use YooKassaPayout\Common\Exceptions\EmptyPropertyValueException;
use YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException;
use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Common\Exceptions\SaveFileException;
use YooKassaPayout\Model\Organization;

/**
 * Класс для генерации csr запроса и ключей
 *
 * @example 04-generate-csr.php 3 23 Генерация ключей и создание запроса
 *
 * @package YooKassaPayout
 */
class GeneratorCsr
{
    /**
     * Название файла закрытого ключа
     * @const string
     */
    const OUTPUT_PRIVATE_KEY_FILENAME = 'privateKey.pem';

    /**
     * Название файла запроса сертификата
     * @const string
     */
    const OUTPUT_REQUEST_CSR_FILENAME = 'request.csr';

    /**
     * Название файла подписи
     * @const string
     */
    const OUTPUT_SIGNATURE_FILENAME = 'signature.txt';

    /**
     * Пароль для закрытого ключа
     * @var string
     */
    protected $privateKeyPassword;

    /**
     * Информация об организации
     * @var Organization
     */
    protected $organizationInfo;

    /**
     * @var string
     */
    protected $output;

    /**
     * Закрытый ключ
     * @var \OpenSSLAsymmetricKey|resource
     */
    protected $privateKey;

    /**
     * Запрос на сертификат
     * @var resource
     */
    protected $csrRequest;

    /**
     * Цифровая подпись
     * @var string
     */
    protected $signature;

    /**
     * Настройки OpenSSL по умолчанию
     * @var array
     */
    public $config = [
        'encrypt_key'      => true,
        "digest_alg"       => 'SHA1',
        "private_key_bits" => 2048,
        "private_key_type" => OPENSSL_KEYTYPE_RSA,
    ];

    /**
     * GeneratorCsr constructor.
     * @param Organization|array $organizationInfo Информация об организации
     * @param string $output Путь к директории для сгенерированных файлов
     * @param string $privateKeyPassword Пароль для закрытого ключа
     */
    public function __construct($organizationInfo, $output = __DIR__, $privateKeyPassword = '')
    {
        if (!TypeCast::canCastToString($privateKeyPassword)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid privateKeyPassword type',
                0,
                'privateKeyPassword',
                $privateKeyPassword
            );
        }

        if (!TypeCast::canCastToString($output)) {
            throw new InvalidPropertyValueTypeException(
                'Invalid output type',
                0,
                'output',
                $output
            );
        }


        if (is_array($organizationInfo)) {
            $organizationInfo = new Organization($organizationInfo);
        }

        $this->validateOrganization($organizationInfo);

        $this->privateKeyPassword = (string)$privateKeyPassword;
        $this->organizationInfo   = $organizationInfo;
        $this->output             = (string)$output;
    }

    /**
     * Устанавливает настройки OpenSSL
     * @param array $config Настройки OpenSSL
     */
    public function setConfig($config)
    {
        if (!is_array($config)) {
            throw new InvalidPropertyValueTypeException('Invalid type config [must be only array]', 0, 'config', $config);
        }
        $this->config = array_merge($this->config, $config);
    }

    /**
     * Возвращает настройки OpenSSL
     * @return array Настройки OpenSSL
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Проверяет данные организации
     * @param Organization $organizationInfo
     * @throws EmptyPropertyValueException Выбрасывается, если заполнены не все обязательные поля
     * @return bool
     */
    public function validateOrganization($organizationInfo)
    {
        if (!$organizationInfo->getCountryName()) {
            $missingProperty = 'countryName';
        } elseif (!$organizationInfo->getStateOrProvinceName()) {
            $missingProperty = 'stateORProvinceName';
        } elseif (!$organizationInfo->getOrganizationName()) {
            $missingProperty = 'organizationName';
        } elseif (!$organizationInfo->getCommonName()) {
            $missingProperty = 'commonName';
        } elseif (!$organizationInfo->getEmailAddress()) {
            $missingProperty = 'emailAddress';
        }

        if (!empty($missingProperty)) {
            throw new EmptyPropertyValueException('Missing required value ' . $missingProperty, 0, $missingProperty);
        }

        return true;
    }

    /**
     * Генерирует пакет файлов для запроса сертификата
     * @param string|null $privateKeyPath Путь к файлу закрытого ключа
     * @return string|string[] Цифровая подпись
     * @throws OpenSSLException Выбрасывается при ошибке работы с OpenSSL
     * @throws SaveFileException Выбрасывается при ошибке сохранения файла
     */
    public function generate($privateKeyPath=null)
    {
        if (!empty($privateKeyPath) && is_file($privateKeyPath)) {
            $this->privateKey = openssl_get_privatekey(file_get_contents($privateKeyPath), $this->privateKeyPassword);
        } else {
            $this->privateKey = openssl_pkey_new($this->config);
        }

        if ($this->privateKey === false) {
            throw new OpenSSLException(openssl_error_string());
        }

        if (empty($privateKeyPath)) {
            openssl_pkey_export($this->privateKey, $privateKey, $this->privateKeyPassword, $this->config);
            $this->saveFile(self::OUTPUT_PRIVATE_KEY_FILENAME, $privateKey);
        }

        $dn = $this->organizationInfo->toArray();

        $this->csrRequest = openssl_csr_new($dn, $this->privateKey, $this->config);

        openssl_csr_export($this->csrRequest, $requestOut);
        $this->saveFile(self::OUTPUT_REQUEST_CSR_FILENAME, $requestOut);

        openssl_csr_export($this->csrRequest, $requestOut, false);

        $requestOut = str_replace("\t", '', $requestOut);
        preg_match('"Signature Algorithm: (.*)-----BEGIN"ims', $requestOut, $sign);
        if ($sign) {
            $sign = $sign[1];
            $a    = explode("\n", $sign);
            unset($a[0]);
            $this->signature = str_replace('         ', '', trim(join("\n", $a)));
        }

        $this->saveFile(self::OUTPUT_SIGNATURE_FILENAME, $this->signature);

        return $this->signature;
    }

    /**
     * Сохраняет строку в файл
     * @param string $fileName Имя файла
     * @param string $content Строка для сохранения
     * @throws SaveFileException Выбрасывается при ошибке сохранения файла
     */
    protected function saveFile($fileName, $content)
    {
        ob_start();
        if (!is_dir($this->output)) {
            mkdir($this->output, 0770, true);
        }
        $result = file_put_contents($this->output . '/' . $fileName, $content);
        $errors = ob_get_contents();
        ob_end_clean();

        if ($result === false) {
            throw new SaveFileException("Errors: " . $errors);
        }
    }
}