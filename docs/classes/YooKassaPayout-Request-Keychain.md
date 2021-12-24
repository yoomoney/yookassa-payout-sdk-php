# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Request\Keychain
### Namespace: [\YooKassaPayout\Request](../namespaces/yookassapayout-request.md)
---
**Summary:**

Класс ключница

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$keyPassword](../classes/YooKassaPayout-Request-Keychain.md#property_keyPassword) |  | Пароль закрытого ключа |
| protected | [$privateKey](../classes/YooKassaPayout-Request-Keychain.md#property_privateKey) |  | Путь к закрытому ключу |
| protected | [$publicCert](../classes/YooKassaPayout-Request-Keychain.md#property_publicCert) |  | Путь к публичному сертификату |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Request-Keychain.md#method___construct) |  | Keychain constructor. |
| public | [getKeyPassword()](../classes/YooKassaPayout-Request-Keychain.md#method_getKeyPassword) |  | Возвращает пароль закрытого ключа |
| public | [getPrivateKey()](../classes/YooKassaPayout-Request-Keychain.md#method_getPrivateKey) |  | Возвращает путь к закрытому ключу |
| public | [getPublicCert()](../classes/YooKassaPayout-Request-Keychain.md#method_getPublicCert) |  | Возвращает путь к публичному сертификату |
| public | [setKeyPassword()](../classes/YooKassaPayout-Request-Keychain.md#method_setKeyPassword) |  | Устанавливает пароль закрытого ключа |
| public | [setPrivateKey()](../classes/YooKassaPayout-Request-Keychain.md#method_setPrivateKey) |  | Устанавливает путь к закрытому ключу |
| public | [setPublicCert()](../classes/YooKassaPayout-Request-Keychain.md#method_setPublicCert) |  | Устанавливает путь к публичному сертификату |
---
### Details
* File: [lib/Request/Keychain.php](../../lib/Request/Keychain.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Request\Keychain
---
## Properties
<a name="property_keyPassword"></a>
#### protected $keyPassword : string
---
**Summary**

Пароль закрытого ключа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_privateKey"></a>
#### protected $privateKey : string
---
**Summary**

Путь к закрытому ключу

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_publicCert"></a>
#### protected $publicCert : string
---
**Summary**

Путь к публичному сертификату

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(string $publicCert, string $privateKey, string $keyPassword = '') : mixed
```

**Summary**

Keychain constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Request\Keychain](../classes/YooKassaPayout-Request-Keychain.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | publicCert  | Путь к публичному сертификату |
| <code lang="php">string</code> | privateKey  | Путь к закрытому ключу |
| <code lang="php">string</code> | keyPassword  | Пароль закрытого ключа |

**Returns:** mixed - 


<a name="method_getKeyPassword" class="anchor"></a>
#### public getKeyPassword() : string

```php
public getKeyPassword() : string
```

**Summary**

Возвращает пароль закрытого ключа

**Details:**
* Inherited From: [\YooKassaPayout\Request\Keychain](../classes/YooKassaPayout-Request-Keychain.md)

**Returns:** string - Пароль закрытого ключа


<a name="method_getPrivateKey" class="anchor"></a>
#### public getPrivateKey() : string

```php
public getPrivateKey() : string
```

**Summary**

Возвращает путь к закрытому ключу

**Details:**
* Inherited From: [\YooKassaPayout\Request\Keychain](../classes/YooKassaPayout-Request-Keychain.md)

**Returns:** string - Путь к закрытому ключу


<a name="method_getPublicCert" class="anchor"></a>
#### public getPublicCert() : string

```php
public getPublicCert() : string
```

**Summary**

Возвращает путь к публичному сертификату

**Details:**
* Inherited From: [\YooKassaPayout\Request\Keychain](../classes/YooKassaPayout-Request-Keychain.md)

**Returns:** string - Путь к публичному сертификату


<a name="method_setKeyPassword" class="anchor"></a>
#### public setKeyPassword() : \YooKassaPayout\Request\Keychain

```php
public setKeyPassword(string $keyPassword) : \YooKassaPayout\Request\Keychain
```

**Summary**

Устанавливает пароль закрытого ключа

**Details:**
* Inherited From: [\YooKassaPayout\Request\Keychain](../classes/YooKassaPayout-Request-Keychain.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | keyPassword  | Пароль закрытого ключа |

**Returns:** \YooKassaPayout\Request\Keychain - 


<a name="method_setPrivateKey" class="anchor"></a>
#### public setPrivateKey() : \YooKassaPayout\Request\Keychain

```php
public setPrivateKey(string $privateKey) : \YooKassaPayout\Request\Keychain
```

**Summary**

Устанавливает путь к закрытому ключу

**Details:**
* Inherited From: [\YooKassaPayout\Request\Keychain](../classes/YooKassaPayout-Request-Keychain.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | privateKey  | Путь к закрытому ключу |

**Returns:** \YooKassaPayout\Request\Keychain - 


<a name="method_setPublicCert" class="anchor"></a>
#### public setPublicCert() : \YooKassaPayout\Request\Keychain

```php
public setPublicCert(string $publicCert) : \YooKassaPayout\Request\Keychain
```

**Summary**

Устанавливает путь к публичному сертификату

**Details:**
* Inherited From: [\YooKassaPayout\Request\Keychain](../classes/YooKassaPayout-Request-Keychain.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | publicCert  | Путь к публичному сертификату |

**Returns:** \YooKassaPayout\Request\Keychain - 



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