# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Exceptions\JsonException
### Namespace: [\YooKassaPayout\Common\Exceptions](../namespaces/yookassapayout-common-exceptions.md)
---
**Summary:**

Class JsonException

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$errorLabels](../classes/YooKassaPayout-Common-Exceptions-JsonException.md#property_errorLabels) |  | Маппинг кодов ошибок и их текстового представления |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Common-Exceptions-JsonException.md#method___construct) |  | JsonException constructor. |
---
### Details
* File: [lib/Common/Exceptions/JsonException.php](../../lib/Common/Exceptions/JsonException.php)
* Package: YooKassaPayout
* Class Hierarchy: 
  * [\UnexpectedValueException](\UnexpectedValueException)
  * \YooKassaPayout\Common\Exceptions\JsonException
---
## Properties
<a name="property_errorLabels"></a>
#### public $errorLabels : string[]
---
**Summary**

Маппинг кодов ошибок и их текстового представления

**Type:** <a href="../string[]"><abbr title="string[]">string[]</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string $message = '', int $code, null $previous = null) : mixed
```

**Summary**

JsonException constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\JsonException](../classes/YooKassaPayout-Common-Exceptions-JsonException.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  | Текст ошибки |
| <code lang="php">int</code> | code  | Код ошибки |
| <code lang="php">null</code> | previous  | Предыдущее исключение |

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