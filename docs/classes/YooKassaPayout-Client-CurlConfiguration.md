# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Client\CurlConfiguration
### Namespace: [\YooKassaPayout\Client](../namespaces/yookassapayout-client.md)
---
**Summary:**

Класс конфигурации CURL

---
### Constants
* No constants found
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$attempts](../classes/YooKassaPayout-Client-CurlConfiguration.md#property_attempts) |  | Количество попыток соединения |
| protected | [$timeout](../classes/YooKassaPayout-Client-CurlConfiguration.md#property_timeout) |  | Таймаут между попытками соединения |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAttempts()](../classes/YooKassaPayout-Client-CurlConfiguration.md#method_getAttempts) |  | Возвращает количество попыток соединения |
| public | [getConnectionTimeout()](../classes/YooKassaPayout-Client-CurlConfiguration.md#method_getConnectionTimeout) |  | Возвращает таймаут соединения |
| public | [getProxy()](../classes/YooKassaPayout-Client-CurlConfiguration.md#method_getProxy) |  | Возвращает прокси |
| public | [getTimeout()](../classes/YooKassaPayout-Client-CurlConfiguration.md#method_getTimeout) |  | Возвращает таймаут между попытками соединения |
| public | [setAttempts()](../classes/YooKassaPayout-Client-CurlConfiguration.md#method_setAttempts) |  | Устанавливает количество попыток соединения |
| public | [setConnectionTimeout()](../classes/YooKassaPayout-Client-CurlConfiguration.md#method_setConnectionTimeout) |  | Устанавливает таймаут соединения |
| public | [setProxy()](../classes/YooKassaPayout-Client-CurlConfiguration.md#method_setProxy) |  | Устанавливает прокси |
| public | [setTimeout()](../classes/YooKassaPayout-Client-CurlConfiguration.md#method_setTimeout) |  | Устанавливает таймаут между попытками соединения |
---
### Details
* File: [lib/Client/CurlConfiguration.php](../../lib/Client/CurlConfiguration.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Client\CurlConfiguration
---
## Properties
<a name="property_attempts"></a>
#### protected $attempts : int
---
**Summary**

Количество попыток соединения

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**


<a name="property_timeout"></a>
#### protected $timeout : int
---
**Summary**

Таймаут между попытками соединения

**Type:** <a href="../int"><abbr title="int">int</abbr></a>

**Details:**



---
## Methods
<a name="method_getAttempts" class="anchor"></a>
#### public getAttempts() : int

```php
public getAttempts() : int
```

**Summary**

Возвращает количество попыток соединения

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlConfiguration](../classes/YooKassaPayout-Client-CurlConfiguration.md)

**Returns:** int - Количество попыток соединения


<a name="method_getConnectionTimeout" class="anchor"></a>
#### public getConnectionTimeout() : int

```php
public getConnectionTimeout() : int
```

**Summary**

Возвращает таймаут соединения

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlConfiguration](../classes/YooKassaPayout-Client-CurlConfiguration.md)

**Returns:** int - Таймаут соединения


<a name="method_getProxy" class="anchor"></a>
#### public getProxy() : string

```php
public getProxy() : string
```

**Summary**

Возвращает прокси

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlConfiguration](../classes/YooKassaPayout-Client-CurlConfiguration.md)

**Returns:** string - Прокси


<a name="method_getTimeout" class="anchor"></a>
#### public getTimeout() : int

```php
public getTimeout() : int
```

**Summary**

Возвращает таймаут между попытками соединения

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlConfiguration](../classes/YooKassaPayout-Client-CurlConfiguration.md)

**Returns:** int - Таймаут между попытками соединения


<a name="method_setAttempts" class="anchor"></a>
#### public setAttempts() : mixed

```php
public setAttempts(int $attempts) : mixed
```

**Summary**

Устанавливает количество попыток соединения

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlConfiguration](../classes/YooKassaPayout-Client-CurlConfiguration.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | attempts  | Количество попыток соединения |

**Returns:** mixed - 


<a name="method_setConnectionTimeout" class="anchor"></a>
#### public setConnectionTimeout() : mixed

```php
public setConnectionTimeout(int $connectionTimeout) : mixed
```

**Summary**

Устанавливает таймаут соединения

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlConfiguration](../classes/YooKassaPayout-Client-CurlConfiguration.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | connectionTimeout  | Таймаут соединения |

**Returns:** mixed - 


<a name="method_setProxy" class="anchor"></a>
#### public setProxy() : mixed

```php
public setProxy(string $proxy) : mixed
```

**Summary**

Устанавливает прокси

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlConfiguration](../classes/YooKassaPayout-Client-CurlConfiguration.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | proxy  | Прокси |

**Returns:** mixed - 


<a name="method_setTimeout" class="anchor"></a>
#### public setTimeout() : mixed

```php
public setTimeout(int $timeout) : mixed
```

**Summary**

Устанавливает таймаут между попытками соединения

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlConfiguration](../classes/YooKassaPayout-Client-CurlConfiguration.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | timeout  | Таймаут между попытками соединения |

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