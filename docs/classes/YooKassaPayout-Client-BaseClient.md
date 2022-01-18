# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Client\BaseClient
### Namespace: [\YooKassaPayout\Client](../namespaces/yookassapayout-client.md)
---
**Summary:**

Базовый класс клиента API

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$agentId](../classes/YooKassaPayout-Client-BaseClient.md#property_agentId) |  | Идентификатор контрагента |
| protected | [$keychain](../classes/YooKassaPayout-Client-BaseClient.md#property_keychain) |  | Объект с ключами |
| protected | [$logger](../classes/YooKassaPayout-Client-BaseClient.md#property_logger) |  | Объект для логирования |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAgentId()](../classes/YooKassaPayout-Client-BaseClient.md#method_getAgentId) |  | Возвращает идентификатор контрагента |
| public | [getKeychain()](../classes/YooKassaPayout-Client-BaseClient.md#method_getKeychain) |  | Возвращает объект, хранящий ключи |
| public | [getLogger()](../classes/YooKassaPayout-Client-BaseClient.md#method_getLogger) |  | Возвращает объект для логирования |
| public | [setAgentId()](../classes/YooKassaPayout-Client-BaseClient.md#method_setAgentId) |  | Устанавливает идентификатор контрагента |
| public | [setLogger()](../classes/YooKassaPayout-Client-BaseClient.md#method_setLogger) |  | Устанавливает объект для логирования |
| protected | [prepareJson()](../classes/YooKassaPayout-Client-BaseClient.md#method_prepareJson) | *deprecated* | Формирует JSON из запроса и шифрует его |
| protected | [prepareXml()](../classes/YooKassaPayout-Client-BaseClient.md#method_prepareXml) |  | Формирует XML из запроса и шифрует его |
---
### Details
* File: [lib/Client/BaseClient.php](../../lib/Client/BaseClient.php)
* Package: YooKassaPayout\Client
* Class Hierarchy:
  * \YooKassaPayout\Client\BaseClient
---
## Properties
<a name="property_agentId"></a>
#### protected $agentId : string
---
**Summary**

Идентификатор контрагента

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_keychain"></a>
#### protected $keychain : \YooKassaPayout\Request\Keychain
---
**Summary**

Объект с ключами

**Type:** <a href="../classes/YooKassaPayout-Request-Keychain.html"><abbr title="\YooKassaPayout\Request\Keychain">Keychain</abbr></a>

**Details:**


<a name="property_logger"></a>
#### protected $logger : \Psr\Log\LoggerInterface|null
---
**Summary**

Объект для логирования

**Type:** <a href="../\Psr\Log\LoggerInterface|null"><abbr title="\Psr\Log\LoggerInterface|null">LoggerInterface|null</abbr></a>

**Details:**



---
## Methods
<a name="method_getAgentId" class="anchor"></a>
#### public getAgentId() : string

```php
public getAgentId() : string
```

**Summary**

Возвращает идентификатор контрагента

**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)

**Returns:** string - Идентификатор контрагента


<a name="method_getKeychain" class="anchor"></a>
#### public getKeychain() : \YooKassaPayout\Request\Keychain

```php
public getKeychain() : \YooKassaPayout\Request\Keychain
```

**Summary**

Возвращает объект, хранящий ключи

**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)

**Returns:** \YooKassaPayout\Request\Keychain - Объект с ключами


<a name="method_getLogger" class="anchor"></a>
#### public getLogger() : \Psr\Log\LoggerInterface|null

```php
public getLogger() : \Psr\Log\LoggerInterface|null
```

**Summary**

Возвращает объект для логирования

**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)

**Returns:** \Psr\Log\LoggerInterface|null - Объект для логирования


<a name="method_setAgentId" class="anchor"></a>
#### public setAgentId() : \YooKassaPayout\Client\BaseClient

```php
public setAgentId(string $id) : \YooKassaPayout\Client\BaseClient
```

**Summary**

Устанавливает идентификатор контрагента

**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | id  | Идентификатор контрагента |

**Returns:** \YooKassaPayout\Client\BaseClient - Объект клиента


<a name="method_setLogger" class="anchor"></a>
#### public setLogger() : mixed

```php
public setLogger(\Psr\Log\LoggerInterface|null $logger) : mixed
```

**Summary**

Устанавливает объект для логирования

**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\Psr\Log\LoggerInterface OR null</code> | logger  | Объект для логирования |

**Returns:** mixed - 


<a name="method_prepareJson" class="anchor"></a>
#### (deprecated) - protected prepareJson() : string

```php
protected prepareJson(\YooKassaPayout\Request\AbstractRequest $request) : string
```

**Summary**

Формирует JSON из запроса и шифрует его

**Deprecated**
DeprecatedНе реализован в текущей версии API
**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Request\AbstractRequest</code> | request  | Объект запроса |

**Returns:** string - Результат выполнения запроса


<a name="method_prepareXml" class="anchor"></a>
#### protected prepareXml() : bool|string

```php
protected prepareXml(\YooKassaPayout\Request\AbstractRequest $request) : bool|string
```

**Summary**

Формирует XML из запроса и шифрует его

**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Request\AbstractRequest</code> | request  | Объект запроса |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |
| \YooKassaPayout\Common\Exceptions\XmlException | Выбрасывается при ошибке работы с XML |

**Returns:** bool|string - Результат выполнения запроса



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