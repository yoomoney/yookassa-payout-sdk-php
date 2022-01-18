# [YooKassa Payout API SDK](../home.md)

# Abstract Class: \YooKassaPayout\Request\Builders\AbstractRequestBuilder
### Namespace: [\YooKassaPayout\Request\Builders](../namespaces/yookassapayout-request-builders.md)
---
**Summary:**

Абстрактный класс для сборки запроса выплаты из массива

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$objectRequest](../classes/YooKassaPayout-Request-Builders-AbstractRequestBuilder.md#property_objectRequest) |  | Запрос выплаты |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [build()](../classes/YooKassaPayout-Request-Builders-AbstractRequestBuilder.md#method_build) |  | Строит запрос, валидирует его и возвращает, если все прошло нормально |
| public | [setOptions()](../classes/YooKassaPayout-Request-Builders-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
---
### Details
* File: [lib/Request/Builders/AbstractRequestBuilder.php](../../lib/Request/Builders/AbstractRequestBuilder.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Request\Builders\AbstractRequestBuilder
---
## Properties
<a name="property_objectRequest"></a>
#### protected $objectRequest : \YooKassaPayout\Request\AbstractDepositionRequest
---
**Summary**

Запрос выплаты

**Type:** <a href="../classes/YooKassaPayout-Request-AbstractDepositionRequest.html"><abbr title="\YooKassaPayout\Request\AbstractDepositionRequest">AbstractDepositionRequest</abbr></a>

**Details:**



---
## Methods
<a name="method_build" class="anchor"></a>
#### public build() : \YooKassaPayout\Request\AbstractDepositionRequest

```php
public build(array $options = null) : \YooKassaPayout\Request\AbstractDepositionRequest
```

**Summary**

Строит запрос, валидирует его и возвращает, если все прошло нормально

**Details:**
* Inherited From: [\YooKassaPayout\Request\Builders\AbstractRequestBuilder](../classes/YooKassaPayout-Request-Builders-AbstractRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | options  | Массив свойств запроса, если нужно их установить перед сборкой |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidRequestException | Выбрасывается если при валидации запроса произошла ошибка массиве настроек |

**Returns:** \YooKassaPayout\Request\AbstractDepositionRequest - Инстанс собранного запроса


<a name="method_setOptions" class="anchor"></a>
#### public setOptions() : \YooKassaPayout\Request\Builders\AbstractRequestBuilder

```php
public setOptions(array|\Traversable $options) : \YooKassaPayout\Request\Builders\AbstractRequestBuilder
```

**Summary**

Устанавливает свойства запроса из массива

**Details:**
* Inherited From: [\YooKassaPayout\Request\Builders\AbstractRequestBuilder](../classes/YooKassaPayout-Request-Builders-AbstractRequestBuilder.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | options  | Массив свойств запроса |

**Returns:** \YooKassaPayout\Request\Builders\AbstractRequestBuilder - Инстанс собранного запроса



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