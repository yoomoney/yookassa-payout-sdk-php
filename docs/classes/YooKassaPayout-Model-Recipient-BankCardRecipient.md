# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Model\Recipient\BankCardRecipient
### Namespace: [\YooKassaPayout\Model\Recipient](../namespaces/yookassapayout-model-recipient.md)
---
**Summary:**

Класс для построения параметров получателя при выплате на банковскую карту, затем можно передать в setPaymentParams() у (Make|Test)DepositionRequest

---
### Examples
Выплата на банковскую карту

```php
try {
    // Получение синонима карты
    $synonymRequest = new YooKassaPayout\Request\SynonymCardRequest();
    $synonymRequest->setSkrDestinationCardNumber('5555555555554444')
                   ->setSkrErrorUrl('https://yoomoney.ru')
                   ->setSkrSuccessUrl('https://yoomoney.ru');
    $synonym = $client->getSynonymCard($synonymRequest);

    // Подготовка данных о получателе выплаты
    $recipient = new YooKassaPayout\Model\Recipient\BankCardRecipient();
    $recipient->setPdrLastName('Иванов')
              ->setPdrFirstName('Иван')
              ->setPdrMiddleName('Иванович')
              ->setDocNumber('1234567890')
              ->setPofOfferAccepted(true)
              ->setPdrDocIssueDate('01.02.2018')
              ->setSmsPhoneNumber('79000000000')
              ->setSkrDestinationCardSynonym($synonym->getSkrDestinationCardSynonim());

    // Создание запроса
    $deposition = new YooKassaPayout\Request\TestDepositionRequest();
    $deposition->setDstAccount('25700130535186')
               ->setAmount(100)
               ->setCurrency(YooKassaPayout\Model\CurrencyCode::RUB)
               ->setContract('test')
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
| protected | [$cpsYmAccount](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#property_cpsYmAccount) |  | Идентификатор пользователя в ЮKassa |
| protected | [$pdrAddress](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#property_pdrAddress) |  | Адрес получателя платежа |
| protected | [$pdrBirthDate](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrBirthDate) |  | Дата рождения в формате ДД.ММ.ГГГГ |
| protected | [$pdrCity](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#property_pdrCity) |  | Город получателя платежа |
| protected | [$pdrCountry](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#property_pdrCountry) |  | Гражданство. Указывается как цифровой код страны (РФ — 643) |
| protected | [$pdrDocIssueDate](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrDocIssueDate) |  | Дата выдачи паспорта в формате ДД.ММ.ГГГГ |
| protected | [$pdrDocNumber](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrDocNumber) |  | Серия и номер паспорта гражданина РФ (без пробелов) |
| protected | [$pdrFirstName](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrFirstName) |  | Имя |
| protected | [$pdrLastName](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrLastName) |  | Фамилия |
| protected | [$pdrMiddleName](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pdrMiddleName) |  | Отчество |
| protected | [$pdrPostcode](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#property_pdrPostcode) |  | Почтовый индекс |
| protected | [$pofOfferAccepted](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_pofOfferAccepted) |  | Подтверждение принятия оферты пользователем |
| protected | [$skrDestinationCardSynonym](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#property_skrDestinationCardSynonym) |  | Синоним номера банковской карты |
| protected | [$smsPhoneNumber](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#property_smsPhoneNumber) |  | Номер телефона в международном формате |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getCpsYmAccount()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_getCpsYmAccount) |  | Возвращает идентификатор пользователя в ЮKassa |
| public | [getPdrAddress()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrAddress) |  | Возвращает адрес получателя платежа |
| public | [getPdrBirthDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrBirthDate) |  | Возвращает дату рождения |
| public | [getPdrCity()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_getPdrCity) |  | Возвращает город получателя платежа |
| public | [getPdrCountry()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_getPdrCountry) |  | Возвращает гражданство |
| public | [getPdrDocIssueDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrDocIssueDate) |  | Возвращает дату выдачи паспорта |
| public | [getPdrDocNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrDocNumber) |  | Возвращает серию и номер паспорта гражданина РФ |
| public | [getPdrFirstName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrFirstName) |  | Возвращает имя |
| public | [getPdrLastName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrLastName) |  | Возвращает фамилию |
| public | [getPdrMiddleName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPdrMiddleName) |  | Возвращает отчество |
| public | [getPdrPostcode()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_getPdrPostcode) |  | Возвращает почтовый индекс |
| public | [getPofOfferAccepted()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getPofOfferAccepted) |  | Получает подтверждение принятия оферты пользователем |
| public | [getSkrDestinationCardSynonym()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_getSkrDestinationCardSynonym) |  | Возвращает синоним карты |
| public | [getSmsPhoneNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_getSmsPhoneNumber) |  | Возвращает номер телефона |
| public | [hasCpsYmAccount()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_hasCpsYmAccount) |  | Возвращает флаг установки идентификатора пользователя в ЮKassa |
| public | [setCpsYmAccount()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_setCpsYmAccount) |  | Устанавливает идентификатор пользователя в ЮKassa |
| public | [setDocNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setDocNumber) |  | Устанавливает серию и номер паспорта гражданина РФ |
| public | [setPdrAddress()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrAddress) |  | Устанавливает адрес получателя платежа |
| public | [setPdrBirthDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrBirthDate) |  | Устанавливает дату рождения |
| public | [setPdrCity()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_setPdrCity) |  | Устанавливает город получателя платежа |
| public | [setPdrCountry()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_setPdrCountry) |  | Устанавливает гражданство. Указывается как цифровой код страны (РФ — 643) |
| public | [setPdrDocIssueDate()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrDocIssueDate) |  | Устанавливает дата выдачи паспорта |
| public | [setPdrFirstName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrFirstName) |  | Устанавливает имя |
| public | [setPdrLastName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrLastName) |  | Устанавливает фамилию |
| public | [setPdrMiddleName()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPdrMiddleName) |  | Устанавливает отчество |
| public | [setPdrPostcode()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_setPdrPostcode) |  | Устанавливает почтовый индекс |
| public | [setPofOfferAccepted()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setPofOfferAccepted) |  | Устанавливает подтверждение принятия оферты пользователем |
| public | [setSkrDestinationCardSynonym()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_setSkrDestinationCardSynonym) |  | Устанавливает синоним карты |
| public | [setSmsPhoneNumber()](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md#method_setSmsPhoneNumber) |  | Устанавливает номер телефона |
| public | [toArray()](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md#method_toArray) |  | Возвращает данные объекта в виде массива параметров |
---
### Details
* File: [lib/Model/Recipient/BankCardRecipient.php](../../lib/Model/Recipient/BankCardRecipient.php)
* Package: YooKassaPayout
* Class Hierarchy: 
  * [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)
  * \YooKassaPayout\Model\Recipient\BankCardRecipient
---
## Properties
<a name="property_cpsYmAccount"></a>
#### protected $cpsYmAccount : string
---
**Summary**

Идентификатор пользователя в ЮKassa

***Description***

Равен значению параметра accountNumber, полученного в ответе после идентификации пользователя через форму

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


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
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_pdrCity"></a>
#### protected $pdrCity : string
---
**Summary**

Город получателя платежа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_pdrCountry"></a>
#### protected $pdrCountry : int|string
---
**Summary**

Гражданство. Указывается как цифровой код страны (РФ — 643)

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**


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


<a name="property_pdrPostcode"></a>
#### protected $pdrPostcode : int|string
---
**Summary**

Почтовый индекс

**Type:** <a href="../int|string"><abbr title="int|string">int|string</abbr></a>

**Details:**


<a name="property_pofOfferAccepted"></a>
#### protected $pofOfferAccepted : int
---
**Summary**

Подтверждение принятия оферты пользователем

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BaseRecipient](../classes/YooKassaPayout-Model-Recipient-BaseRecipient.md)


<a name="property_skrDestinationCardSynonym"></a>
#### protected $skrDestinationCardSynonym : string
---
**Summary**

Синоним номера банковской карты

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


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
<a name="method_getCpsYmAccount" class="anchor"></a>
#### public getCpsYmAccount() : string

```php
public getCpsYmAccount() : string
```

**Summary**

Возвращает идентификатор пользователя в ЮKassa

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)

**Returns:** string - Идентификатор пользователя в ЮKassa


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


<a name="method_getPdrCity" class="anchor"></a>
#### public getPdrCity() : string

```php
public getPdrCity() : string
```

**Summary**

Возвращает город получателя платежа

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)

**Returns:** string - Город получателя платежа


<a name="method_getPdrCountry" class="anchor"></a>
#### public getPdrCountry() : string

```php
public getPdrCountry() : string
```

**Summary**

Возвращает гражданство

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)

**Returns:** string - Код страны


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


<a name="method_getPdrPostcode" class="anchor"></a>
#### public getPdrPostcode() : string

```php
public getPdrPostcode() : string
```

**Summary**

Возвращает почтовый индекс

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)

**Returns:** string - Почтовый индекс


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


<a name="method_getSkrDestinationCardSynonym" class="anchor"></a>
#### public getSkrDestinationCardSynonym() : string

```php
public getSkrDestinationCardSynonym() : string
```

**Summary**

Возвращает синоним карты

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)

**Returns:** string - Синоним карты


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


<a name="method_hasCpsYmAccount" class="anchor"></a>
#### public hasCpsYmAccount() : bool

```php
public hasCpsYmAccount() : bool
```

**Summary**

Возвращает флаг установки идентификатора пользователя в ЮKassa

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)

**Returns:** bool - Флаг установки идентификатора пользователя в ЮKassa


<a name="method_setCpsYmAccount" class="anchor"></a>
#### public setCpsYmAccount() : $this

```php
public setCpsYmAccount(string $value) : $this
```

**Summary**

Устанавливает идентификатор пользователя в ЮKassa

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор пользователя в ЮKassa |

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


<a name="method_setPdrCity" class="anchor"></a>
#### public setPdrCity() : $this

```php
public setPdrCity(string $value) : $this
```

**Summary**

Устанавливает город получателя платежа

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Город получателя платежа |

**Returns:** $this - 


<a name="method_setPdrCountry" class="anchor"></a>
#### public setPdrCountry() : $this

```php
public setPdrCountry(int|string $value) : $this
```

**Summary**

Устанавливает гражданство. Указывается как цифровой код страны (РФ — 643)

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR string</code> | value  | Код страны |

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


<a name="method_setPdrPostcode" class="anchor"></a>
#### public setPdrPostcode() : $this

```php
public setPdrPostcode(int|string $value) : $this
```

**Summary**

Устанавливает почтовый индекс

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR string</code> | value  | Почтовый индекс |

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


<a name="method_setSkrDestinationCardSynonym" class="anchor"></a>
#### public setSkrDestinationCardSynonym() : $this

```php
public setSkrDestinationCardSynonym(string $value) : $this
```

**Summary**

Устанавливает синоним карты

**Details:**
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Синоним карты |

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
* Inherited From: [\YooKassaPayout\Model\Recipient\BankCardRecipient](../classes/YooKassaPayout-Model-Recipient-BankCardRecipient.md)

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

This document was automatically generated from source code comments on 2021-07-23 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney