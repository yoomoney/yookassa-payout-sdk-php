# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Model\Organization
### Namespace: [\YooKassaPayout\Model](../namespaces/yookassapayout-model.md)
---
**Summary:**

Класс для построения данных организации при генерации запроса на сертификат

---
### Examples
Генерация ключей и создание запроса

```php
require_once '../vendor/autoload.php';

// Создание экземпляра клиента
$client  = new YooKassaPayout\Client('250000');

// Заполнение данных организации
$organization = new YooKassaPayout\Model\Organization();
$organization->setEmailAddress('predpriyatie@yoomoney.ru')
             ->setOrganizationName('OOO Predpriyatie')
             ->setCommonName('/business/predpriyatie');
// Для создания нового закрытого ключа
try {
    $signature = $client->createCsr(
        $organization,
        realpath('./files/'),
        '123456',
        null,
        ['config' => './openssl.cnf'] // обязательно для Windows
    );
    print_r($signature);
} catch (Exception $e) {
    print_r($e);
}

```
---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$commonName](../classes/YooKassaPayout-Model-Organization.md#property_commonName) |  | Общее название организации |
| public | [$countryName](../classes/YooKassaPayout-Model-Organization.md#property_countryName) |  | Код страны |
| public | [$emailAddress](../classes/YooKassaPayout-Model-Organization.md#property_emailAddress) |  | Контактный email |
| public | [$localityName](../classes/YooKassaPayout-Model-Organization.md#property_localityName) |  | Название населенного пункта |
| public | [$organizationalUnitName](../classes/YooKassaPayout-Model-Organization.md#property_organizationalUnitName) |  | Название подразделения |
| public | [$organizationName](../classes/YooKassaPayout-Model-Organization.md#property_organizationName) |  | Название организации (латинскими буквами) |
| public | [$stateOrProvinceName](../classes/YooKassaPayout-Model-Organization.md#property_stateOrProvinceName) |  | Название страны |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Model-Organization.md#method___construct) |  | Organization constructor. |
| public | [buildByArray()](../classes/YooKassaPayout-Model-Organization.md#method_buildByArray) |  | Заполняет свойства объекта из массива |
| public | [getCommonName()](../classes/YooKassaPayout-Model-Organization.md#method_getCommonName) |  | Возвращает общее название организации |
| public | [getCountryName()](../classes/YooKassaPayout-Model-Organization.md#method_getCountryName) |  | Возвращает код страны |
| public | [getEmailAddress()](../classes/YooKassaPayout-Model-Organization.md#method_getEmailAddress) |  | Возвращает контактный email |
| public | [getLocalityName()](../classes/YooKassaPayout-Model-Organization.md#method_getLocalityName) |  | Возвращает название населенного пункта |
| public | [getOrganizationalUnitName()](../classes/YooKassaPayout-Model-Organization.md#method_getOrganizationalUnitName) |  | Возвращает название подразделения |
| public | [getOrganizationName()](../classes/YooKassaPayout-Model-Organization.md#method_getOrganizationName) |  | Возвращает название организации |
| public | [getStateOrProvinceName()](../classes/YooKassaPayout-Model-Organization.md#method_getStateOrProvinceName) |  | Возвращает название страны |
| public | [setCommonName()](../classes/YooKassaPayout-Model-Organization.md#method_setCommonName) |  | Устанавливает общее название организации |
| public | [setCountryName()](../classes/YooKassaPayout-Model-Organization.md#method_setCountryName) |  | Устанавливает код страны |
| public | [setEmailAddress()](../classes/YooKassaPayout-Model-Organization.md#method_setEmailAddress) |  | Устанавливает контактный email |
| public | [setLocalityName()](../classes/YooKassaPayout-Model-Organization.md#method_setLocalityName) |  | Устанавливает название населенного пункта |
| public | [setOrganizationalUnitName()](../classes/YooKassaPayout-Model-Organization.md#method_setOrganizationalUnitName) |  | Устанавливает название подразделения |
| public | [setOrganizationName()](../classes/YooKassaPayout-Model-Organization.md#method_setOrganizationName) |  | Устанавливает название организации |
| public | [setStateOrProvinceName()](../classes/YooKassaPayout-Model-Organization.md#method_setStateOrProvinceName) |  | Устанавливает название страны |
| public | [toArray()](../classes/YooKassaPayout-Model-Organization.md#method_toArray) |  | Преобразует объект в массив |
---
### Details
* File: [lib/Model/Organization.php](../../lib/Model/Organization.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Model\Organization
---
## Properties
<a name="property_commonName"></a>
#### public $commonName : string
---
**Summary**

Общее название организации

***Description***

/business/ — обязательная часть этого параметра, ее менять не нужно.
После нее могут следовать любые латинские буквы без пробелов. Например, название вашей компании латиницей
Пример: /business/predpriyatie

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_countryName"></a>
#### public $countryName : string
---
**Summary**

Код страны

***Description***

Пример: RU

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_emailAddress"></a>
#### public $emailAddress : string
---
**Summary**

Контактный email

***Description***

Пример: predpriyatie@example.com

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_localityName"></a>
#### public $localityName : string
---
**Summary**

Название населенного пункта

***Description***

Пример: Moscow

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_organizationalUnitName"></a>
#### public $organizationalUnitName : string
---
**Summary**

Название подразделения

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_organizationName"></a>
#### public $organizationName : string
---
**Summary**

Название организации (латинскими буквами)

***Description***

Пример: OOO Predpriyatie

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_stateOrProvinceName"></a>
#### public $stateOrProvinceName : string
---
**Summary**

Название страны

***Description***

Пример: Russia

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array|null $organizationInfo = null) : mixed
```

**Summary**

Organization constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | organizationInfo  | Массив данных организации |

**Returns:** mixed - 


<a name="method_buildByArray" class="anchor"></a>
#### public buildByArray() : $this

```php
public buildByArray(array $options) : $this
```

**Summary**

Заполняет свойства объекта из массива

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | options  | Массив данных организации |

**Returns:** $this - 


<a name="method_getCommonName" class="anchor"></a>
#### public getCommonName() : string

```php
public getCommonName() : string
```

**Summary**

Возвращает общее название организации

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)

**Returns:** string - Общее название организации


<a name="method_getCountryName" class="anchor"></a>
#### public getCountryName() : string

```php
public getCountryName() : string
```

**Summary**

Возвращает код страны

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)

**Returns:** string - Код страны


<a name="method_getEmailAddress" class="anchor"></a>
#### public getEmailAddress() : string

```php
public getEmailAddress() : string
```

**Summary**

Возвращает контактный email

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)

**Returns:** string - Контактный email


<a name="method_getLocalityName" class="anchor"></a>
#### public getLocalityName() : string

```php
public getLocalityName() : string
```

**Summary**

Возвращает название населенного пункта

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)

**Returns:** string - Название населенного пункта


<a name="method_getOrganizationalUnitName" class="anchor"></a>
#### public getOrganizationalUnitName() : string

```php
public getOrganizationalUnitName() : string
```

**Summary**

Возвращает название подразделения

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)

**Returns:** string - Название подразделения


<a name="method_getOrganizationName" class="anchor"></a>
#### public getOrganizationName() : string

```php
public getOrganizationName() : string
```

**Summary**

Возвращает название организации

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)

**Returns:** string - Название организации


<a name="method_getStateOrProvinceName" class="anchor"></a>
#### public getStateOrProvinceName() : string

```php
public getStateOrProvinceName() : string
```

**Summary**

Возвращает название страны

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)

**Returns:** string - Название страны


<a name="method_setCommonName" class="anchor"></a>
#### public setCommonName() : \YooKassaPayout\Model\Organization

```php
public setCommonName(string $commonName) : \YooKassaPayout\Model\Organization
```

**Summary**

Устанавливает общее название организации

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | commonName  | Общее название организации |

**Returns:** \YooKassaPayout\Model\Organization - 


<a name="method_setCountryName" class="anchor"></a>
#### public setCountryName() : \YooKassaPayout\Model\Organization

```php
public setCountryName(string $countryName = &quot;RU&quot;) : \YooKassaPayout\Model\Organization
```

**Summary**

Устанавливает код страны

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | countryName  | Код страны |

**Returns:** \YooKassaPayout\Model\Organization - 


<a name="method_setEmailAddress" class="anchor"></a>
#### public setEmailAddress() : \YooKassaPayout\Model\Organization

```php
public setEmailAddress(string $emailAddress) : \YooKassaPayout\Model\Organization
```

**Summary**

Устанавливает контактный email

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | emailAddress  | Контактный email |

**Returns:** \YooKassaPayout\Model\Organization - 


<a name="method_setLocalityName" class="anchor"></a>
#### public setLocalityName() : \YooKassaPayout\Model\Organization

```php
public setLocalityName(string $localityName) : \YooKassaPayout\Model\Organization
```

**Summary**

Устанавливает название населенного пункта

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | localityName  | Название населенного пункта |

**Returns:** \YooKassaPayout\Model\Organization - 


<a name="method_setOrganizationalUnitName" class="anchor"></a>
#### public setOrganizationalUnitName() : \YooKassaPayout\Model\Organization

```php
public setOrganizationalUnitName(string $organizationalUnitName) : \YooKassaPayout\Model\Organization
```

**Summary**

Устанавливает название подразделения

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | organizationalUnitName  | Название подразделения |

**Returns:** \YooKassaPayout\Model\Organization - 


<a name="method_setOrganizationName" class="anchor"></a>
#### public setOrganizationName() : \YooKassaPayout\Model\Organization

```php
public setOrganizationName(string $organizationName) : \YooKassaPayout\Model\Organization
```

**Summary**

Устанавливает название организации

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | organizationName  | Название организации |

**Returns:** \YooKassaPayout\Model\Organization - 


<a name="method_setStateOrProvinceName" class="anchor"></a>
#### public setStateOrProvinceName() : \YooKassaPayout\Model\Organization

```php
public setStateOrProvinceName(string $stateOrProvinceName = &quot;Russia&quot;) : \YooKassaPayout\Model\Organization
```

**Summary**

Устанавливает название страны

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | stateOrProvinceName  | Название страны |

**Returns:** \YooKassaPayout\Model\Organization - 


<a name="method_toArray" class="anchor"></a>
#### public toArray() : array

```php
public toArray() : array
```

**Summary**

Преобразует объект в массив

**Details:**
* Inherited From: [\YooKassaPayout\Model\Organization](../classes/YooKassaPayout-Model-Organization.md)

**Returns:** array - Массив данных организации



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