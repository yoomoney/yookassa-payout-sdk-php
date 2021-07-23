# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Helpers\TypeCast
### Namespace: [\YooKassaPayout\Common\Helpers](../namespaces/yookassapayout-common-helpers.md)
---
**Summary:**

Класс хэлпер для преобразования типов значений

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [canCastToBoolean()](../classes/YooKassaPayout-Common-Helpers-TypeCast.md#method_canCastToBoolean) |  | Проверяет можно ли преобразовать переданное значение в буллево значение |
| public | [canCastToDateTime()](../classes/YooKassaPayout-Common-Helpers-TypeCast.md#method_canCastToDateTime) |  | Проверяет, можно ли преобразовать переданное значение в объект даты-времени |
| public | [canCastToEnumString()](../classes/YooKassaPayout-Common-Helpers-TypeCast.md#method_canCastToEnumString) |  | Проверяет можно ли преобразовать переданное значение в строку из перечисления |
| public | [canCastToString()](../classes/YooKassaPayout-Common-Helpers-TypeCast.md#method_canCastToString) |  | Проверяет может ли переданное значение быть преобразовано в строку |
| public | [castToDateTime()](../classes/YooKassaPayout-Common-Helpers-TypeCast.md#method_castToDateTime) |  | Преобразует переданне значение в объект типа \DateTime |
---
### Details
* File: [lib/Common/Helpers/TypeCast.php](../../lib/Common/Helpers/TypeCast.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\Helpers\TypeCast

---
## Methods
<a name="method_canCastToBoolean" class="anchor"></a>
#### public canCastToBoolean() : bool

```php
static public canCastToBoolean(mixed $value) : bool
```

**Summary**

Проверяет можно ли преобразовать переданное значение в буллево значение

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\TypeCast](../classes/YooKassaPayout-Common-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Проверяемое значение |

**Returns:** bool - True если значение качтится в bool, false если нет


<a name="method_canCastToDateTime" class="anchor"></a>
#### public canCastToDateTime() : bool

```php
static public canCastToDateTime(mixed $value) : bool
```

**Summary**

Проверяет, можно ли преобразовать переданное значение в объект даты-времени

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\TypeCast](../classes/YooKassaPayout-Common-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Провеяремое значение |

**Returns:** bool - True если значение можно преобразовать в объект даты, false если нет


<a name="method_canCastToEnumString" class="anchor"></a>
#### public canCastToEnumString() : bool

```php
static public canCastToEnumString(mixed $value) : bool
```

**Summary**

Проверяет можно ли преобразовать переданное значение в строку из перечисления

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\TypeCast](../classes/YooKassaPayout-Common-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Проверяемое значение |

**Returns:** bool - True если значение преобразовать в строку можно, false если нет


<a name="method_canCastToString" class="anchor"></a>
#### public canCastToString() : bool

```php
static public canCastToString(mixed $value) : bool
```

**Summary**

Проверяет может ли переданное значение быть преобразовано в строку

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\TypeCast](../classes/YooKassaPayout-Common-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | value  | Проверяемое значение |

**Returns:** bool - True если значение преобразовать в строку можно, false если нет


<a name="method_castToDateTime" class="anchor"></a>
#### public castToDateTime() : \DateTime|null

```php
static public castToDateTime(string|int|\DateTime $value) : \DateTime|null
```

**Summary**

Преобразует переданне значение в объект типа \DateTime

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\TypeCast](../classes/YooKassaPayout-Common-Helpers-TypeCast.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR int OR \DateTime</code> | value  | Преобразуемое значение |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если произошла ошибка работы с датой |

**Returns:** \DateTime|null - Объект типа \DateTime или null если при парсинг даты не удался



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