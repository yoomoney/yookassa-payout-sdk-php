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


use YooKassaPayout\Common\Exceptions\OpenSSLException;
use YooKassaPayout\Request\Keychain;

/**
 * Класс используется для упаковки данных в PKCS#7 и их распаковки.
 *
 * @package YooKassaPayout\Common\Helpers
 */
class OpenSSL
{
    /**
     * Сертификат ЮMoney для проверки подписи ответов
     * @var string
     */
    const YMCert = __DIR__ . '/../../Certs/deposit.cer';

    /**
     * Подписывает и возвращает данные запакованные в PKCS#7
     * @param $data
     * @param Keychain $keychain
     * @return string
     * @throws OpenSSLException
     */
    public static function encryptPKCS7($data, Keychain $keychain)
    {
        $cmd     = 'openssl smime -sign -signer ' . $keychain->getPublicCert()
            . ' -inkey ' . $keychain->getPrivateKey()
            . ' -passin pass:' . $keychain->getKeyPassword() . ''
            . ' -nochain -nocerts -outform PEM -nodetach';

        return self::executeCMD($cmd, $data);
    }

    /**
     * Проверяет подпись и возвращает содержимое пакета
     * @param $data
     * @param $CAcert
     * @return string
     * @throws OpenSSLException
     */
    public static function decryptPKCS7($data, $CAcert = null)
    {
        $CAcert = empty($CAcert) ? self::YMCert : $CAcert;
        $cmd = 'openssl smime -verify -noverify -inform PEM -nointern -certfile ' . $CAcert . ' -CAfile ' . $CAcert;

        return self::executeCMD($cmd, $data);
    }

    /**
     * Выполняет команду, направляет в поток ввода данные из $data
     * @param $cmd
     * @param $data
     * @return false|string
     * @throws OpenSSLException
     */
    private static function executeCMD($cmd, $data)
    {
        $pipes = [];

        $process = proc_open(
            $cmd,
            [["pipe", "r"], ["pipe", "w"], ["pipe", "w"]],
            $pipes
        );

        if (is_resource($process)) {
            fwrite($pipes[0], $data);
            fclose($pipes[0]);

            $result = stream_get_contents($pipes[1]);
            fclose($pipes[1]);

            $error = stream_get_contents($pipes[2]);
            fclose($pipes[2]);

            $resCode = proc_close($process);
            if ($resCode !== 0) {
                throw new OpenSSLException($error);
            }
        } else {
            throw new OpenSSLException('Exec command error, check for install OpenSSL and configuration');
        }

        return $result;
    }
}