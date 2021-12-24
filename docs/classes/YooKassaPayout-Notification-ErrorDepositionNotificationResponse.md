# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Notification\ErrorDepositionNotificationResponse
### Namespace: [\YooKassaPayout\Notification](../namespaces/yookassapayout-notification.md)
---
**Summary:**

Класс для создания ответа на errorDepositionNotification

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
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [RESPONSE_TAG](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#constant_RESPONSE_TAG) |  |  |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$clientOrderId](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#property_clientOrderId) |  | Копия параметра clientOrderId запроса |
| protected | [$processedDT](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#property_processedDT) |  | Время обработки запроса по часам ЮKassa |
| protected | [$status](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#property_status) |  | Результат выполнения операции |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#method___construct) |  | ErrorDepositionNotificationResponse constructor. |
| public | [build()](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#method_build) |  | Строит ответ на запрос, упаковывает его в PKCS#7 пакет. |
| public | [getClientOrderId()](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#method_getClientOrderId) |  | Возвращает идентификатор операции |
| public | [getProcessedDT()](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#method_getProcessedDT) |  | Возвращает время обработки запроса по часам ЮKassa |
| public | [getStatus()](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#method_getStatus) |  | Возвращает результат выполнения операции |
| public | [setClientOrderId()](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#method_setClientOrderId) |  | Устанавливает идентификатор операции |
| public | [setProcessedDT()](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#method_setProcessedDT) |  | Устанавливает время обработки запроса по часам ЮKassa |
| public | [setStatus()](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md#method_setStatus) |  | Устанавливает результат выполнения операции |
---
### Details
* File: [lib/Notification/ErrorDepositionNotificationResponse.php](../../lib/Notification/ErrorDepositionNotificationResponse.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Notification\ErrorDepositionNotificationResponse
---
## Constants
<a name="constant_RESPONSE_TAG" class="anchor"></a>
###### RESPONSE_TAG
```php
RESPONSE_TAG = 'errorDepositionNotificationResponse'
```

| Tag | Version | Desc |
| --- | ------- | ---- |
| const |  | string |

---
## Properties
<a name="property_clientOrderId"></a>
#### protected $clientOrderId : string
---
**Summary**

Копия параметра clientOrderId запроса

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_processedDT"></a>
#### protected $processedDT : string
---
**Summary**

Время обработки запроса по часам ЮKassa

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_status"></a>
#### protected $status : int|string
---
**Summary**

Результат выполнения операции

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string $clientOrderId, int|string $status, string $processedDT = '') : mixed
```

**Summary**

ErrorDepositionNotificationResponse constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotificationResponse](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | clientOrderId  | Копия параметра clientOrderId запроса |
| <code lang="php">int OR string</code> | status  | Результат выполнения операции |
| <code lang="php">string</code> | processedDT  | Время обработки запроса по часам ЮKassa |

**Returns:** mixed - 


<a name="method_build" class="anchor"></a>
#### public build() : string

```php
public build(\YooKassaPayout\Request\Keychain $keychain) : string
```

**Summary**

Строит ответ на запрос, упаковывает его в PKCS#7 пакет.

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotificationResponse](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Request\Keychain</code> | keychain  | Объект с ключами |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |
| \YooKassaPayout\Common\Exceptions\XmlException | Выбрасывается при ошибке работы с XML |

**Returns:** string - Ответ для ЮKassa


<a name="method_getClientOrderId" class="anchor"></a>
#### public getClientOrderId() : string

```php
public getClientOrderId() : string
```

**Summary**

Возвращает идентификатор операции

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotificationResponse](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md)

**Returns:** string - Идентификатор операции


<a name="method_getProcessedDT" class="anchor"></a>
#### public getProcessedDT() : string

```php
public getProcessedDT() : string
```

**Summary**

Возвращает время обработки запроса по часам ЮKassa

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotificationResponse](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md)

**Returns:** string - Время обработки запроса по часам ЮKassa


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает результат выполнения операции

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotificationResponse](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md)

**Returns:** string - Результат выполнения операции


<a name="method_setClientOrderId" class="anchor"></a>
#### public setClientOrderId() : $this

```php
public setClientOrderId(string $clientOrderId) : $this
```

**Summary**

Устанавливает идентификатор операции

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotificationResponse](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | clientOrderId  | Копия параметра clientOrderId запроса |

**Returns:** $this - 


<a name="method_setProcessedDT" class="anchor"></a>
#### public setProcessedDT() : $this

```php
public setProcessedDT(string $processedDT) : $this
```

**Summary**

Устанавливает время обработки запроса по часам ЮKassa

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotificationResponse](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | processedDT  | Время обработки запроса по часам ЮKassa |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |

**Returns:** $this - 


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : $this

```php
public setStatus(string $status) : $this
```

**Summary**

Устанавливает результат выполнения операции

**Details:**
* Inherited From: [\YooKassaPayout\Notification\ErrorDepositionNotificationResponse](../classes/YooKassaPayout-Notification-ErrorDepositionNotificationResponse.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | status  | Результат выполнения операции |

**Returns:** $this - 



---

### Top Namespaces

* [\YooKassaPayout](../namespaces/yookassapayout.md)

---

### Reports
* [Errors - 0](../reports/errors.md)
* [Markers - 0](../reports/markers.md)
* [Deprecated - 1](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-12-24 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney