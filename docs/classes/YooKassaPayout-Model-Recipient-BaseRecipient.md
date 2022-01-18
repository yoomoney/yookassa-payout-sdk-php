# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Model\Recipient\BaseRecipient
### Namespace: [\YooKassaPayout\Model\Recipient](../namespaces/yookassapayout-model-recipient.md)
---
**Summary:**

Класс для построения параметров получателя при выплате на моб.телефон, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest

---
### Examples
Выплата на мобильный телефон

```php
try {
    // Подготовка данных о получателе выплаты
    $recipient = new YooKassaPayout\Model\Recipient\BaseRecipient();
    $recipient->setPofOfferAccepted(true);

    // Создание запроса
    $deposition = new YooKassaPayout\Request\TestDepositionRequest();
    $deposition->setAmount(100)
               ->setDstAccount('79001002030')
               ->setPaymentParams($recipient);

    $result = $client->createDeposition($deposition);
    var_dump($result);
} catch (\Exception $e) {
    echo $e->getMessage();
}

```
---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$pdrAddress](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrAddress) |  | Адрес получателя платежа |
| protected | [$pdrBirthDate](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrBirthDate) |  | Дата рождения в формате ДД.ММ.ГГГГ |
| protected | [$pdrDocIssueDate](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrDocIssueDate) |  | Дата выдачи паспорта в формате ДД.ММ.ГГГГ |
| protected | [$pdrDocNumber](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrDocNumber) |  | Серия и номер паспорта гражданина РФ (без пробелов) |
| protected | [$pdrFirstName](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrFirstName) |  | Имя |
| protected | [$pdrLastName](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrLastName) |  | Фамилия |
| protected | [$pdrMiddleName](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrMiddleName) |  | Отчество |
| protected | [$pofOfferAccepted](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pofOfferAccepted) |  | Подтверждение принятия оферты пользователем |
| protected | [$smsPhoneNumber](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_smsPhoneNumber) |  | Номер телефона в международном формате |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getPdrAddress()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrAddress) |  | Возвращает адрес получателя платежа |
| public | [getPdrBirthDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrBirthDate) |  | Возвращает дату рождения |
| public | [getPdrDocIssueDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrDocIssueDate) |  | Возвращает дату выдачи паспорта |
| public | [getPdrDocNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrDocNumber) |  | Возвращает серию и номер паспорта гражданина РФ |
| public | [getPdrFirstName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrFirstName) |  | Возвращает имя |
| public | [getPdrLastName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrLastName) |  | Возвращает фамилию |
| public | [getPdrMiddleName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrMiddleName) |  | Возвращает отчество |
| public | [getPofOfferAccepted()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPofOfferAccepted) |  | Получает подтверждение принятия оферты пользователем |
| public | [getSmsPhoneNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getSmsPhoneNumber) |  | Возвращает номер телефона |
| public | [setDocNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setDocNumber) |  | Устанавливает серию и номер паспорта гражданина РФ |
| public | [setPdrAddress()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrAddress) |  | Устанавливает адрес получателя платежа |
| public | [setPdrBirthDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrBirthDate) |  | Устанавливает дату рождения |
| public | [setPdrDocIssueDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrDocIssueDate) |  | Устанавливает дата выдачи паспорта |
| public | [setPdrFirstName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrFirstName) |  | Устанавливает имя |
| public | [setPdrLastName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrLastName) |  | Устанавливает фамилию |
| public | [setPdrMiddleName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrMiddleName) |  | Устанавливает отчество |
| public | [setPofOfferAccepted()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPofOfferAccepted) |  | Устанавливает подтверждение принятия оферты пользователем |
| public | [setSmsPhoneNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setSmsPhoneNumber) |  | Устанавливает номер телефона |
| public | [toArray()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_toArray) |  | Возвращает данные объекта в виде массива параметров |
---
### Details
* File: [lib/Model/Recipient/BaseRecipient.php](../../lib/Model/Recipient/BaseRecipient.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Model\Recipient\BaseRecipient
---
## Properties
<a name="property_pdrAddress"></a>
#### protected $pdrAddress : string
---
**Summary**

Адрес получателя платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_pdrBirthDate"></a>
#### protected $pdrBirthDate : string
---
**Summary**

Дата рождения в формате ДД.ММ.ГГГГ

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_pdrDocIssueDate"></a>
#### protected $pdrDocIssueDate : string
---
**Summary**

Дата выдачи паспорта в формате ДД.ММ.ГГГГ

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_pdrDocNumber"></a>
#### protected $pdrDocNumber : int|string
---
**Summary**

Серия и номер паспорта гражданина РФ (без пробелов)

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**


<a name="property_pdrFirstName"></a>
#### protected $pdrFirstName : string
---
**Summary**

Имя

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_pdrLastName"></a>
#### protected $pdrLastName : string
---
**Summary**

Фамилия

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_pdrMiddleName"></a>
#### protected $pdrMiddleName : string
---
**Summary**

Отчество

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_pofOfferAccepted"></a>
#### protected $pofOfferAccepted : int
---
**Summary**

Подтверждение принятия оферты пользователем

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**


<a name="property_smsPhoneNumber"></a>
#### protected $smsPhoneNumber : int|string
---
**Summary**

Номер телефона в международном формате

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**



---
## Methods
<a name="method_getPdrAddress" class="anchor"></a>
#### public getPdrAddress() : string

```php
public getPdrAddress() : string
```

**Summary**

Возвращает адрес получателя платежа

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** string - Адрес получателя платежа


<a name="method_getPdrBirthDate" class="anchor"></a>
#### public getPdrBirthDate() : string

```php
public getPdrBirthDate() : string
```

**Summary**

Возвращает дату рождения

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** string - Дата рождения


<a name="method_getPdrDocIssueDate" class="anchor"></a>
#### public getPdrDocIssueDate() : string

```php
public getPdrDocIssueDate() : string
```

**Summary**

Возвращает дату выдачи паспорта

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** string - Дата выдачи паспорта


<a name="method_getPdrDocNumber" class="anchor"></a>
#### public getPdrDocNumber() : string

```php
public getPdrDocNumber() : string
```

**Summary**

Возвращает серию и номер паспорта гражданина РФ

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** string - Серия и номер паспорта гражданина РФ


<a name="method_getPdrFirstName" class="anchor"></a>
#### public getPdrFirstName() : string

```php
public getPdrFirstName() : string
```

**Summary**

Возвращает имя

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** string - Имя


<a name="method_getPdrLastName" class="anchor"></a>
#### public getPdrLastName() : string

```php
public getPdrLastName() : string
```

**Summary**

Возвращает фамилию

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** string - Фамилия


<a name="method_getPdrMiddleName" class="anchor"></a>
#### public getPdrMiddleName() : string

```php
public getPdrMiddleName() : string
```

**Summary**

Возвращает отчество

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** string - Отчество


<a name="method_getPofOfferAccepted" class="anchor"></a>
#### public getPofOfferAccepted() : int

```php
public getPofOfferAccepted() : int
```

**Summary**

Получает подтверждение принятия оферты пользователем

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** int - Подтверждение принятия оферты пользователем


<a name="method_getSmsPhoneNumber" class="anchor"></a>
#### public getSmsPhoneNumber() : string

```php
public getSmsPhoneNumber() : string
```

**Summary**

Возвращает номер телефона

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** string - Номер телефона


<a name="method_setDocNumber" class="anchor"></a>
#### public setDocNumber() : $this

```php
public setDocNumber(int|string $value) : $this
```

**Summary**

Устанавливает серию и номер паспорта гражданина РФ

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR string</code> | value  | Серия и номер паспорта гражданина РФ |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |

**Returns:** $this - 


<a name="method_setPdrAddress" class="anchor"></a>
#### public setPdrAddress() : $this

```php
public setPdrAddress(string $value) : $this
```

**Summary**

Устанавливает адрес получателя платежа

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Адрес получателя платежа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |

**Returns:** $this - 


<a name="method_setPdrBirthDate" class="anchor"></a>
#### public setPdrBirthDate() : $this

```php
public setPdrBirthDate(string $value) : $this
```

**Summary**

Устанавливает дату рождения

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Дата рождения |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueException | Выбрасывается, если данные не удовлетворяют условию |
| \Exception | Выбрасывается, если произошла ошибка работы с датой |

**Returns:** $this - 


<a name="method_setPdrDocIssueDate" class="anchor"></a>
#### public setPdrDocIssueDate() : $this

```php
public setPdrDocIssueDate(string $value) : $this
```

**Summary**

Устанавливает дата выдачи паспорта

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Дата выдачи паспорта |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueException | Выбрасывается, если данные не удовлетворяют условию |
| \Exception | Выбрасывается, если произошла ошибка работы с датой |

**Returns:** $this - 


<a name="method_setPdrFirstName" class="anchor"></a>
#### public setPdrFirstName() : $this

```php
public setPdrFirstName(string $value) : $this
```

**Summary**

Устанавливает имя

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Имя |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |

**Returns:** $this - 


<a name="method_setPdrLastName" class="anchor"></a>
#### public setPdrLastName() : $this

```php
public setPdrLastName(string $value) : $this
```

**Summary**

Устанавливает фамилию

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Фамилия |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |

**Returns:** $this - 


<a name="method_setPdrMiddleName" class="anchor"></a>
#### public setPdrMiddleName() : $this

```php
public setPdrMiddleName(string $value) : $this
```

**Summary**

Устанавливает отчество

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Отчество |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |

**Returns:** $this - 


<a name="method_setPofOfferAccepted" class="anchor"></a>
#### public setPofOfferAccepted() : $this

```php
public setPofOfferAccepted(bool $value) : $this
```

**Summary**

Устанавливает подтверждение принятия оферты пользователем

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Подтверждение принятия оферты пользователем |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |

**Returns:** $this - 


<a name="method_setSmsPhoneNumber" class="anchor"></a>
#### public setSmsPhoneNumber() : $this

```php
public setSmsPhoneNumber(int|string $value) : $this
```

**Summary**

Устанавливает номер телефона

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR string</code> | value  | Номер телефона |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается, если данные неправильного типа |

**Returns:** $this - 


<a name="method_toArray" class="anchor"></a>
#### public toArray() : array

```php
public toArray() : array
```

**Summary**

Возвращает данные объекта в виде массива параметров

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)

**Returns:** array - Данные объекта в виде массива параметров



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