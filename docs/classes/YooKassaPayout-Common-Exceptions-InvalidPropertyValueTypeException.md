# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException
### Namespace: [\YooKassaPayout\Common\Exceptions](../namespaces/yookassapayout-common-exceptions.md)
---
**Summary:**

Class InvalidPropertyValueTypeException

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyValueTypeException.md#method___construct) |  | InvalidPropertyValueTypeException constructor. |
| public | [getProperty()](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyException.md#method_getProperty) |  | Возвращает название свойства |
| public | [getType()](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyValueTypeException.md#method_getType) |  | Возвращает тип данных |
---
### Details
* File: [lib/Common/Exceptions/InvalidPropertyValueTypeException.php](../../lib/Common/Exceptions/InvalidPropertyValueTypeException.php)
* Package: YooKassaPayout
* Class Hierarchy:  
  * [\InvalidArgumentException](\InvalidArgumentException)
  * [\YooKassaPayout\Common\Exceptions\InvalidPropertyException](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyException.md)
  * \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException

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
* Inherited From: [\YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyValueTypeException.md)
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


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип данных

**Details:**
* Inherited From: [\YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException](../classes/YooKassaPayout-Common-Exceptions-InvalidPropertyValueTypeException.md)

**Returns:** string - Тип данных



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