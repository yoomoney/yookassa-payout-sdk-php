# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\HttpVerb
### Namespace: [\YooKassaPayout\Common](../namespaces/yookassapayout-common.md)
---
**Summary:**

Класс описывает возможные типы HTTP запросов

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [GET](../classes/YooKassaPayout-Common-HttpVerb.md#constant_GET) |  |  |
| public | [POST](../classes/YooKassaPayout-Common-HttpVerb.md#constant_POST) |  |  |
| public | [PATCH](../classes/YooKassaPayout-Common-HttpVerb.md#constant_PATCH) |  |  |
| public | [HEAD](../classes/YooKassaPayout-Common-HttpVerb.md#constant_HEAD) |  |  |
| public | [OPTIONS](../classes/YooKassaPayout-Common-HttpVerb.md#constant_OPTIONS) |  |  |
| public | [PUT](../classes/YooKassaPayout-Common-HttpVerb.md#constant_PUT) |  |  |
| public | [DELETE](../classes/YooKassaPayout-Common-HttpVerb.md#constant_DELETE) |  |  |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassaPayout-Common-HttpVerb.md#property_validValues) |  | Массив принимаемых enum'ом значений |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassaPayout-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassaPayout-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassaPayout-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Common/HttpVerb.php](../../lib/Common/HttpVerb.php)
* Package: YooKassaPayout
* Class Hierarchy: 
  * [\YooKassaPayout\Common\AbstractEnum](../classes/YooKassaPayout-Common-AbstractEnum.md)
  * \YooKassaPayout\Common\HttpVerb
---
## Constants
<a name="constant_GET" class="anchor"></a>
###### GET
```php
GET = 'GET'
```


<a name="constant_POST" class="anchor"></a>
###### POST
```php
POST = 'POST'
```


<a name="constant_PATCH" class="anchor"></a>
###### PATCH
```php
PATCH = 'PATCH'
```


<a name="constant_HEAD" class="anchor"></a>
###### HEAD
```php
HEAD = 'HEAD'
```


<a name="constant_OPTIONS" class="anchor"></a>
###### OPTIONS
```php
OPTIONS = 'OPTIONS'
```


<a name="constant_PUT" class="anchor"></a>
###### PUT
```php
PUT = 'PUT'
```


<a name="constant_DELETE" class="anchor"></a>
###### DELETE
```php
DELETE = 'DELETE'
```


---
## Properties
<a name="property_validValues"></a>
#### protected $validValues : array
---
**Summary**

Массив принимаемых enum'ом значений

**Type:** <a href="../array"><abbr title="array">array</abbr></a>

**Details:**



---
## Methods
<a name="method_getEnabledValues" class="anchor"></a>
#### public getEnabledValues() : string[]

```php
static public getEnabledValues() : string[]
```

**Summary**

Возвращает значения в enum'е значения которых разрешены

**Details:**
* Inherited From: [\YooKassaPayout\Common\AbstractEnum](../classes/YooKassaPayout-Common-AbstractEnum.md)

**Returns:** string[] - Массив разрешённых значений


<a name="method_getValidValues" class="anchor"></a>
#### public getValidValues() : array

```php
static public getValidValues() : array
```

**Summary**

Возвращает все значения в enum'e

**Details:**
* Inherited From: [\YooKassaPayout\Common\AbstractEnum](../classes/YooKassaPayout-Common-AbstractEnum.md)

**Returns:** array - Массив значений в перечислении


<a name="method_valueExists" class="anchor"></a>
#### public valueExists() : bool

```php
static public valueExists(mixed $value) : bool
```

**Summary**

Проверяет наличие значения в enum'e

**Details:**
* Inherited From: [\YooKassaPayout\Common\AbstractEnum](../classes/YooKassaPayout-Common-AbstractEnum.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Проверяемое значение |

**Returns:** bool - True если значение имеется, false если нет



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