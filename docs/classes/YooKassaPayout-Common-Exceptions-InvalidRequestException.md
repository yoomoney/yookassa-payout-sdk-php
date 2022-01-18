# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Exceptions\InvalidRequestException
### Namespace: [\YooKassaPayout\Common\Exceptions](../namespaces/yookassapayout-common-exceptions.md)
---
**Summary:**

Class InvalidRequestException

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Common-Exceptions-InvalidRequestException.md#method___construct) |  | InvalidRequestException constructor. |
| public | [getRequestObject()](../classes/YooKassaPayout-Common-Exceptions-InvalidRequestException.md#method_getRequestObject) |  | Возвращает объект запроса |
---
### Details
* File: [lib/Common/Exceptions/InvalidRequestException.php](../../lib/Common/Exceptions/InvalidRequestException.php)
* Package: YooKassaPayout
* Class Hierarchy: 
  * [\RuntimeException](\RuntimeException)
  * \YooKassaPayout\Common\Exceptions\InvalidRequestException

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(\YooKassaPayout\Request\AbstractRequest|string $error, int $code, null $previous = null) : mixed
```

**Summary**

InvalidRequestException constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\InvalidRequestException](../classes/YooKassaPayout-Common-Exceptions-InvalidRequestException.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Request\AbstractRequest OR string</code> | error  | Объект запроса |
| <code lang="php">int</code> | code  | Код ошибки |
| <code lang="php">null</code> | previous  | Предыдущее исключение |

**Returns:** mixed - 


<a name="method_getRequestObject" class="anchor"></a>
#### public getRequestObject() : \YooKassaPayout\Request\AbstractRequest|null

```php
public getRequestObject() : \YooKassaPayout\Request\AbstractRequest|null
```

**Summary**

Возвращает объект запроса

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\InvalidRequestException](../classes/YooKassaPayout-Common-Exceptions-InvalidRequestException.md)

**Returns:** \YooKassaPayout\Request\AbstractRequest|null - Объект запроса



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