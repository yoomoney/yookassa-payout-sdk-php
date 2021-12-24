# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Exceptions\InvalidPropertyValueException
### Namespace: [\YooKassaPayout\Common\Exceptions](../namespaces/yookassapayout-common-exceptions.md)
---
**Summary:**

Class InvalidPropertyValueException

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyValueException.md#method___construct) |  | InvalidPropertyValueTypeException constructor. |
| public | [getProperty()](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyException.md#method_getProperty) |  | Возвращает название свойства |
| public | [getValue()](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyValueException.md#method_getValue) |  | Возвращает значение свойства |
---
### Details
* File: [lib/Common/Exceptions/InvalidPropertyValueException.php](../../lib/Common/Exceptions/InvalidPropertyValueException.php)
* Package: YooKassaPayout
* Class Hierarchy:  
  * [\InvalidArgumentException](\InvalidArgumentException)
  * [\YooKassaPayout\Common\Exceptions\InvalidPropertyException](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyException.md)
  * \YooKassaPayout\Common\Exceptions\InvalidPropertyValueException

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string $message = '', int $code, string $property = '', mixed $value = null) : mixed
```

**Summary**

InvalidPropertyValueTypeException constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\InvalidPropertyValueException](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyValueException.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | message  | Сообщение об ошибке |
| <code lang="php">int</code> | code  | Код ошибки |
| <code lang="php">string</code> | property  | Название свойства |
| <code lang="php">mixed</code> | value  | Значение свойства |

**Returns:** mixed - 


<a name="method_getProperty" class="anchor"></a>
#### public getProperty() : string

```php
public getProperty() : string
```

**Summary**

Возвращает название свойства

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\InvalidPropertyException](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyException.md)

**Returns:** string - Название свойства


<a name="method_getValue" class="anchor"></a>
#### public getValue() : mixed

```php
public getValue() : mixed
```

**Summary**

Возвращает значение свойства

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\InvalidPropertyValueException](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyValueException.md)

**Returns:** mixed - Значение свойства



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