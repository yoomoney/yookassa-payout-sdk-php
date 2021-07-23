# [YooKassa Payout API SDK](../home.md)

# Abstract Class: \YooKassaPayout\Request\AbstractRequest
### Namespace: [\YooKassaPayout\Request](../namespaces/yookassapayout-request.md)
---
**Summary:**

Абстрактный класс запроса

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$clientOrderId](../classes/YooKassaPayout-Request-AbstractRequest.md#property_clientOrderId) |  | Идентификатор операции |
| protected | [$currentObject](../classes/YooKassaPayout-Request-AbstractRequest.md#property_currentObject) |  | Инстанс собираемого запроса |
| protected | [$formatType](../classes/YooKassaPayout-Request-AbstractRequest.md#property_formatType) |  | Формат запроса |
| protected | [$requestDT](../classes/YooKassaPayout-Request-AbstractRequest.md#property_requestDT) |  | Дата и время формирования запроса операции на стороне и по часам контрагента. |
| protected | [$requestName](../classes/YooKassaPayout-Request-AbstractRequest.md#property_requestName) |  | Тип запроса |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Request-AbstractRequest.md#method___construct) |  | AbstractRequest constructor. |
| public | [clearValidationError()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_clearValidationError) |  | Очищает статус валидации текущего запроса |
| public | [getClientOrderId()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getClientOrderId) |  | Возвращает идентификатор операции |
| public | [getFormatType()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getFormatType) |  | Возвращает формат запроса xml|json |
| public | [getLastValidationError()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getLastValidationError) |  | Возвращает последнюю ошибку валидации |
| public | [getRequestDT()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getRequestDT) |  | Возвращает установленные дату и время запроса |
| public | [getRequestName()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getRequestName) |  | Возвращает тип запроса |
| public | [getSerializer()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getSerializer) |  | Возвращает объект для преобразования запроса в массив |
| public | [setClientOrderId()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setClientOrderId) |  | Устанавливает идентификатор операции |
| public | [setFormatType()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setFormatType) |  | Устанавливает формат запроса xml|json |
| public | [setRequestDT()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setRequestDT) |  | Устанавливает дату и время запроса |
| public | [setRequestName()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setRequestName) |  | Устанавливает тип запроса |
| public | [validate()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_validate) |  | Валидирует текущий запрос, проверяет все ли нужные свойства установлены |
| protected | [setValidationError()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setValidationError) |  | Устанавливает ошибку валидации |
---
### Details
* File: [lib/Request/AbstractRequest.php](../../lib/Request/AbstractRequest.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Request\AbstractRequest
---
## Properties
<a name="property_clientOrderId"></a>
#### protected $clientOrderId : string
---
**Summary**

Идентификатор операции

***Description***

Должен быть уникальным для контрагента на протяжении всей истории операций.
Рекомендуемые значения: целое положительное число в десятичной системе счисления.

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_currentObject"></a>
#### protected $currentObject : \YooKassaPayout\Request\AbstractRequest
---
**Summary**

Инстанс собираемого запроса

**Type:** <a href="../classes/YooKassaPayout-Request-AbstractRequest.html"><abbr title="\YooKassaPayout\Request\AbstractRequest">AbstractRequest</abbr></a>

**Details:**


<a name="property_formatType"></a>
#### protected $formatType : \YooKassaPayout\Model\FormatType
---
**Summary**

Формат запроса

**Type:** <a href="../classes/YooKassaPayout-Model-FormatType.html"><abbr title="\YooKassaPayout\Model\FormatType">FormatType</abbr></a>

**Details:**


<a name="property_requestDT"></a>
#### protected $requestDT : \DateTime
---
**Summary**

Дата и время формирования запроса операции на стороне и по часам контрагента.

**Type:** \DateTime

**Details:**


<a name="property_requestName"></a>
#### protected $requestName : string
---
**Summary**

Тип запроса

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string|null $clientOrderId = null) : mixed
```

**Summary**

AbstractRequest constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | clientOrderId  | Идентификатор операции |

**Returns:** mixed - 


<a name="method_clearValidationError" class="anchor"></a>
#### public clearValidationError() : mixed

```php
public clearValidationError() : mixed
```

**Summary**

Очищает статус валидации текущего запроса

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)

**Returns:** mixed - 


<a name="method_getClientOrderId" class="anchor"></a>
#### public getClientOrderId() : string

```php
public getClientOrderId() : string
```

**Summary**

Возвращает идентификатор операции

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)

**Returns:** string - Идентификатор операции


<a name="method_getFormatType" class="anchor"></a>
#### public getFormatType() : \YooKassaPayout\Model\FormatType

```php
public getFormatType() : \YooKassaPayout\Model\FormatType
```

**Summary**

Возвращает формат запроса xml|json

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)

**Returns:** \YooKassaPayout\Model\FormatType - Формат запроса


<a name="method_getLastValidationError" class="anchor"></a>
#### public getLastValidationError() : string

```php
public getLastValidationError() : string
```

**Summary**

Возвращает последнюю ошибку валидации

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)

**Returns:** string - Последняя произошедшая ошибка валидации


<a name="method_getRequestDT" class="anchor"></a>
#### public getRequestDT() : \DateTime|string

```php
public getRequestDT() : \DateTime|string
```

**Summary**

Возвращает установленные дату и время запроса

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)

**Returns:** \DateTime|string - Дата и время запроса


<a name="method_getRequestName" class="anchor"></a>
#### public getRequestName() : string

```php
public getRequestName() : string
```

**Summary**

Возвращает тип запроса

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)

**Returns:** string - Тип запроса


<a name="method_getSerializer" class="anchor"></a>
#### public getSerializer() : \YooKassaPayout\Request\Serializers\AbstractRequestSerializer

```php
abstract public getSerializer() : \YooKassaPayout\Request\Serializers\AbstractRequestSerializer
```

**Summary**

Возвращает объект для преобразования запроса в массив

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)

**Returns:** \YooKassaPayout\Request\Serializers\AbstractRequestSerializer - Объект для преобразования запроса в массив


<a name="method_setClientOrderId" class="anchor"></a>
#### public setClientOrderId() : $this

```php
public setClientOrderId(string $clientOrderId) : $this
```

**Summary**

Устанавливает идентификатор операции

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | clientOrderId  | Идентификатор операции |

**Returns:** $this - 


<a name="method_setFormatType" class="anchor"></a>
#### public setFormatType() : $this

```php
public setFormatType(\YooKassaPayout\Model\FormatType $type) : $this
```

**Summary**

Устанавливает формат запроса xml|json

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Model\FormatType</code> | type  | Формат запроса |

**Returns:** $this - 


<a name="method_setRequestDT" class="anchor"></a>
#### public setRequestDT() : $this

```php
public setRequestDT(string $requestDT) : $this
```

**Summary**

Устанавливает дату и время запроса

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | requestDT  | Дата и время запроса |

**Returns:** $this - 


<a name="method_setRequestName" class="anchor"></a>
#### public setRequestName() : $this

```php
public setRequestName(string $value) : $this
```

**Summary**

Устанавливает тип запроса

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип запроса |

**Returns:** $this - 


<a name="method_validate" class="anchor"></a>
#### public validate() : bool

```php
abstract public validate() : bool
```

**Summary**

Валидирует текущий запрос, проверяет все ли нужные свойства установлены

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)

**Returns:** bool - True если запрос валиден, false если нет


<a name="method_setValidationError" class="anchor"></a>
#### protected setValidationError() : mixed

```php
protected setValidationError(string $value) : mixed
```

**Summary**

Устанавливает ошибку валидации

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Ошибка, произошедшая при валидации объекта |

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