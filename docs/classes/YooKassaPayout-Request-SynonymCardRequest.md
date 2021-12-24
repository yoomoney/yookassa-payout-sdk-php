# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Request\SynonymCardRequest
### Namespace: [\YooKassaPayout\Request](../namespaces/yookassapayout-request.md)
---
**Summary:**

Класс для создания запроса на получение синонима карты

---
### Examples
Получение синонима карты

```php
// Получение синонима карты
$synonymRequest = new YooKassaPayout\Request\SynonymCardRequest();
$synonymRequest->setSkrDestinationCardNumber('5555555555554444')
               ->setSkrErrorUrl('https://yoomoney.ru')
               ->setSkrSuccessUrl('https://yoomoney.ru');
try {
    $synonym = $client->getSynonymCard($synonymRequest);
    var_dump($synonym);
} catch (\Exception $e) {

```
---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [FORMAT_JSON](../classes/YooKassaPayout-Request-SynonymCardRequest.md#constant_FORMAT_JSON) |  | Формат ответа на запрос - json |
| public | [FORMAT_REDIRECT](../classes/YooKassaPayout-Request-SynonymCardRequest.md#constant_FORMAT_REDIRECT) |  | Формат ответа на запрос - redirect |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$skrDestinationCardNumber](../classes/YooKassaPayout-Request-SynonymCardRequest.md#property_skrDestinationCardNumber) |  | Номер банковской карты |
| protected | [$skrErrorUrl](../classes/YooKassaPayout-Request-SynonymCardRequest.md#property_skrErrorUrl) |  | Адрес для перенаправления при ошибке |
| protected | [$skrResponseFormat](../classes/YooKassaPayout-Request-SynonymCardRequest.md#property_skrResponseFormat) |  | Формат ответа на запрос |
| protected | [$skrSuccessUrl](../classes/YooKassaPayout-Request-SynonymCardRequest.md#property_skrSuccessUrl) |  | Адрес для перенаправления при успехе |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method___construct) |  | SynonymCardRequest constructor. |
| public | [getBuilder()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_getBuilder) |  | Возвращает объект для сборки запроса SynonymCardRequest из массива |
| public | [getSerializer()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_getSerializer) |  | Возвращает объект для преобразования запроса SynonymCardRequest в массив |
| public | [getSkrDestinationCardNumber()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_getSkrDestinationCardNumber) |  | Возвращает номер банковской карты |
| public | [getSkrErrorUrl()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_getSkrErrorUrl) |  | Возвращает адрес для перенаправления при ошибке |
| public | [getSkrResponseFormat()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_getSkrResponseFormat) |  | Возвращает формат ответа на запрос |
| public | [getSkrSuccessUrl()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_getSkrSuccessUrl) |  | Возвращает адрес для перенаправления при успехе |
| public | [setSkrDestinationCardNumber()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_setSkrDestinationCardNumber) |  | Устанавливает номер банковской карты |
| public | [setSkrErrorUrl()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_setSkrErrorUrl) |  | Устанавливает адрес для перенаправления при ошибке |
| public | [setSkrResponseFormat()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_setSkrResponseFormat) |  | Устанавливает формат ответа на запрос |
| public | [setSkrSuccessUrl()](../classes/YooKassaPayout-Request-SynonymCardRequest.md#method_setSkrSuccessUrl) |  | Устанавливает адрес для перенаправления при успехе |
---
### Details
* File: [lib/Request/SynonymCardRequest.php](../../lib/Request/SynonymCardRequest.php)
* Package: YooKassaPayout\Request
* Class Hierarchy:
  * \YooKassaPayout\Request\SynonymCardRequest
---
## Constants
<a name="constant_FORMAT_JSON" class="anchor"></a>
###### FORMAT_JSON
Формат ответа на запрос - json

```php
FORMAT_JSON = 'json'
```

| Tag | Version | Desc |
| --- | ------- | ---- |
| const |  | string |

<a name="constant_FORMAT_REDIRECT" class="anchor"></a>
###### FORMAT_REDIRECT
Формат ответа на запрос - redirect

```php
FORMAT_REDIRECT = 'redirect'
```

| Tag | Version | Desc |
| --- | ------- | ---- |
| const |  | string |

---
## Properties
<a name="property_skrDestinationCardNumber"></a>
#### protected $skrDestinationCardNumber : string
---
**Summary**

Номер банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrErrorUrl"></a>
#### protected $skrErrorUrl : string
---
**Summary**

Адрес для перенаправления при ошибке

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrResponseFormat"></a>
#### protected $skrResponseFormat : string
---
**Summary**

Формат ответа на запрос

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrSuccessUrl"></a>
#### protected $skrSuccessUrl : string
---
**Summary**

Адрес для перенаправления при успехе

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct() : mixed
```

**Summary**

SynonymCardRequest constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)

**Returns:** mixed - 


<a name="method_getBuilder" class="anchor"></a>
#### public getBuilder() : \YooKassaPayout\Request\Builders\SynonymCardRequestBuilder

```php
static public getBuilder() : \YooKassaPayout\Request\Builders\SynonymCardRequestBuilder
```

**Summary**

Возвращает объект для сборки запроса SynonymCardRequest из массива

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)

**Returns:** \YooKassaPayout\Request\Builders\SynonymCardRequestBuilder - Объект для сборки запроса SynonymCardRequest из массива


<a name="method_getSerializer" class="anchor"></a>
#### public getSerializer() : \YooKassaPayout\Request\Serializers\SynonymCardRequestSerializer

```php
public getSerializer() : \YooKassaPayout\Request\Serializers\SynonymCardRequestSerializer
```

**Summary**

Возвращает объект для преобразования запроса SynonymCardRequest в массив

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)

**Returns:** \YooKassaPayout\Request\Serializers\SynonymCardRequestSerializer - Объект для преобразования запроса SynonymCardRequest в массив


<a name="method_getSkrDestinationCardNumber" class="anchor"></a>
#### public getSkrDestinationCardNumber() : string

```php
public getSkrDestinationCardNumber() : string
```

**Summary**

Возвращает номер банковской карты

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)

**Returns:** string - Номер банковской карты


<a name="method_getSkrErrorUrl" class="anchor"></a>
#### public getSkrErrorUrl() : string

```php
public getSkrErrorUrl() : string
```

**Summary**

Возвращает адрес для перенаправления при ошибке

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)

**Returns:** string - Адрес для перенаправления при ошибке


<a name="method_getSkrResponseFormat" class="anchor"></a>
#### public getSkrResponseFormat() : string

```php
public getSkrResponseFormat() : string
```

**Summary**

Возвращает формат ответа на запрос

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)

**Returns:** string - Формат ответа на запрос


<a name="method_getSkrSuccessUrl" class="anchor"></a>
#### public getSkrSuccessUrl() : string

```php
public getSkrSuccessUrl() : string
```

**Summary**

Возвращает адрес для перенаправления при успехе

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)

**Returns:** string - Адрес для перенаправления при успехе


<a name="method_setSkrDestinationCardNumber" class="anchor"></a>
#### public setSkrDestinationCardNumber() : $this

```php
public setSkrDestinationCardNumber(string $skrDestinationCardNumber) : $this
```

**Summary**

Устанавливает номер банковской карты

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | skrDestinationCardNumber  | Номер банковской карты |

**Returns:** $this - 


<a name="method_setSkrErrorUrl" class="anchor"></a>
#### public setSkrErrorUrl() : \YooKassaPayout\Request\SynonymCardRequest

```php
public setSkrErrorUrl(string $skrErrorUrl) : \YooKassaPayout\Request\SynonymCardRequest
```

**Summary**

Устанавливает адрес для перенаправления при ошибке

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | skrErrorUrl  | Адрес для перенаправления при ошибке |

**Returns:** \YooKassaPayout\Request\SynonymCardRequest - 


<a name="method_setSkrResponseFormat" class="anchor"></a>
#### public setSkrResponseFormat() : \YooKassaPayout\Request\SynonymCardRequest

```php
public setSkrResponseFormat(string $skrResponseFormat = self::FORMAT_JSON) : \YooKassaPayout\Request\SynonymCardRequest
```

**Summary**

Устанавливает формат ответа на запрос

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | skrResponseFormat  | Формат ответа на запрос |

**Returns:** \YooKassaPayout\Request\SynonymCardRequest - 


<a name="method_setSkrSuccessUrl" class="anchor"></a>
#### public setSkrSuccessUrl() : \YooKassaPayout\Request\SynonymCardRequest

```php
public setSkrSuccessUrl(string $skrSuccessUrl) : \YooKassaPayout\Request\SynonymCardRequest
```

**Summary**

Устанавливает адрес для перенаправления при успехе

**Details:**
* Inherited From: [\YooKassaPayout\Request\SynonymCardRequest](../classes/YooKassaPayout-Request-SynonymCardRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | skrSuccessUrl  | Адрес для перенаправления при успехе |

**Returns:** \YooKassaPayout\Request\SynonymCardRequest - 



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