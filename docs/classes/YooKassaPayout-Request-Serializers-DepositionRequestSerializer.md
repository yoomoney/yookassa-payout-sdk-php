# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Request\Serializers\DepositionRequestSerializer
### Namespace: [\YooKassaPayout\Request\Serializers](../namespaces/yookassapayout-request-serializers.md)
---
**Summary:**

Класс для преобразования запроса выплаты в массив

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [serialize()](../classes/YooKassaPayout-Request-Serializers-DepositionRequestSerializer.md#method_serialize) |  | Формирует массив из запроса |
| public | [serializePaymentParams()](../classes/YooKassaPayout-Request-Serializers-DepositionRequestSerializer.md#method_serializePaymentParams) |  | Формирует платежные параметры |
---
### Details
* File: [lib/Request/Serializers/DepositionRequestSerializer.php](../../lib/Request/Serializers/DepositionRequestSerializer.php)
* Package: YooKassaPayout
* Class Hierarchy: 
  * [\YooKassaPayout\Request\Serializers\AbstractRequestSerializer](../classes/YooKassaPayout-Request-Serializers-AbstractRequestSerializer.md)
  * \YooKassaPayout\Request\Serializers\DepositionRequestSerializer

---
## Methods
<a name="method_serialize" class="anchor"></a>
#### public serialize() : array

```php
public serialize(\YooKassaPayout\Request\AbstractRequest $request) : array
```

**Summary**

Формирует массив из запроса

**Details:**
* Inherited From: [\YooKassaPayout\Request\Serializers\DepositionRequestSerializer](../classes/YooKassaPayout-Request-Serializers-DepositionRequestSerializer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Request\AbstractRequest</code> | request  | Запрос |

**Returns:** array - Массив параметров


<a name="method_serializePaymentParams" class="anchor"></a>
#### public serializePaymentParams() : array

```php
public serializePaymentParams(\YooKassaPayout\Model\Recipient\BaseRecipient|array $paymentParams) : array
```

**Summary**

Формирует платежные параметры

**Details:**
* Inherited From: [\YooKassaPayout\Request\Serializers\DepositionRequestSerializer](../classes/YooKassaPayout-Request-Serializers-DepositionRequestSerializer.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Model\Recipient\BaseRecipient OR array</code> | paymentParams  | Платежные параметры |

**Returns:** array - 



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