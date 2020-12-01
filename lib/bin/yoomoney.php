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

use YooKassaPayout\Client;
use YooKassaPayout\Model\Organization;

require_once __DIR__ . '/../autoload.php';

$commands = [
    'get:csr - генерация запроса на сертификат'
];

$organizationInfo = [
    'country name' => [
        'default' => 'RU',
        'title' => '',
        'required' => true,
    ],
    'state or province name' => [
        'default' => 'Russia',
        'title' => '',
        'required' => true,
    ],
    'organization name' => [
        'default' => '',
        'title' => 'название организации латинскими буквами',
        'required' => true,
    ],
    'common name' => [
        'default' => '',
        'title' => 'начинается с /business/, после — любое сочетание латинских букв без пробелов',
        'required' => true,
    ],
    'email address' => [
        'default' => '',
        'title' => 'адрес электронной почты',
        'required' => true,
    ],
    'organizational unit name' => [
        'default' => '',
        'title' => '',
        'required' => false,
    ],
    'locality name' => [
        'default' => '',
        'title' => '',
        'required' => false,
    ],
];

if (!isset($argv[1])) {
    exit('Команда не найдена, доступные команды: ' . PHP_EOL . implode(PHP_EOL, $commands));
}

switch ($argv[1]) {
    case 'get:csr':
        print getCsr($organizationInfo);
        break;
    default:
        exit('Команда не найдена, доступные команды: ' . PHP_EOL . implode(PHP_EOL, $commands));
}

function getCsr($organizationInfo)
{
    $organization = new Organization();

    foreach ($organizationInfo as $paramName => $options) {
        $question = buildQuestion($paramName, $options);

        do {
            print $question;
            $isValid = false;
            $input = trim(fgets(STDIN));

            if (empty($input) && $options['required'] && empty($options['default'])) {
                print "Поле $paramName — обязательное, введите значение." . PHP_EOL;
                continue;
            } elseif (empty($input) && !empty($options['default'])) {
                $answer = $options['default'];
            } else {
                $answer = $input;
            }

            $setter = getSetterByParameterName($paramName);
            try {
                $organization->$setter($answer);
                $isValid = true;
            } catch (Exception $e) {
                print $e->getMessage() . PHP_EOL;
            }

        } while (!$isValid);
    }

    print "Input output dir for privateKey and request.csr [".__DIR__."]: ";
    $input = trim(fgets(STDIN));
    $outputDir = empty($input) ? __DIR__ : $input;

    print "Input password for privateKey (пароль приватного ключа, если не требуется, нажмите Enter для продолжения): ";
    $input = trim(fgets(STDIN));
    $privateKey = empty($input) ? '' : $input;

    $client = new Client();

    try {
        $result = $client->createCsr($organization, $outputDir, $privateKey);
    } catch (Exception $e) {
        return 'Error: ' . $e->getMessage() . PHP_EOL
               . 'Пожалуйста, повторите заново или используйте другой способ создания CSR';
    }

    return $result;
}

function buildQuestion($paramName, $options) {
    $question = "$paramName";
    if ($options["title"]) {
        $question .= " ({$options["title"]})";
    }

    if ($options["default"]) {
        $question .= " [{$options["default"]}]";
    }

    $question .= $options["required"] ? ": " : " (не требуется, нажмите Enter для продолжения): ";

    return $question;
}

function getSetterByParameterName($name) {
    $parts = explode(' ', $name);
    $setterName = 'set';
    foreach ($parts as $part) {
        $setterName .= ucfirst($part);
    }
    return $setterName;
}

$input = fgets(STDIN);