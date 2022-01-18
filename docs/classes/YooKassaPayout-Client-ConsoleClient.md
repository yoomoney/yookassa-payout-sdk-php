# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Client\ConsoleClient
### Namespace: [\YooKassaPayout\Client](../namespaces/yookassapayout-client.md)
---
**Summary:**

Класс для генерации csr запроса и ключей из консоли

**Description:**

Class ConsoleClient

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Client-ConsoleClient.md#method___construct) |  | ConsoleClient constructor. |
| public | [getCsrCommand()](../classes/YooKassaPayout-Client-ConsoleClient.md#method_getCsrCommand) |  | Команда, генерирующая CSR и ключи |
| public | [getHelpCommand()](../classes/YooKassaPayout-Client-ConsoleClient.md#method_getHelpCommand) |  | Команда, отображающая справку |
---
### Details
* File: [lib/Client/ConsoleClient.php](../../lib/Client/ConsoleClient.php)
* Package: YooKassaPayout\Client
* Class Hierarchy:
  * \YooKassaPayout\Client\ConsoleClient

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array $arguments) : mixed
```

**Summary**

ConsoleClient constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Client\ConsoleClient](../classes/YooKassaPayout-Client-ConsoleClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | arguments  | Аргументы командной строки |

**Returns:** mixed - 


<a name="method_getCsrCommand" class="anchor"></a>
#### public getCsrCommand() : mixed

```php
public getCsrCommand(string|null $privateKeyPath = null, string|null $sslConf = null) : mixed
```

**Summary**

Команда, генерирующая CSR и ключи

**Details:**
* Inherited From: [\YooKassaPayout\Client\ConsoleClient](../classes/YooKassaPayout-Client-ConsoleClient.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | privateKeyPath  | Путь к защищенному ключу |
| <code lang="php">string OR null</code> | sslConf  | Путь к настройкам SSL |

**Returns:** mixed - 


<a name="method_getHelpCommand" class="anchor"></a>
#### public getHelpCommand() : mixed

```php
public getHelpCommand() : mixed
```

**Summary**

Команда, отображающая справку

**Details:**
* Inherited From: [\YooKassaPayout\Client\ConsoleClient](../classes/YooKassaPayout-Client-ConsoleClient.md)

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