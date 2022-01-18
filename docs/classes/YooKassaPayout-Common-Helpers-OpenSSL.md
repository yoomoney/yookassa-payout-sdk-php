# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Helpers\OpenSSL
### Namespace: [\YooKassaPayout\Common\Helpers](../namespaces/yookassapayout-common-helpers.md)
---
**Summary:**

Класс используется для упаковки данных в PKCS#7 и их распаковки.

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [YMCert](../classes/YooKassaPayout-Common-Helpers-OpenSSL.md#constant_YMCert) |  | Сертификат ЮMoney для проверки подписи ответов |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [decryptPKCS7()](../classes/YooKassaPayout-Common-Helpers-OpenSSL.md#method_decryptPKCS7) |  | Проверяет подпись и возвращает содержимое пакета |
| public | [encryptPKCS7()](../classes/YooKassaPayout-Common-Helpers-OpenSSL.md#method_encryptPKCS7) |  | Подписывает и возвращает данные запакованные в PKCS#7 |
---
### Details
* File: [lib/Common/Helpers/OpenSSL.php](../../lib/Common/Helpers/OpenSSL.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\Helpers\OpenSSL
---
## Constants
<a name="constant_YMCert" class="anchor"></a>
###### YMCert
Сертификат ЮMoney для проверки подписи ответов

```php
YMCert = __DIR__ . '/../../Certs/deposit.cer' : string
```



---
## Methods
<a name="method_decryptPKCS7" class="anchor"></a>
#### public decryptPKCS7() : string

```php
static public decryptPKCS7(string $data, string $CAcert = null) : string
```

**Summary**

Проверяет подпись и возвращает содержимое пакета

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\OpenSSL](../classes/YooKassaPayout-Common-Helpers-OpenSSL.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | data  | Зашифрованные данные |
| <code lang="php">string</code> | CAcert  | Путь к сертификату для распаковки |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |

**Returns:** string - Расшифрованные данные


<a name="method_encryptPKCS7" class="anchor"></a>
#### public encryptPKCS7() : string

```php
static public encryptPKCS7(string $data, \YooKassaPayout\Request\Keychain $keychain) : string
```

**Summary**

Подписывает и возвращает данные запакованные в PKCS#7

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\OpenSSL](../classes/YooKassaPayout-Common-Helpers-OpenSSL.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | data  | Данные для шифрования |
| <code lang="php">\YooKassaPayout\Request\Keychain</code> | keychain  | Объект с ключами |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |

**Returns:** string - Запакованная строка



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