# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Exceptions\ApiException
### Namespace: [\YooKassaPayout\Common\Exceptions](../namespaces/yookassapayout-common-exceptions.md)
---
**Summary:**

Class ApiException

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$responseBody](../classes/YooKassaPayout-Common-Exceptions-ApiException.md#property_responseBody) |  | Тело ответа |
| protected | [$responseHeaders](../classes/YooKassaPayout-Common-Exceptions-ApiException.md#property_responseHeaders) |  | Заголовки ответа |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Common-Exceptions-ApiException.md#method___construct) |  | Constructor |
| public | [getResponseBody()](../classes/YooKassaPayout-Common-Exceptions-ApiException.md#method_getResponseBody) |  | Возвращает тело ответа |
| public | [getResponseHeaders()](../classes/YooKassaPayout-Common-Exceptions-ApiException.md#method_getResponseHeaders) |  | Возвращает заголовки ответа |
---
### Details
* File: [lib/Common/Exceptions/ApiException.php](../../lib/Common/Exceptions/ApiException.php)
* Package: YooKassaPayout
* Class Hierarchy: 
  * [\Exception](\Exception)
  * \YooKassaPayout\Common\Exceptions\ApiException
---
## Properties
<a name="property_responseBody"></a>
#### protected $responseBody : mixed
---
**Summary**

Тело ответа

**Type:** <a href="../mixed"><abbr title="mixed">mixed</abbr></a>

**Details:**


<a name="property_responseHeaders"></a>
#### protected $responseHeaders : string[]
---
**Summary**

Заголовки ответа

**Type:** <a href="../string[]"><abbr title="string[]">string[]</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string $message = '', int $code, string[] $responseHeaders = [], mixed $responseBody = null) : mixed
```

**Summary**

Constructor

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\ApiException](../classes/YooKassaPayout-Common-Exceptions-ApiException.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  | Текст ошибки |
| <code lang="php">int</code> | code  | Код ошибки |
| <code lang="php">string[]</code> | responseHeaders  | HTTP Заголовки |
| <code lang="php">mixed</code> | responseBody  | Тело запроса |

**Returns:** mixed - 


<a name="method_getResponseBody" class="anchor"></a>
#### public getResponseBody() : mixed

```php
public getResponseBody() : mixed
```

**Summary**

Возвращает тело ответа

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\ApiException](../classes/YooKassaPayout-Common-Exceptions-ApiException.md)

**Returns:** mixed - Тело ответа


<a name="method_getResponseHeaders" class="anchor"></a>
#### public getResponseHeaders() : string[]

```php
public getResponseHeaders() : string[]
```

**Summary**

Возвращает заголовки ответа

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\ApiException](../classes/YooKassaPayout-Common-Exceptions-ApiException.md)

**Returns:** string[] - Заголовки ответа



---

### Top Namespaces

* [\YooKassaPayout](../namespaces/yookassapayout.md)

---

### Reports
* [Errors - 0](../reports/errors.md)
* [Markers - 0](../reports/markers.md)
* [Deprecated - 1](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2021-07-23 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney