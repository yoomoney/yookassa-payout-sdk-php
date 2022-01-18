# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Model\Recipient\BankAccountRecipient
### Namespace: [\YooKassaPayout\Model\Recipient](../namespaces/yookassapayout-model-recipient.md)
---
**Summary:**

Класс для построения параметров получателя при выплате на банковский счет, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest

---
### Examples
Выплата на банковский счет

```php
try {
    // Подготовка данных о получателе выплаты
    $recipient = new YooKassaPayout\Model\Recipient\BankAccountRecipient();
    $recipient->setPdrLastName('Иванов')
              ->setPdrFirstName('Иван')
              ->setPdrMiddleName('Иванович')
              ->setDocNumber('1234567890')
              ->setPofOfferAccepted(true)
              ->setPdrDocIssueDate('01.02.2018')
              ->setSmsPhoneNumber('79000000000')
              ->setPaymentPurpose('Назначение выплаты')
              ->setBankBIK(5435435435)
              ->setBankCorAccount('');

    // Создание запроса
    $deposition = new YooKassaPayout\Request\MakeDepositionRequest();
    $deposition->setDstAccount('2570066962077')
               ->setAmount(100)
               ->setCurrency(YooKassaPayout\Model\CurrencyCode::RUB)
               ->setContract('Основание для выплаты')
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
| protected | [$bankBIK](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#property_bankBIK) |  | БИК банка |
| protected | [$bankCity](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#property_bankCity) |  | Город, в котором находится отделение банка |
| protected | [$bankCorAccount](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#property_bankCorAccount) |  | Корреспондентский счет отделения банка |
| protected | [$bankName](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#property_bankName) |  | Наименование банка |
| protected | [$custAccount](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#property_custAccount) |  | Номер банковского счета получателя |
| protected | [$paymentPurpose](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#property_paymentPurpose) |  | Назначение платежа или иные сведения для банка |
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
| public | [getBankBIK()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_getBankBIK) |  | Возвращает БИК банка |
| public | [getBankCity()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_getBankCity) |  | Возвращает город, в котором находится отделение банка |
| public | [getBankCorAccount()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_getBankCorAccount) |  | Возвращает Корреспондентский счет отделения банка |
| public | [getBankName()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_getBankName) |  | Возвращает наименование банка |
| public | [getCustAccount()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_getCustAccount) |  | Возвращает номер банковского счета получателя |
| public | [getPaymentPurpose()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_getPaymentPurpose) |  | Возвращает назначение платежа или иные сведения для банка |
| public | [getPdrAddress()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrAddress) |  | Возвращает адрес получателя платежа |
| public | [getPdrBirthDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrBirthDate) |  | Возвращает дату рождения |
| public | [getPdrDocIssueDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrDocIssueDate) |  | Возвращает дату выдачи паспорта |
| public | [getPdrDocNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrDocNumber) |  | Возвращает серию и номер паспорта гражданина РФ |
| public | [getPdrFirstName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrFirstName) |  | Возвращает имя |
| public | [getPdrLastName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrLastName) |  | Возвращает фамилию |
| public | [getPdrMiddleName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrMiddleName) |  | Возвращает отчество |
| public | [getPofOfferAccepted()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPofOfferAccepted) |  | Получает подтверждение принятия оферты пользователем |
| public | [getSmsPhoneNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getSmsPhoneNumber) |  | Возвращает номер телефона |
| public | [setBankBIK()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_setBankBIK) |  | Устанавливает БИК банка |
| public | [setBankCity()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_setBankCity) |  | Устанавливает город, в котором находится отделение банка |
| public | [setBankCorAccount()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_setBankCorAccount) |  | Устанавливает корреспондентский счет отделения банка |
| public | [setBankName()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_setBankName) |  | Устанавливает наименование банка |
| public | [setCustAccount()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_setCustAccount) |  | Устанавливает номер банковского счета получателя |
| public | [setDocNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setDocNumber) |  | Устанавливает серию и номер паспорта гражданина РФ |
| public | [setPaymentPurpose()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_setPaymentPurpose) |  | Устанавливает назначение платежа или иные сведения для банка |
| public | [setPdrAddress()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrAddress) |  | Устанавливает адрес получателя платежа |
| public | [setPdrBirthDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrBirthDate) |  | Устанавливает дату рождения |
| public | [setPdrDocIssueDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrDocIssueDate) |  | Устанавливает дата выдачи паспорта |
| public | [setPdrFirstName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrFirstName) |  | Устанавливает имя |
| public | [setPdrLastName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrLastName) |  | Устанавливает фамилию |
| public | [setPdrMiddleName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrMiddleName) |  | Устанавливает отчество |
| public | [setPofOfferAccepted()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPofOfferAccepted) |  | Устанавливает подтверждение принятия оферты пользователем |
| public | [setSmsPhoneNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setSmsPhoneNumber) |  | Устанавливает номер телефона |
| public | [toArray()](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md#method_toArray) |  | Возвращает данные объекта в виде массива параметров |
---
### Details
* File: [lib/Model/Recipient/BankAccountRecipient.php](../../lib/Model/Recipient/BankAccountRecipient.php)
* Package: YooKassaPayout
* Class Hierarchy: 
  * [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
  * \YooKassaPayout\Model\Recipient\BankAccountRecipient
---
## Properties
<a name="property_bankBIK"></a>
#### protected $bankBIK : int|string
---
**Summary**

БИК банка

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**


<a name="property_bankCity"></a>
#### protected $bankCity : string
---
**Summary**

Город, в котором находится отделение банка

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_bankCorAccount"></a>
#### protected $bankCorAccount : int|string
---
**Summary**

Корреспондентский счет отделения банка

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**


<a name="property_bankName"></a>
#### protected $bankName : string
---
**Summary**

Наименование банка

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_custAccount"></a>
#### protected $custAccount : int|string
---
**Summary**

Номер банковского счета получателя

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**


<a name="property_paymentPurpose"></a>
#### protected $paymentPurpose : string
---
**Summary**

Назначение платежа или иные сведения для банка

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_pdrAddress"></a>
#### protected $pdrAddress : string
---
**Summary**

Адрес получателя платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_pdrBirthDate"></a>
#### protected $pdrBirthDate : string
---
**Summary**

Дата рождения в формате ДД.ММ.ГГГГ

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_pdrDocIssueDate"></a>
#### protected $pdrDocIssueDate : string
---
**Summary**

Дата выдачи паспорта в формате ДД.ММ.ГГГГ

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_pdrDocNumber"></a>
#### protected $pdrDocNumber : int|string
---
**Summary**

Серия и номер паспорта гражданина РФ (без пробелов)

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_pdrFirstName"></a>
#### protected $pdrFirstName : string
---
**Summary**

Имя

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_pdrLastName"></a>
#### protected $pdrLastName : string
---
**Summary**

Фамилия

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_pdrMiddleName"></a>
#### protected $pdrMiddleName : string
---
**Summary**

Отчество

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_pofOfferAccepted"></a>
#### protected $pofOfferAccepted : int
---
**Summary**

Подтверждение принятия оферты пользователем

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_smsPhoneNumber"></a>
#### protected $smsPhoneNumber : int|string
---
**Summary**

Номер телефона в международном формате

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)



---
## Methods
<a name="method_getBankBIK" class="anchor"></a>
#### public getBankBIK() : string

```php
public getBankBIK() : string
```

**Summary**

Возвращает БИК банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)

**Returns:** string - БИК банка


<a name="method_getBankCity" class="anchor"></a>
#### public getBankCity() : string

```php
public getBankCity() : string
```

**Summary**

Возвращает город, в котором находится отделение банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)

**Returns:** string - Город, в котором находится отделение банка


<a name="method_getBankCorAccount" class="anchor"></a>
#### public getBankCorAccount() : string

```php
public getBankCorAccount() : string
```

**Summary**

Возвращает Корреспондентский счет отделения банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)

**Returns:** string - Корреспондентский счет отделения банка


<a name="method_getBankName" class="anchor"></a>
#### public getBankName() : string

```php
public getBankName() : string
```

**Summary**

Возвращает наименование банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)

**Returns:** string - Наименование банка


<a name="method_getCustAccount" class="anchor"></a>
#### public getCustAccount() : int|string

```php
public getCustAccount() : int|string
```

**Summary**

Возвращает номер банковского счета получателя

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)

**Returns:** int|string - Номер банковского счета получателя


<a name="method_getPaymentPurpose" class="anchor"></a>
#### public getPaymentPurpose() : string

```php
public getPaymentPurpose() : string
```

**Summary**

Возвращает назначение платежа или иные сведения для банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)

**Returns:** string - Назначение платежа или иные сведения для банка


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


<a name="method_setBankBIK" class="anchor"></a>
#### public setBankBIK() : $this

```php
public setBankBIK(int|string $value) : $this
```

**Summary**

Устанавливает БИК банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR string</code> | value  | БИК банка |

**Returns:** $this - 


<a name="method_setBankCity" class="anchor"></a>
#### public setBankCity() : $this

```php
public setBankCity(string $value) : $this
```

**Summary**

Устанавливает город, в котором находится отделение банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Город, в котором находится отделение банка |

**Returns:** $this - 


<a name="method_setBankCorAccount" class="anchor"></a>
#### public setBankCorAccount() : $this

```php
public setBankCorAccount(int|string $value) : $this
```

**Summary**

Устанавливает корреспондентский счет отделения банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR string</code> | value  | Корреспондентский счет отделения банка |

**Returns:** $this - 


<a name="method_setBankName" class="anchor"></a>
#### public setBankName() : $this

```php
public setBankName(string $value) : $this
```

**Summary**

Устанавливает наименование банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Наименование банка |

**Returns:** $this - 


<a name="method_setCustAccount" class="anchor"></a>
#### public setCustAccount() : $this

```php
public setCustAccount(int|string $value) : $this
```

**Summary**

Устанавливает номер банковского счета получателя

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR string</code> | value  | Номер банковского счета получателя |

**Returns:** $this - 


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


<a name="method_setPaymentPurpose" class="anchor"></a>
#### public setPaymentPurpose() : $this

```php
public setPaymentPurpose(string $value) : $this
```

**Summary**

Устанавливает назначение платежа или иные сведения для банка

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Назначение платежа или иные сведения для банка |

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
* Inherited From: [\YooKassaPayout\Model\Recipient\BankAccountRecipient](../classes/YooKassaPayout-Model-Recipient-BankAccountRecipient.md)

**Returns:** array - Данные объекта в виде массива параметров

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| inheritdoc |  | Описание из родительского класса |


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