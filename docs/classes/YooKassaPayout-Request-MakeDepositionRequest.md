# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Request\MakeDepositionRequest
### Namespace: [\YooKassaPayout\Request](../namespaces/yookassapayout-request.md)
---
**Summary:**

Класс для создания запроса на выплату

---
### Examples
Запрос на выплату

```php
** File not found : 04-deposition.php **
```
---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$amount](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#property_amount) |  | Сумма перевода |
| protected | [$clientOrderId](../classes/YooKassaPayout-Request-AbstractRequest.md#property_clientOrderId) |  | Идентификатор операции |
| protected | [$contract](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#property_contract) |  | Основание для зачисления перевода |
| protected | [$currency](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#property_currency) |  | Код валюты перевода |
| protected | [$currentObject](../classes/YooKassaPayout-Request-AbstractRequest.md#property_currentObject) |  | Инстанс собираемого запроса |
| protected | [$dstAccount](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#property_dstAccount) |  | Идентификатор получателя перевода |
| protected | [$formatType](../classes/YooKassaPayout-Request-AbstractRequest.md#property_formatType) |  | Формат запроса |
| protected | [$itn](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#property_itn) |  | ИНН самозанятого |
| protected | [$paymentParams](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#property_paymentParams) |  | Элемент запроса для передачи дополнительных параметров перевода |
| protected | [$requestDT](../classes/YooKassaPayout-Request-AbstractRequest.md#property_requestDT) |  | Дата и время формирования запроса операции на стороне и по часам контрагента. |
| protected | [$requestName](../classes/YooKassaPayout-Request-MakeDepositionRequest.md#property_requestName) |  |  |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Request-AbstractRequest.md#method___construct) |  | AbstractRequest constructor. |
| public | [clearValidationError()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_clearValidationError) |  | Очищает статус валидации текущего запроса |
| public | [getAmount()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_getAmount) |  | Возвращает сумму перевода |
| public | [getBuilder()](../classes/YooKassaPayout-Request-MakeDepositionRequest.md#method_getBuilder) |  | Возвращает объект для сборки запроса MakeDepositionRequest из массива |
| public | [getClientOrderId()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getClientOrderId) |  | Возвращает идентификатор операции |
| public | [getContract()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_getContract) |  | Возвращает основание для зачисления перевода |
| public | [getCurrency()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_getCurrency) |  | Возвращает код валюты перевода |
| public | [getDstAccount()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_getDstAccount) |  | Возвращает идентификатор получателя перевода |
| public | [getFormatType()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getFormatType) |  | Возвращает формат запроса xml|json |
| public | [getItn()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_getItn) |  | Возвращает ИНН самозанятого |
| public | [getLastValidationError()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getLastValidationError) |  | Возвращает последнюю ошибку валидации |
| public | [getPaymentParams()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_getPaymentParams) |  | Возвращает дополнительные параметры перевода |
| public | [getRequestDT()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getRequestDT) |  | Возвращает установленные дату и время запроса |
| public | [getRequestName()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getRequestName) |  | Возвращает тип запроса |
| public | [getSerializer()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_getSerializer) |  | Возвращает объект для преобразования запроса в массив |
| public | [hasItn()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_hasItn) |  | Возвращает флаг наличия ИНН самозанятого |
| public | [hasPaymentParams()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_hasPaymentParams) |  | Проверяет установлены ли дополнительные параметры перевода |
| public | [setAmount()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_setAmount) |  | Устанавливает сумму перевода |
| public | [setClientOrderId()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setClientOrderId) |  | Устанавливает идентификатор операции |
| public | [setContract()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_setContract) |  | Устанавливает основание для зачисления перевода |
| public | [setCurrency()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_setCurrency) |  | Устанавливает код валюты перевода |
| public | [setDstAccount()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_setDstAccount) |  | Устанавливает идентификатор получателя перевода |
| public | [setFormatType()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setFormatType) |  | Устанавливает формат запроса xml|json |
| public | [setItn()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_setItn) |  | Устанавливает ИНН самозанятого |
| public | [setPaymentParams()](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md#method_setPaymentParams) |  | Устанавливает дополнительные параметры перевода |
| public | [setRequestDT()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setRequestDT) |  | Устанавливает дату и время запроса |
| public | [setRequestName()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setRequestName) |  | Устанавливает тип запроса |
| public | [validate()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_validate) |  | Валидирует текущий запрос, проверяет все ли нужные свойства установлены |
| protected | [setValidationError()](../classes/YooKassaPayout-Request-AbstractRequest.md#method_setValidationError) |  | Устанавливает ошибку валидации |
---
### Details
* File: [lib/Request/MakeDepositionRequest.php](../../lib/Request/MakeDepositionRequest.php)
* Package: YooKassaPayout\Request
* Class Hierarchy:  
  * [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)
  * [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)
  * \YooKassaPayout\Request\MakeDepositionRequest
---
## Properties
<a name="property_amount"></a>
#### protected $amount : \YooKassaPayout\Request\numeric
---
**Summary**

Сумма перевода

**Type:** \YooKassaPayout\Request\numeric

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)


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
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)


<a name="property_contract"></a>
#### protected $contract : string
---
**Summary**

Основание для зачисления перевода

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)


<a name="property_currency"></a>
#### protected $currency : int|string
---
**Summary**

Код валюты перевода

***Description***

Возможное значение — 643 (российский рубль)

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)


<a name="property_currentObject"></a>
#### protected $currentObject : \YooKassaPayout\Request\AbstractRequest
---
**Summary**

Инстанс собираемого запроса

**Type:** <a href="../classes/YooKassaPayout-Request-AbstractRequest.html"><abbr title="\YooKassaPayout\Request\AbstractRequest">AbstractRequest</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)


<a name="property_dstAccount"></a>
#### protected $dstAccount : string
---
**Summary**

Идентификатор получателя перевода

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)


<a name="property_formatType"></a>
#### protected $formatType : \YooKassaPayout\Model\FormatType
---
**Summary**

Формат запроса

**Type:** <a href="../classes/YooKassaPayout-Model-FormatType.html"><abbr title="\YooKassaPayout\Model\FormatType">FormatType</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)


<a name="property_itn"></a>
#### protected $itn : string
---
**Summary**

ИНН самозанятого

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)


<a name="property_paymentParams"></a>
#### protected $paymentParams : \YooKassaPayout\Model\Recipient\BaseRecipient|\YooKassaPayout\Model\Recipient\BankCardRecipient|\YooKassaPayout\Model\Recipient\BankAccountRecipient|array
---
**Summary**

Элемент запроса для передачи дополнительных параметров перевода

**Type:** <a href="../\YooKassaPayout\Model\Recipient\BaseRecipient|\YooKassaPayout\Model\Recipient\BankCardRecipient|\YooKassaPayout\Model\Recipient\BankAccountRecipient|array"><abbr title="\YooKassaPayout\Model\Recipient\BaseRecipient|\YooKassaPayout\Model\Recipient\BankCardRecipient|\YooKassaPayout\Model\Recipient\BankAccountRecipient|array">BankAccountRecipient|array</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)


<a name="property_requestDT"></a>
#### protected $requestDT : \DateTime
---
**Summary**

Дата и время формирования запроса операции на стороне и по часам контрагента.

**Type:** \DateTime

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractRequest](../classes/YooKassaPayout-Request-AbstractRequest.md)


<a name="property_requestName"></a>
#### protected $requestName
---

**Details:**

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  |  |


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


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \YooKassaPayout\Request\numeric

```php
public getAmount() : \YooKassaPayout\Request\numeric
```

**Summary**

Возвращает сумму перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)

**Returns:** \YooKassaPayout\Request\numeric - Сумма перевода


<a name="method_getBuilder" class="anchor"></a>
#### public getBuilder() : \YooKassaPayout\Request\Builders\MakeDepositionRequestBuilder

```php
static public getBuilder(null|string|int $clientOrderId = null) : \YooKassaPayout\Request\Builders\MakeDepositionRequestBuilder
```

**Summary**

Возвращает объект для сборки запроса MakeDepositionRequest из массива

**Details:**
* Inherited From: [\YooKassaPayout\Request\MakeDepositionRequest](../classes/YooKassaPayout-Request-MakeDepositionRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">null OR string OR int</code> | clientOrderId  | Идентификатор операции |

**Returns:** \YooKassaPayout\Request\Builders\MakeDepositionRequestBuilder - Объект для сборки запроса MakeDepositionRequest из массива


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


<a name="method_getContract" class="anchor"></a>
#### public getContract() : string

```php
public getContract() : string
```

**Summary**

Возвращает основание для зачисления перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)

**Returns:** string - Основание для зачисления перевода


<a name="method_getCurrency" class="anchor"></a>
#### public getCurrency() : string

```php
public getCurrency() : string
```

**Summary**

Возвращает код валюты перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)

**Returns:** string - Код валюты перевода


<a name="method_getDstAccount" class="anchor"></a>
#### public getDstAccount() : string

```php
public getDstAccount() : string
```

**Summary**

Возвращает идентификатор получателя перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)

**Returns:** string - Идентификатор получателя перевода


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


<a name="method_getItn" class="anchor"></a>
#### public getItn() : string

```php
public getItn() : string
```

**Summary**

Возвращает ИНН самозанятого

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)

