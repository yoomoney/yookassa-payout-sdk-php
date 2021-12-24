# [YooKassa Payout API SDK](../home.md)

# Abstract Class: \YooKassaPayout\Common\AbstractEnum
### Namespace: [\YooKassaPayout\Common](../namespaces/yookassapayout-common.md)
---
**Summary:**

Class AbstractEnum

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassaPayout-Common-AbstractEnum.md#property_validValues) |  | Массив принимаемых enum'ом значений |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassaPayout-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassaPayout-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassaPayout-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Common/AbstractEnum.php](../../lib/Common/AbstractEnum.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\AbstractEnum
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

This document was automatically generated from source code comments on 2021-12-24 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney