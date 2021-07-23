# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Helpers\DateParser
### Namespace: [\YooKassaPayout\Common\Helpers](../namespaces/yookassapayout-common-helpers.md)
---
**Summary:**

Класс для разбора даты

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [parseDateToArray()](../classes/YooKassaPayout-Common-Helpers-DateParser.md#method_parseDateToArray) |  | Разбивает дату на части |
| public | [parseDateToIssueDate()](../classes/YooKassaPayout-Common-Helpers-DateParser.md#method_parseDateToIssueDate) |  | Возвращает объект для работы с датой |
---
### Details
* File: [lib/Common/Helpers/DateParser.php](../../lib/Common/Helpers/DateParser.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\Helpers\DateParser

---
## Methods
<a name="method_parseDateToArray" class="anchor"></a>
#### public parseDateToArray() : array

```php
static public parseDateToArray(string $date) : array
```

**Summary**

Разбивает дату на части

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\DateParser](../classes/YooKassaPayout-Common-Helpers-DateParser.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | date  | Дата в формате дд.мм.гггг |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если произошла ошибка работы с датой |

**Returns:** array - Массив с частями даты


<a name="method_parseDateToIssueDate" class="anchor"></a>
#### public parseDateToIssueDate() : \YooKassaPayout\Model\IssueDate

```php
static public parseDateToIssueDate(string $date) : \YooKassaPayout\Model\IssueDate
```

**Summary**

Возвращает объект для работы с датой

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\DateParser](../classes/YooKassaPayout-Common-Helpers-DateParser.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | date  | Дата в формате дд.мм.гггг |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если произошла ошибка работы с датой |

**Returns:** \YooKassaPayout\Model\IssueDate - Объект для работы с датой



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