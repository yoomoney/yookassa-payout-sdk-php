# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\ResponseXmlObject
### Namespace: [\YooKassaPayout\Common](../namespaces/yookassapayout-common.md)
---
**Summary:**

Класс объекта ответа, возвращаемого API, для работы с xml

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$balance](../classes/YooKassaPayout-Common-ResponseXmlObject.md#property_balance) |  | Баланс |
| protected | [$clientOrderId](../classes/YooKassaPayout-Common-ResponseXmlObject.md#property_clientOrderId) |  | Идентификатор операции |
| protected | [$error](../classes/YooKassaPayout-Common-ResponseXmlObject.md#property_error) |  | Код ошибки выполнения запроса |
| protected | [$fullXmlResponse](../classes/YooKassaPayout-Common-ResponseXmlObject.md#property_fullXmlResponse) |  | Полная XML строка ответа |
| protected | [$identification](../classes/YooKassaPayout-Common-ResponseXmlObject.md#property_identification) |  | Поле содержит информацию о статусе кошелька в сервисе ЮMoney |
| protected | [$processedDT](../classes/YooKassaPayout-Common-ResponseXmlObject.md#property_processedDT) |  | Время обработки запроса |
| protected | [$status](../classes/YooKassaPayout-Common-ResponseXmlObject.md#property_status) |  | Результат выполнения операции |
| protected | [$techMessage](../classes/YooKassaPayout-Common-ResponseXmlObject.md#property_techMessage) |  | Дополнительный поясняющий текст к отказам в приеме перевода |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Common-ResponseXmlObject.md#method___construct) |  | ResponseXmlObject constructor. |
| public | [getBalance()](../classes/YooKassaPayout-Common-ResponseXmlObject.md#method_getBalance) |  | Возвращает баланс |
| public | [getClientOrderId()](../classes/YooKassaPayout-Common-ResponseXmlObject.md#method_getClientOrderId) |  | Возвращает Идентификатор операции |
| public | [getFullXmlResponse()](../classes/YooKassaPayout-Common-ResponseXmlObject.md#method_getFullXmlResponse) |  | Возвращает полную XML строку ответа |
| public | [getIdentification()](../classes/YooKassaPayout-Common-ResponseXmlObject.md#method_getIdentification) |  | Врзвращает информацию о статусе кошелька в сервисе ЮMoney |
| public | [getProcessedDT()](../classes/YooKassaPayout-Common-ResponseXmlObject.md#method_getProcessedDT) |  | Возвращает время обработки запроса |
| public | [getStatus()](../classes/YooKassaPayout-Common-ResponseXmlObject.md#method_getStatus) |  | Возвращает результат выполнения операции |
| public | [getTechMessage()](../classes/YooKassaPayout-Common-ResponseXmlObject.md#method_getTechMessage) |  | Возвращает дополнительный поясняющий текст к отказам в приеме перевода |
---
### Details
* File: [lib/Common/ResponseXmlObject.php](../../lib/Common/ResponseXmlObject.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\ResponseXmlObject
---
## Properties
<a name="property_balance"></a>
#### protected $balance : \YooKassaPayout\Common\numeric
---
**Summary**

Баланс

***Description***

Разница между суммой обеспечения и суммой, которую ЮKassa перечислили по запросам контрагента

**Type:** \YooKassaPayout\Common\numeric

**Details:**


<a name="property_clientOrderId"></a>
#### protected $clientOrderId : string
---
**Summary**

Идентификатор операции

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_error"></a>
#### protected $error : int
---
**Summary**

Код ошибки выполнения запроса

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**


<a name="property_fullXmlResponse"></a>
#### protected $fullXmlResponse : string
---
**Summary**

Полная XML строка ответа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_identification"></a>
#### protected $identification : string
---
**Summary**

Поле содержит информацию о статусе кошелька в сервисе ЮMoney

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_processedDT"></a>
#### protected $processedDT : string
---
**Summary**

Время обработки запроса

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_status"></a>
#### protected $status : int
---
**Summary**

Результат выполнения операции

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**


<a name="property_techMessage"></a>
#### protected $techMessage : string
---
**Summary**

Дополнительный поясняющий текст к отказам в приеме перевода

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string $xml) : mixed
```

**Summary**

ResponseXmlObject constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseXmlObject](../classes/YooKassaPayout-Common-ResponseXmlObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | xml  | Исходная строка XML |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\ApiException | Выбрасывается, если API вернул ответ с ошибкой |

**Returns:** mixed - 


<a name="method_getBalance" class="anchor"></a>
#### public getBalance() : string

```php
public getBalance() : string
```

**Summary**

Возвращает баланс

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseXmlObject](../classes/YooKassaPayout-Common-ResponseXmlObject.md)

**Returns:** string - Баланс


<a name="method_getClientOrderId" class="anchor"></a>
#### public getClientOrderId() : string

```php
public getClientOrderId() : string
```

**Summary**

Возвращает Идентификатор операции

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseXmlObject](../classes/YooKassaPayout-Common-ResponseXmlObject.md)

**Returns:** string - Идентификатор операции


<a name="method_getFullXmlResponse" class="anchor"></a>
#### public getFullXmlResponse() : string

```php
public getFullXmlResponse() : string
```

**Summary**

Возвращает полную XML строку ответа

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseXmlObject](../classes/YooKassaPayout-Common-ResponseXmlObject.md)

**Returns:** string - Полная XML строка ответа


<a name="method_getIdentification" class="anchor"></a>
#### public getIdentification() : string

```php
public getIdentification() : string
```

**Summary**

Врзвращает информацию о статусе кошелька в сервисе ЮMoney

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseXmlObject](../classes/YooKassaPayout-Common-ResponseXmlObject.md)

**Returns:** string - Информация о статусе кошелька в сервисе ЮMoney


<a name="method_getProcessedDT" class="anchor"></a>
#### public getProcessedDT() : string

```php
public getProcessedDT() : string
```

**Summary**

Возвращает время обработки запроса

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseXmlObject](../classes/YooKassaPayout-Common-ResponseXmlObject.md)

**Returns:** string - Время обработки запроса


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : int

```php
public getStatus() : int
```

**Summary**

Возвращает результат выполнения операции

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseXmlObject](../classes/YooKassaPayout-Common-ResponseXmlObject.md)

**Returns:** int - Результат выполнения операции


<a name="method_getTechMessage" class="anchor"></a>
#### public getTechMessage() : string

```php
public getTechMessage() : string
```

**Summary**

Возвращает дополнительный поясняющий текст к отказам в приеме перевода

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseXmlObject](../classes/YooKassaPayout-Common-ResponseXmlObject.md)

**Returns:** string - Дополнительный поясняющий текст к отказам в приеме перевода



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