**Returns:** string - ИНН самозанятого


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


<a name="method_getPaymentParams" class="anchor"></a>
#### public getPaymentParams() : \YooKassaPayout\Model\Recipient\BaseRecipient|\YooKassaPayout\Model\Recipient\BankCardRecipient|\YooKassaPayout\Model\Recipient\BankAccountRecipient|array

```php
public getPaymentParams() : \YooKassaPayout\Model\Recipient\BaseRecipient|\YooKassaPayout\Model\Recipient\BankCardRecipient|\YooKassaPayout\Model\Recipient\BankAccountRecipient|array
```

**Summary**

Возвращает дополнительные параметры перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)

**Returns:** \YooKassaPayout\Model\Recipient\BaseRecipient|\YooKassaPayout\Model\Recipient\BankCardRecipient|\YooKassaPayout\Model\Recipient\BankAccountRecipient|array - Дополнительные параметры перевода


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


<a name="method_hasItn" class="anchor"></a>
#### public hasItn() : bool

```php
public hasItn() : bool
```

**Summary**

Возвращает флаг наличия ИНН самозанятого

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)

**Returns:** bool - Наличие ИНН самозанятого


<a name="method_hasPaymentParams" class="anchor"></a>
#### public hasPaymentParams() : bool

```php
public hasPaymentParams() : bool
```

