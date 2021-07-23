# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Model\IssueDate
### Namespace: [\YooKassaPayout\Model](../namespaces/yookassapayout-model.md)
---
**Summary:**

Класс для работы с датой

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$day](../classes/YooKassaPayout-Model-IssueDate.md#property_day) |  | День |
| protected | [$fullDate](../classes/YooKassaPayout-Model-IssueDate.md#property_fullDate) |  | Полная дата в формате дд.мм.гггг |
| protected | [$month](../classes/YooKassaPayout-Model-IssueDate.md#property_month) |  | Месяц |
| protected | [$year](../classes/YooKassaPayout-Model-IssueDate.md#property_year) |  | Год |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Model-IssueDate.md#method___construct) |  | IssueDate constructor. |
| public | [getDay()](../classes/YooKassaPayout-Model-IssueDate.md#method_getDay) |  | Возвращает день |
| public | [getFullDate()](../classes/YooKassaPayout-Model-IssueDate.md#method_getFullDate) |  | Возвращает полную дату в формате дд.мм.гггг |
| public | [getMonth()](../classes/YooKassaPayout-Model-IssueDate.md#method_getMonth) |  | Возвращает месяц |
| public | [getYear()](../classes/YooKassaPayout-Model-IssueDate.md#method_getYear) |  | Возвращает год |
| public | [setDay()](../classes/YooKassaPayout-Model-IssueDate.md#method_setDay) |  | Устанавливает день |
| public | [setFullDate()](../classes/YooKassaPayout-Model-IssueDate.md#method_setFullDate) |  | Устанавливает полную дату в формате дд.мм.гггг |
| public | [setMonth()](../classes/YooKassaPayout-Model-IssueDate.md#method_setMonth) |  | Устанавливает месяц |
| public | [setYear()](../classes/YooKassaPayout-Model-IssueDate.md#method_setYear) |  | Устанавливает год |
---
### Details
* File: [lib/Model/IssueDate.php](../../lib/Model/IssueDate.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Model\IssueDate
---
## Properties
<a name="property_day"></a>
#### protected $day : string
---
**Summary**

День

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fullDate"></a>
#### protected $fullDate : string
---
**Summary**

Полная дата в формате дд.мм.гггг

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_month"></a>
#### protected $month : string
---
**Summary**

Месяц

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_year"></a>
#### protected $year : string
---
**Summary**

Год

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string $fullDate, string $year, string $month, string $day) : mixed
```

**Summary**

IssueDate constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Model\IssueDate](../classes/YooKassaPayout-Model-IssueDate.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | fullDate  | Полная дата в формате дд.мм.гггг |
| <code lang="php">string</code> | year  | Год |
| <code lang="php">string</code> | month  | Месяц |
| <code lang="php">string</code> | day  | День |

**Returns:** mixed - 


<a name="method_getDay" class="anchor"></a>
#### public getDay() : string

```php
public getDay() : string
```

**Summary**

Возвращает день

**Details:**
* Inherited From: [\YooKassaPayout\Model\IssueDate](../classes/YooKassaPayout-Model-IssueDate.md)

**Returns:** string - День


<a name="method_getFullDate" class="anchor"></a>
#### public getFullDate() : string

```php
public getFullDate() : string
```

**Summary**

Возвращает полную дату в формате дд.мм.гггг

**Details:**
* Inherited From: [\YooKassaPayout\Model\IssueDate](../classes/YooKassaPayout-Model-IssueDate.md)

**Returns:** string - Полная дата


<a name="method_getMonth" class="anchor"></a>
#### public getMonth() : string

```php
public getMonth() : string
```

**Summary**

Возвращает месяц

**Details:**
* Inherited From: [\YooKassaPayout\Model\IssueDate](../classes/YooKassaPayout-Model-IssueDate.md)

**Returns:** string - Месяц


<a name="method_getYear" class="anchor"></a>
#### public getYear() : string

```php
public getYear() : string
```

**Summary**

Возвращает год

**Details:**
* Inherited From: [\YooKassaPayout\Model\IssueDate](../classes/YooKassaPayout-Model-IssueDate.md)

**Returns:** string - Год


<a name="method_setDay" class="anchor"></a>
#### public setDay() : mixed

```php
public setDay(string $day) : mixed
```

**Summary**

Устанавливает день

**Details:**
* Inherited From: [\YooKassaPayout\Model\IssueDate](../classes/YooKassaPayout-Model-IssueDate.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | day  | День |

**Returns:** mixed - 


<a name="method_setFullDate" class="anchor"></a>
#### public setFullDate() : mixed

```php
public setFullDate(string $fullDate) : mixed
```

**Summary**

Устанавливает полную дату в формате дд.мм.гггг

**Details:**
* Inherited From: [\YooKassaPayout\Model\IssueDate](../classes/YooKassaPayout-Model-IssueDate.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | fullDate  | Полная дата |

**Returns:** mixed - 


<a name="method_setMonth" class="anchor"></a>
#### public setMonth() : mixed

```php
public setMonth(string $month) : mixed
```

**Summary**

Устанавливает месяц

**Details:**
* Inherited From: [\YooKassaPayout\Model\IssueDate](../classes/YooKassaPayout-Model-IssueDate.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | month  | Месяц |

**Returns:** mixed - 


<a name="method_setYear" class="anchor"></a>
#### public setYear() : mixed

```php
public setYear(string $year) : mixed
```

**Summary**

Устанавливает год

**Details:**
* Inherited From: [\YooKassaPayout\Model\IssueDate](../classes/YooKassaPayout-Model-IssueDate.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | year  | Год |

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

This document was automatically generated from source code comments on 2021-07-23 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney