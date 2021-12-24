# YooMoney Payout API PHP Client Library

[![Build Status](https://travis-ci.org/yoomoney/yookassa-payout-sdk-php.svg?branch=master)](https://travis-ci.org/yoomoney/yookassa-payout-sdk-php)
[![Latest Stable Version](https://poser.pugx.org/yoomoney/yookassa-payout-sdk-php/v/stable)](https://packagist.org/packages/yoomoney/yookassa-payout-sdk-php)
[![Total Downloads](https://poser.pugx.org/yoomoney/yookassa-payout-sdk-php/downloads)](https://packagist.org/packages/yoomoney/yookassa-payout-sdk-php)
[![Monthly Downloads](https://poser.pugx.org/yoomoney/yookassa-payout-sdk-php/d/monthly)](https://packagist.org/packages/yoomoney/yookassa-payout-sdk-php)
[![License](https://poser.pugx.org/yoomoney/yookassa-payout-sdk-php/license)](https://packagist.org/packages/yoomoney/yookassa-payout-sdk-php)

[Russian](README.md) | English

Client to work on the [Protocol for mass payouts](https://yookassa.ru/docs/payouts/api/using-api/basics?lang=en)

## Opportunities
You can with this SDK:
1. [Generate a certificate](https://yookassa.ru/docs/payment-solution/supplementary/security?lang=en) for interaction with YooMoney.
2. [Transfer money](https://yookassa.ru/docs/payouts/api/make-deposition/basics?lang=en) to individuals for wallets in YooMoney, mobile phone numbers, Bank cards and accounts (makeDeposition).
3. [To test the possibility of transfer of remittances](https://yookassa.ru/docs/payouts/api/make-deposition/basics?lang=en#test-deposition) to wallets in YooMoney (testDeposition).
4. [Keep track of the balance of payments](https://yookassa.ru/docs/payouts/api/balance?lang=en) (balance).
5. [Receive notifications](https://yookassa.ru/docs/payouts/api/error-deposition-notification?lang=en) the unsuccessful status of transfers to a Bank account, card, or mobile phone (errorDepositionNotification).

## Requirements
PHP 5.6.0 (or later version) with the libcurl and libxml libraries

## Installation

### Under console using Composer
1. Install Composer, a package manager.
2. In the console, run the following command:
```bash
composer require yoomoney/yookassa-payout-sdk-php
```

### Do the following for the composer.json file of your project:
1. Add a string `"yoomoney/yookassa-payout-sdk-php": "^2.0"` to the list of dependencies of your project in the composer.json file
```
...
    "require": {
        "php": ">=5.6.0",
        "yoomoney/yookassa-payout-sdk-php": "^2.0"
...
```
2. Refresh the project's dependencies. In the console, navigate to the catalog with composer.json and run the following command:
```bash
composer update
```
3. Adjust your project's code to activate automated uploading of files for our product:
```php
require __DIR__ . '/vendor/autoload.php';
```

### Manually

1. Download [the YooMoney API PHP Client Library archive](https://github.com/yoomoney/yookassa-payout-sdk-php/archive/master.zip), extract it and copy the lib catalog to the required place of your project.
2. Adjust your project's code to activate automated uploading of files for our product:
```php
require __DIR__ . '/lib/autoload.php'; 
```

## Examples of using the SDK Payout API YooMoney

#### [Settings SDK Payout API YooMoney](docs/examples/01-configuration.md)
* [Generate a certificate](docs/examples/01-configuration.md#Получение-сертификата-для-аутентификации-запросов)
* [Balance request](docs/examples/01-configuration.md#Запрос-баланса)

#### [Funds deposit](docs/examples/02-depositions.md)
* [Request to check transfer possibility](docs/examples/02-depositions.md#Проверка-возможности-зачислений)
* [Transfer to bank card](docs/examples/02-depositions.md#Зачисление-на-банковскую-карту)
* [Transfer to bank account](docs/examples/02-depositions.md#Зачисление-переводов-на-банковский-счет)

#### [Notification of unsuccessful transfer](docs/examples/03-notifications.md)
