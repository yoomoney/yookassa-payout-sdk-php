# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Client\CurlClient
### Namespace: [\YooKassaPayout\Client](../namespaces/yookassapayout-client.md)
---
**Summary:**

Класс клиента CURL

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
| protected | [$requestUrl](../classes/YooKassaPayout-Client-CurlClient.md#property_requestUrl) |  | Корневой URL API |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Client-CurlClient.md#method___construct) |  | CurlClient constructor. |
| public | [getAgentId()](../classes/YooKassaPayout-Client-BaseClient.md#method_getAgentId) |  | Возвращает идентификатор контрагента |
| public | [getCurlConfiguration()](../classes/YooKassaPayout-Client-CurlClient.md#method_getCurlConfiguration) |  | Возвращает настройки CURL |
| public | [getKeychain()](../classes/YooKassaPayout-Client-BaseClient.md#method_getKeychain) |  | Возвращает объект, хранящий ключи |
| public | [getLogger()](../classes/YooKassaPayout-Client-BaseClient.md#method_getLogger) |  | Возвращает объект для логирования |
| public | [setAgentId()](../classes/YooKassaPayout-Client-BaseClient.md#method_setAgentId) |  | Устанавливает идентификатор контрагента |
| public | [setLogger()](../classes/YooKassaPayout-Client-BaseClient.md#method_setLogger) |  | Устанавливает объект для логирования |
| protected | [call()](../classes/YooKassaPayout-Client-CurlClient.md#method_call) |  | Выполняет запрос к API и возвращает структурированный ответ |
| protected | [execute()](../classes/YooKassaPayout-Client-CurlClient.md#method_execute) |  | Выполняет запрос к API и возвращает структурированный ответ |
| protected | [getRequestUrl()](../classes/YooKassaPayout-Client-CurlClient.md#method_getRequestUrl) |  | Возвращает URL запроса |
| protected | [initCurl()](../classes/YooKassaPayout-Client-CurlClient.md#method_initCurl) |  | Инициализирует CURL сессию |
| protected | [prepareJson()](../classes/YooKassaPayout-Client-BaseClient.md#method_prepareJson) | *deprecated* | Формирует JSON из запроса и шифрует его |
| protected | [prepareXml()](../classes/YooKassaPayout-Client-BaseClient.md#method_prepareXml) |  | Формирует XML из запроса и шифрует его |
| protected | [sendRequest()](../classes/YooKassaPayout-Client-CurlClient.md#method_sendRequest) |  | Выполняет CURL запрос |
| protected | [setBody()](../classes/YooKassaPayout-Client-CurlClient.md#method_setBody) |  | Устанавливает тело запроса для CURL |
| protected | [setCurlOption()](../classes/YooKassaPayout-Client-CurlClient.md#method_setCurlOption) |  | Устанавливает параметр CURL |
| protected | [setRequestUrl()](../classes/YooKassaPayout-Client-CurlClient.md#method_setRequestUrl) |  | Устанавливает URL запроса |
---
### Details
* File: [lib/Client/CurlClient.php](../../lib/Client/CurlClient.php)
* Package: YooKassaPayout
* Class Hierarchy: 
  * [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)
  * \YooKassaPayout\Client\CurlClient
---
## Properties
<a name="property_agentId"></a>
#### protected $agentId : string
---
**Summary**

Идентификатор контрагента

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)


<a name="property_keychain"></a>
#### protected $keychain : \YooKassaPayout\Request\Keychain
---
**Summary**

Объект с ключами

**Type:** <a href="../classes/YooKassaPayout-Request-Keychain.html"><abbr title="\YooKassaPayout\Request\Keychain">Keychain</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)


<a name="property_logger"></a>
#### protected $logger : \Psr\Log\LoggerInterface|null
---
**Summary**

Объект для логирования

**Type:** <a href="../\Psr\Log\LoggerInterface|null"><abbr title="\Psr\Log\LoggerInterface|null">LoggerInterface|null</abbr></a>

**Details:**
* Inherited From: [\YooKassaPayout\Client\BaseClient](../classes/YooKassaPayout-Client-BaseClient.md)


<a name="property_requestUrl"></a>
#### protected $requestUrl : string
---
**Summary**

Корневой URL API

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(\YooKassaPayout\Client\CurlConfiguration|null $curlConfiguration = null) : mixed
```

**Summary**

CurlClient constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Client\CurlConfiguration OR null</code> | curlConfiguration  | Конфигурация CURL |

**Returns:** mixed - 


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


<a name="method_getCurlConfiguration" class="anchor"></a>
#### public getCurlConfiguration() : \YooKassaPayout\Client\CurlConfiguration

```php
public getCurlConfiguration() : \YooKassaPayout\Client\CurlConfiguration
```

**Summary**

Возвращает настройки CURL

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)

**Returns:** \YooKassaPayout\Client\CurlConfiguration - Конфигурация CURL


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


<a name="method_call" class="anchor"></a>
#### protected call() : \YooKassaPayout\Common\ResponseObject

```php
protected call(string $path, string $method, array $queryParams, string|null $httpBody = null, array|null $headers = []) : \YooKassaPayout\Common\ResponseObject
```

**Summary**

Выполняет запрос к API и возвращает структурированный ответ

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | path  | URL запроса |
| <code lang="php">string</code> | method  | HTTP метод |
| <code lang="php">array</code> | queryParams  | GET параметры |
| <code lang="php">string OR null</code> | httpBody  | Тело запроса |
| <code lang="php">array OR null</code> | headers  | Заголовки |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\ApiConnectionException | Выбрасывается, если CURL запрос завершился ошибкой |
| \YooKassaPayout\Common\Exceptions\ApiException | Выбрасывается, если API вернул ответ с ошибкой |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |
| \YooKassaPayout\Common\Exceptions\ExtensionNotFoundException | Выбрасывается, если не установлено расширение CURL для PHP |

**Returns:** \YooKassaPayout\Common\ResponseObject - Объект ответа API


<a name="method_execute" class="anchor"></a>
#### protected execute() : \YooKassaPayout\Common\ResponseObject

```php
protected execute(string $path, string $method, array $queryParams, string|null $httpBody = null, array|null $headers = []) : \YooKassaPayout\Common\ResponseObject
```

**Summary**

Выполняет запрос к API и возвращает структурированный ответ

**Description**

Алиас для CurlClient::call()

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | path  | URL запроса |
| <code lang="php">string</code> | method  | HTTP метод |
| <code lang="php">array</code> | queryParams  | GET параметры |
| <code lang="php">string OR null</code> | httpBody  | Тело запроса |
| <code lang="php">array OR null</code> | headers  | Заголовки |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\ApiConnectionException | Выбрасывается, если CURL запрос завершился ошибкой |
| \YooKassaPayout\Common\Exceptions\ApiException | Выбрасывается, если API вернул ответ с ошибкой |
| \YooKassaPayout\Common\Exceptions\ExtensionNotFoundException | Выбрасывается, если не установлено расширение CURL для PHP |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |

**Returns:** \YooKassaPayout\Common\ResponseObject - Объект ответа API


<a name="method_getRequestUrl" class="anchor"></a>
#### protected getRequestUrl() : string

```php
protected getRequestUrl() : string
```

**Summary**

Возвращает URL запроса

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)

**Returns:** string - URL запроса


<a name="method_initCurl" class="anchor"></a>
#### protected initCurl() : resource

```php
protected initCurl() : resource
```

**Summary**

Инициализирует CURL сессию

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\ExtensionNotFoundException | Выбрасывается, если не установлено расширение CURL для PHP |

**Returns:** resource - Ресурс CURL


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


<a name="method_sendRequest" class="anchor"></a>
#### protected sendRequest() : array

```php
protected sendRequest() : array
```

**Summary**

Выполняет CURL запрос

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\ApiConnectionException | Выбрасывается, если CURL запрос завершился ошибкой |

**Returns:** array - Массив данных при ответе CURL


<a name="method_setBody" class="anchor"></a>
#### protected setBody() : mixed

```php
protected setBody(string $method, string $httpBody) : mixed
```

**Summary**

Устанавливает тело запроса для CURL

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | method  | HTTP метод |
| <code lang="php">string</code> | httpBody  | Тело запроса |

**Returns:** mixed - 


<a name="method_setCurlOption" class="anchor"></a>
#### protected setCurlOption() : bool

```php
protected setCurlOption(int $optionName, mixed $optionValue) : bool
```

**Summary**

Устанавливает параметр CURL

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | optionName  | Параметр CURL |
| <code lang="php">mixed</code> | optionValue  | Значение параметра |

**Returns:** bool - Результат установки параметра


<a name="method_setRequestUrl" class="anchor"></a>
#### protected setRequestUrl() : mixed

```php
protected setRequestUrl(string $requestUrl) : mixed
```

**Summary**

Устанавливает URL запроса

**Details:**
* Inherited From: [\YooKassaPayout\Client\CurlClient](../classes/YooKassaPayout-Client-CurlClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | requestUrl  | URL запроса |

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