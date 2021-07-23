# [YooKassa Payout API SDK](../home.md)

# Abstract Class: \YooKassaPayout\Common\Helpers\ErrorConverter
### Namespace: [\YooKassaPayout\Common\Helpers](../namespaces/yookassapayout-common-helpers.md)
---
**Summary:**

Класс для конвертации ошибок в человекопонятный вид

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [UNKNOWN_ERROR_PATTERN](../classes/YooKassaPayout-Common-Helpers-ErrorConverter.md#constant_UNKNOWN_ERROR_PATTERN) |  | Шаблон неизвестной ошибки |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$errors](../classes/YooKassaPayout-Common-Helpers-ErrorConverter.md#property_errors) |  | Массив возможных ошибок |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getErrorMessageByCode()](../classes/YooKassaPayout-Common-Helpers-ErrorConverter.md#method_getErrorMessageByCode) |  | Возвращает строку ошибки по коду |
---
### Details
* File: [lib/Common/Helpers/ErrorConverter.php](../../lib/Common/Helpers/ErrorConverter.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\Helpers\ErrorConverter
---
## Constants
<a name="constant_UNKNOWN_ERROR_PATTERN" class="anchor"></a>
###### UNKNOWN_ERROR_PATTERN
Шаблон неизвестной ошибки

```php
UNKNOWN_ERROR_PATTERN = 'Unknown error #%s'
```


---
## Properties
<a name="property_errors"></a>
#### protected $errors : string[]
---
**Summary**

Массив возможных ошибок

**Type:** <a href="../string[]"><abbr title="string[]">string[]</abbr></a>

**Details:**



---
## Methods
<a name="method_getErrorMessageByCode" class="anchor"></a>
#### public getErrorMessageByCode() : string

```php
static public getErrorMessageByCode(int $code) : string
```

**Summary**

Возвращает строку ошибки по коду

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\ErrorConverter](../classes/YooKassaPayout-Common-Helpers-ErrorConverter.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | code  | Код ошибки |

**Returns:** string - Строка ошибки



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