# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\ResponseObject
### Namespace: [\YooKassaPayout\Common](../namespaces/yookassapayout-common.md)
---
**Summary:**

Класс объекта ответа, возвращаемого API при запросе выплаты, баланса

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$body](../classes/YooKassaPayout-Common-ResponseObject.md#property_body) |  | Тело ответа |
| protected | [$code](../classes/YooKassaPayout-Common-ResponseObject.md#property_code) |  | Код ответа |
| protected | [$headers](../classes/YooKassaPayout-Common-ResponseObject.md#property_headers) |  | Заголовки ответа |
| protected | [$xmlResponse](../classes/YooKassaPayout-Common-ResponseObject.md#property_xmlResponse) |  | Расшифрованное тело ответа |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Common-ResponseObject.md#method___construct) |  | ResponseObject constructor. |
| public | [getBody()](../classes/YooKassaPayout-Common-ResponseObject.md#method_getBody) |  | Возвращает тело ответа |
| public | [getCode()](../classes/YooKassaPayout-Common-ResponseObject.md#method_getCode) |  | Возвращает код ответа |
| public | [getHeaders()](../classes/YooKassaPayout-Common-ResponseObject.md#method_getHeaders) |  | Возвращает массив заголовков ответа |
| public | [getXmlResponse()](../classes/YooKassaPayout-Common-ResponseObject.md#method_getXmlResponse) |  | Возвращает преобразованное в объект тело ответа |
---
### Details
* File: [lib/Common/ResponseObject.php](../../lib/Common/ResponseObject.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\ResponseObject
---
## Properties
<a name="property_body"></a>
#### protected $body : mixed
---
**Summary**

Тело ответа

**Type:** <a href="../mixed"><abbr title="mixed">mixed</abbr></a>

**Details:**


<a name="property_code"></a>
#### protected $code : mixed
---
**Summary**

Код ответа

**Type:** <a href="../mixed"><abbr title="mixed">mixed</abbr></a>

**Details:**


<a name="property_headers"></a>
#### protected $headers : mixed
---
**Summary**

Заголовки ответа

**Type:** <a href="../mixed"><abbr title="mixed">mixed</abbr></a>

**Details:**


<a name="property_xmlResponse"></a>
#### protected $xmlResponse : \YooKassaPayout\Common\ResponseXmlObject
---
**Summary**

Расшифрованное тело ответа

**Type:** <a href="../classes/YooKassaPayout-Common-ResponseXmlObject.html"><abbr title="\YooKassaPayout\Common\ResponseXmlObject">ResponseXmlObject</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array|null $config = null) : mixed
```

**Summary**

ResponseObject constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseObject](../classes/YooKassaPayout-Common-ResponseObject.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | config  | Массив с данными ответа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\ApiException | Выбрасывается, если API вернул ответ с ошибкой |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |

**Returns:** mixed - 


<a name="method_getBody" class="anchor"></a>
#### public getBody() : mixed

```php
public getBody() : mixed
```

**Summary**

Возвращает тело ответа

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseObject](../classes/YooKassaPayout-Common-ResponseObject.md)

**Returns:** mixed - 


<a name="method_getCode" class="anchor"></a>
#### public getCode() : mixed

```php
public getCode() : mixed
```

**Summary**

Возвращает код ответа

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseObject](../classes/YooKassaPayout-Common-ResponseObject.md)

**Returns:** mixed - 


<a name="method_getHeaders" class="anchor"></a>
#### public getHeaders() : mixed

```php
public getHeaders() : mixed
```

**Summary**

Возвращает массив заголовков ответа

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseObject](../classes/YooKassaPayout-Common-ResponseObject.md)

**Returns:** mixed - 


<a name="method_getXmlResponse" class="anchor"></a>
#### public getXmlResponse() : \YooKassaPayout\Common\ResponseXmlObject

```php
public getXmlResponse() : \YooKassaPayout\Common\ResponseXmlObject
```

**Summary**

Возвращает преобразованное в объект тело ответа

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseObject](../classes/YooKassaPayout-Common-ResponseObject.md)

**Returns:** \YooKassaPayout\Common\ResponseXmlObject - 



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