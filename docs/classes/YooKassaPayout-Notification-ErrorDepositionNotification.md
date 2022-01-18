# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Notification\ErrorDepositionNotification
### Namespace: [\YooKassaPayout\Notification](../namespaces/yookassapayout-notification.md)
---
**Summary:**

Класс для обработки входящих уведомлений

---
### Examples
Обработка уведомления об ошибке

```php
require_once '../vendor/autoload.php';

// Создание ключницы и экземпляра клиента
$keychain = new YooKassaPayout\Request\Keychain('./250000.cer', './privateKey.pem', 12345);
$client  = new YooKassaPayout\Client('250000', $keychain);

try {
    $notificationBody = file_get_contents('php://input');
    $notification = new YooKassaPayout\Notification\ErrorDepositionNotification($notificationBody);
    $error = $notification->getError();
    echo $notification->createResponse(0, $keychain);
    exit();
} catch (\Exception $e) {
    echo $e->getMessage();
}

```
---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$amount](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#property_amount) |  | Сумма перевода |
| protected | [$clientOrderId](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#property_clientOrderId) |  | Идентификатор операции, полученный от системы контрагента в запросе на зачисление перевода |
| protected | [$currency](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#property_currency) |  | Код валюты перевода |
| protected | [$dstAccount](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#property_dstAccount) |  | Идентификатор получателя перевода |
| protected | [$error](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#property_error) |  | Код ошибки операции |
| protected | [$requestDT](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#property_requestDT) |  | Дата и время формирования запроса операции на стороне и по часам ЮKassa |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#method___construct) |  | ErrorDepositionNotification constructor. |
| public | [createResponse()](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#method_createResponse) |  |  |
| public | [getAmount()](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#method_getAmount) |  | Возвращает сумму перевода |
| public | [getClientOrderId()](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#method_getClientOrderId) |  | Возвращает идентификатор операции, полученный от системы контрагента в запросе на зачисление перевода |
| public | [getCurrency()](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#method_getCurrency) |  | Возвращает код валюты перевода |
| public | [getDstAccount()](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#method_getDstAccount) |  | Возвращает идентификатор получателя перевода |
| public | [getError()](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#method_getError) |  | Возвращает код ошибки операции |
| public | [getRequestDT()](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md#method_getRequestDT) |  | Возвращает дату и время формирования запроса операции на стороне и по часам ЮKassa |
---
### Details
* File: [lib/Notification/ErrorDepositionNotification.php](../../lib/Notification/ErrorDepositionNotification.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Notification\ErrorDepositionNotification
---
## Properties
<a name="property_amount"></a>
#### protected $amount : string
---
**Summary**

Сумма перевода

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_clientOrderId"></a>
#### protected $clientOrderId : string
---
**Summary**

Идентификатор операции, полученный от системы контрагента в запросе на зачисление перевода

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_currency"></a>
#### protected $currency : string
---
**Summary**

Код валюты перевода

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_dstAccount"></a>
#### protected $dstAccount : string
---
**Summary**

Идентификатор получателя перевода

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_error"></a>
#### protected $error : string
---
**Summary**

Код ошибки операции

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_requestDT"></a>
#### protected $requestDT : string
---
**Summary**

Дата и время формирования запроса операции на стороне и по часам ЮKassa

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string $body) : mixed
```

**Summary**

ErrorDepositionNotification constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotification](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | body  | Тело ошибки |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |

**Returns:** mixed - 


<a name="method_createResponse" class="anchor"></a>
#### public createResponse() : string

```php
public createResponse(int|string $status, \YooKassaPayout\Request\Keychain $keychain) : string
```

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotification](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR string</code> | status  | Статус обработки уведомления |
| <code lang="php">\YooKassaPayout\Request\Keychain</code> | keychain  | Объект с ключами |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |
| \YooKassaPayout\Common\Exceptions\XmlException | Выбрасывается при ошибке работы с XML |

**Returns:** string - Ответ для ЮKassa


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : string

```php
public getAmount() : string
```

**Summary**

Возвращает сумму перевода

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotification](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md)

**Returns:** string - 


<a name="method_getClientOrderId" class="anchor"></a>
#### public getClientOrderId() : string

```php
public getClientOrderId() : string
```

**Summary**

Возвращает идентификатор операции, полученный от системы контрагента в запросе на зачисление перевода

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotification](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md)

**Returns:** string - 


<a name="method_getCurrency" class="anchor"></a>
#### public getCurrency() : string

```php
public getCurrency() : string
```

**Summary**

Возвращает код валюты перевода

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotification](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md)

**Returns:** string - 


<a name="method_getDstAccount" class="anchor"></a>
#### public getDstAccount() : string

```php
public getDstAccount() : string
```

**Summary**

Возвращает идентификатор получателя перевода

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotification](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md)

**Returns:** string - 


<a name="method_getError" class="anchor"></a>
#### public getError() : string

```php
public getError() : string
```

**Summary**

Возвращает код ошибки операции

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotification](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md)

**Returns:** string - 


<a name="method_getRequestDT" class="anchor"></a>
#### public getRequestDT() : string

```php
public getRequestDT() : string
```

**Summary**

Возвращает дату и время формирования запроса операции на стороне и по часам ЮKassa

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotification](../classes/YooKassaPayout-Notification-ErrorDepositionNotification.md)

**Returns:** string - 



---

### Top Namespaces

* [\YooKassaPayout](../namespaces/yookassapayout.md)

---

### Reports
* [Errors - 0](../reports/errors.md)
* [Markers - 0](../reports/markers.md)
* [Deprecated - 1](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2022-01-18 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2022 YooMoney