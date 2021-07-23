# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Model\DstAccount
### Namespace: [\YooKassaPayout\Model](../namespaces/yookassapayout-model.md)
---
**Summary:**

DstAccount - Идентификатор получателя перевода. Зависит от того, куда вы отправляете перевод.

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [BANK_ACCOUNT](../classes/YooKassaPayout-Model-DstAccount.md#constant_BANK_ACCOUNT) |  | Перевод на банковскую карту |
| public | [BANK_CARD](../classes/YooKassaPayout-Model-DstAccount.md#constant_BANK_CARD) |  | Перевод на банковский счет |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$validValues](../classes/YooKassaPayout-Model-DstAccount.md#property_validValues) |  | Массив принимаемых enum'ом значений |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getEnabledValues()](../classes/YooKassaPayout-Common-AbstractEnum.md#method_getEnabledValues) |  | Возвращает значения в enum'е значения которых разрешены |
| public | [getValidValues()](../classes/YooKassaPayout-Common-AbstractEnum.md#method_getValidValues) |  | Возвращает все значения в enum'e |
| public | [valueExists()](../classes/YooKassaPayout-Common-AbstractEnum.md#method_valueExists) |  | Проверяет наличие значения в enum'e |
---
### Details
* File: [lib/Model/DstAccount.php](../../lib/Model/DstAccount.php)
* Package: YooKassaPayout
* Class Hierarchy: 
  * [\YooKassaPayout\Common\AbstractEnum](../classes/YooKassaPayout-Common-AbstractEnum.md)
  * \YooKassaPayout\Model\DstAccount
---
## Constants
<a name="constant_BANK_ACCOUNT" class="anchor"></a>
###### BANK_ACCOUNT
Перевод на банковскую карту

```php
BANK_ACCOUNT = '2570066962077'
```


<a name="constant_BANK_CARD" class="anchor"></a>
###### BANK_CARD
Перевод на банковский счет

```php
BANK_CARD = '25700130535186'
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

This document was automatically generated from source code comments on 2021-07-23 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney