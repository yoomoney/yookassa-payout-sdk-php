# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\ResponseSynonymCard
### Namespace: [\YooKassaPayout\Common](../namespaces/yookassapayout-common.md)
---
**Summary:**

Класс объекта ответа, возвращаемого API при запросе синонима карты

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$reason](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#property_reason) |  | Результат обработки данных |
| protected | [$skrCardBin](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#property_skrCardBin) |  | Первые 6 цифр карты |
| protected | [$skrCardLast4](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#property_skrCardLast4) |  | Последние 4 цифры карты |
| protected | [$skrDestinationCardCountryCode](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#property_skrDestinationCardCountryCode) |  | Цифровой код страны выпуска карты |
| protected | [$skrDestinationCardPanmask](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#property_skrDestinationCardPanmask) |  | Маска банковской карты |
| protected | [$skrDestinationCardProductCode](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#property_skrDestinationCardProductCode) |  | Код карточного продукта |
| protected | [$skrDestinationCardSynonim](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#property_skrDestinationCardSynonim) |  | Синоним банковской карты |
| protected | [$skrDestinationCardType](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#property_skrDestinationCardType) |  | Тип банковской системы карты |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method___construct) |  | ResponseSynonymCard constructor. |
| public | [getReason()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method_getReason) |  | Возвращает результат обработки данных |
| public | [getSkrCardBin()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method_getSkrCardBin) |  | Возвращает первые 6 цифр карты |
| public | [getSkrCardLast4()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method_getSkrCardLast4) |  | Возвращает последние 4 цифры карты |
| public | [getSkrDestinationCardCountryCode()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method_getSkrDestinationCardCountryCode) |  | Возвращает цифровой код страны выпуска карты |
| public | [getSkrDestinationCardPanmask()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method_getSkrDestinationCardPanmask) |  | Возвращает маску банковской карты |
| public | [getSkrDestinationCardProductCode()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method_getSkrDestinationCardProductCode) |  | Возвращает код карточного продукта |
| public | [getSkrDestinationCardSynonim()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method_getSkrDestinationCardSynonim) |  | Возвращает синоним банковской карты |
| public | [getSkrDestinationCardType()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method_getSkrDestinationCardType) |  | Возвращает тип банковской системы карты |
| protected | [buildByPropertiesArray()](../classes/YooKassaPayout-Common-ResponseSynonymCard.md#method_buildByPropertiesArray) |  | Заполняет свойства объекта из массива |
---
### Details
* File: [lib/Common/ResponseSynonymCard.php](../../lib/Common/ResponseSynonymCard.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\ResponseSynonymCard
---
## Properties
<a name="property_reason"></a>
#### protected $reason : string
---
**Summary**

Результат обработки данных

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrCardBin"></a>
#### protected $skrCardBin : string
---
**Summary**

Первые 6 цифр карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrCardLast4"></a>
#### protected $skrCardLast4 : string
---
**Summary**

Последние 4 цифры карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrDestinationCardCountryCode"></a>
#### protected $skrDestinationCardCountryCode : string
---
**Summary**

Цифровой код страны выпуска карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrDestinationCardPanmask"></a>
#### protected $skrDestinationCardPanmask : string
---
**Summary**

Маска банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrDestinationCardProductCode"></a>
#### protected $skrDestinationCardProductCode : string
---
**Summary**

Код карточного продукта

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrDestinationCardSynonim"></a>
#### protected $skrDestinationCardSynonim : string
---
**Summary**

Синоним банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_skrDestinationCardType"></a>
#### protected $skrDestinationCardType : string
---
**Summary**

Тип банковской системы карты

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

ResponseSynonymCard constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | body  | Строка JSON |

**Returns:** mixed - 


<a name="method_getReason" class="anchor"></a>
#### public getReason() : string

```php
public getReason() : string
```

**Summary**

Возвращает результат обработки данных

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)

**Returns:** string - Результат обработки данных


<a name="method_getSkrCardBin" class="anchor"></a>
#### public getSkrCardBin() : string

```php
public getSkrCardBin() : string
```

**Summary**

Возвращает первые 6 цифр карты

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)

**Returns:** string - Первые 6 цифр карты


<a name="method_getSkrCardLast4" class="anchor"></a>
#### public getSkrCardLast4() : string

```php
public getSkrCardLast4() : string
```

**Summary**

Возвращает последние 4 цифры карты

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)

**Returns:** string - Последние 4 цифры карты


<a name="method_getSkrDestinationCardCountryCode" class="anchor"></a>
#### public getSkrDestinationCardCountryCode() : string

```php
public getSkrDestinationCardCountryCode() : string
```

**Summary**

Возвращает цифровой код страны выпуска карты

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)

**Returns:** string - Цифровой код страны выпуска карты


<a name="method_getSkrDestinationCardPanmask" class="anchor"></a>
#### public getSkrDestinationCardPanmask() : string

```php
public getSkrDestinationCardPanmask() : string
```

**Summary**

Возвращает маску банковской карты

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)

**Returns:** string - Маска банковской карты


<a name="method_getSkrDestinationCardProductCode" class="anchor"></a>
#### public getSkrDestinationCardProductCode() : string

```php
public getSkrDestinationCardProductCode() : string
```

**Summary**

Возвращает код карточного продукта

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)

**Returns:** string - Код карточного продукта


<a name="method_getSkrDestinationCardSynonim" class="anchor"></a>
#### public getSkrDestinationCardSynonim() : string

```php
public getSkrDestinationCardSynonim() : string
```

**Summary**

Возвращает синоним банковской карты

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)

**Returns:** string - Синоним банковской карты


<a name="method_getSkrDestinationCardType" class="anchor"></a>
#### public getSkrDestinationCardType() : string

```php
public getSkrDestinationCardType() : string
```

**Summary**

Возвращает тип банковской системы карты

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)

**Returns:** string - Тип банковской системы карты


<a name="method_buildByPropertiesArray" class="anchor"></a>
#### protected buildByPropertiesArray() : mixed

```php
protected buildByPropertiesArray(array $properties) : mixed
```

**Summary**

Заполняет свойства объекта из массива

**Details:**
* Inherited From: [\YooKassaPayout\Common\ResponseSynonymCard](../classes/YooKassaPayout-Common-ResponseSynonymCard.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | properties  | Массив параметров карты |

**Returns:** mixed - 



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