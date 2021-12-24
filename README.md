# YooKassa Payout API PHP Client Library

[![Build Status](https://travis-ci.org/yoomoney/yookassa-payout-sdk-php.svg?branch=master)](https://travis-ci.org/yoomoney/yookassa-payout-sdk-php)
[![Latest Stable Version](https://poser.pugx.org/yoomoney/yookassa-payout-sdk-php/v/stable)](https://packagist.org/packages/yoomoney/yookassa-payout-sdk-php)
[![Total Downloads](https://poser.pugx.org/yoomoney/yookassa-payout-sdk-php/downloads)](https://packagist.org/packages/yoomoney/yookassa-payout-sdk-php)
[![Monthly Downloads](https://poser.pugx.org/yoomoney/yookassa-payout-sdk-php/d/monthly)](https://packagist.org/packages/yoomoney/yookassa-payout-sdk-php)
[![License](https://poser.pugx.org/yoomoney/yookassa-payout-sdk-php/license)](https://packagist.org/packages/yoomoney/yookassa-payout-sdk-php)

Russian | [English](README.en.md)

Клиент для работы по [Протоколу массовых выплат](https://yookassa.ru/docs/payouts/api/using-api/basics)

## Возможности
С помощью этого SDK вы можете:
1. [Генерировать сертификат](https://yookassa.ru/docs/payment-solution/supplementary/security) для взаимодействия с ЮKassa.
2. [Переводить деньги](https://yookassa.ru/docs/payouts/api/make-deposition/basics) физическим лицам на кошельки в ЮMoney, номера мобильных телефонов, банковские карты и счета (makeDeposition).
3. [Проверять возможность](https://yookassa.ru/docs/payouts/api/make-deposition/basics#test-deposition) зачисления переводов на кошельки в ЮMoney (testDeposition).
3. [Отслеживать баланс выплат](https://yookassa.ru/docs/payouts/api/balance) (balance).
3. [Получать уведомления](https://yookassa.ru/docs/payouts/api/error-deposition-notification) о неуспешном статусе переводов на банковский счет, карту, мобильный телефон (errorDepositionNotification).

## Требования
PHP 5.6.0 (и выше) с расширением libcurl и libxml

## Установка
Установите SDK одним из трех способов
- [с помощью менеджера пакетов Composer](#в-консоли-с-помощью-composer);
- [с помощью файла composer.json](#в-файле-composerjson-своего-проекта);
- [вручную](#вручную).

### В консоли с помощью Composer
1. Установите менеджер пакетов Composer.
2. В консоли выполните команду
```bash
composer require yoomoney/yookassa-payout-sdk-php
```

### В файле composer.json своего проекта
1. Добавьте строку `"yoomoney/yookassa-payout-sdk-php": "^2.0"` в список зависимостей вашего проекта в файле composer.json
```
...
    "require": {
        "php": ">=5.6.0",
        "yoomoney/yookassa-payout-sdk-php": "^2.0"
...
```
2. Обновите зависимости проекта: в консоли перейдите в каталог с файлом composer.json и выполните команду:
```bash
composer update
```
3. В коде вашего проекта подключите автозагрузку файлов SDK Payout API ЮKassa:
```php
require __DIR__ . '/vendor/autoload.php';
```

### Вручную
1. Скачайте архив [YooKassa Payout API PHP Client Library](https://github.com/yoomoney/yookassa-payout-sdk-php/archive/master.zip), распакуйте его и скопируйте каталог lib в папку вашего проекта, где будет размещен SDK.
2. В коде вашего проекта подключите автозагрузку файлов SDK Payout API ЮKassa:
```php
require __DIR__ . '/lib/autoload.php'; 
```

## Примеры использования SDK Payout API ЮKassa

#### [Настройки SDK Payout API ЮKassa](docs/examples/01-configuration.md)
* [Получение сертификата для аутентификации запросов](docs/examples/01-configuration.md#Получение-сертификата-для-аутентификации-запросов)
* [Запрос баланса](docs/examples/01-configuration.md#Запрос-баланса)

#### [Зачисление переводов](docs/examples/02-depositions.md)
* [Проверка возможности зачислений](docs/examples/02-depositions.md#Проверка-возможности-зачислений)
* [Зачисление на банковскую карту](docs/examples/02-depositions.md#Зачисление-на-банковскую-карту)
* [Зачисление переводов на банковский счет](docs/examples/02-depositions.md#Зачисление-переводов-на-банковский-счет)

#### [Уведомление о неуспешном переводе](docs/examples/03-notifications.md)