**Summary**

Проверяет установлены ли дополнительные параметры перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)

**Returns:** bool - Флаг установки дополнительных параметров перевода


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : $this

```php
public setAmount(\YooKassaPayout\Request\numeric $value) : $this
```

**Summary**

Устанавливает сумму перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Request\numeric</code> | value  | Сумма перевода |

**Returns:** $this - 


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


<a name="method_setContract" class="anchor"></a>
#### public setContract() : \YooKassaPayout\Request\AbstractDepositionRequest

```php
public setContract(string $value) : \YooKassaPayout\Request\AbstractDepositionRequest
```

**Summary**

Устанавливает основание для зачисления перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Основание для зачисления перевода |

**Returns:** \YooKassaPayout\Request\AbstractDepositionRequest - 


<a name="method_setCurrency" class="anchor"></a>
#### public setCurrency() : $this

```php
public setCurrency(int|string $value = CurrencyCode::RUB) : $this
```

**Summary**

Устанавливает код валюты перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR string</code> | value  | Код валюты перевода |

**Returns:** $this - 


<a name="method_setDstAccount" class="anchor"></a>
#### public setDstAccount() : \YooKassaPayout\Request\AbstractDepositionRequest

```php
public setDstAccount(string|int $value) : \YooKassaPayout\Request\AbstractDepositionRequest
```

**Summary**

Устанавливает идентификатор получателя перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR int</code> | value  | Идентификатор получателя перевода |

**Returns:** \YooKassaPayout\Request\AbstractDepositionRequest - 


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


<a name="method_setItn" class="anchor"></a>
#### public setItn() : \YooKassaPayout\Request\AbstractDepositionRequest

```php
public setItn(string|int $value) : \YooKassaPayout\Request\AbstractDepositionRequest
```

**Summary**

Устанавливает ИНН самозанятого

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR int</code> | value  | ИНН самозанятого |

**Returns:** \YooKassaPayout\Request\AbstractDepositionRequest - 


<a name="method_setPaymentParams" class="anchor"></a>
#### public setPaymentParams() : $this

```php
public setPaymentParams(\YooKassaPayout\Model\Recipient\BaseRecipient|\YooKassaPayout\Model\Recipient\BankCardRecipient|\YooKassaPayout\Model\Recipient\BankAccountRecipient|array $params) : $this
```

**Summary**

Устанавливает дополнительные параметры перевода

**Details:**
* Inherited From: [\YooKassaPayout\Request\AbstractDepositionRequest](../classes/YooKassaPayout-Request-AbstractDepositionRequest.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Model\Recipient\BaseRecipient OR \YooKassaPayout\Model\Recipient\BankCardRecipient OR \YooKassaPayout\Model\Recipient\BankAccountRecipient OR array</code> | params  | Дополнительные параметры перевода |

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

This document was automatically generated from source code comments on 2022-01-18 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2022 YooMoney