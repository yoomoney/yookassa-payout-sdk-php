# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Helpers\GeneratorCsr
### Namespace: [\YooKassaPayout\Common\Helpers](../namespaces/yookassapayout-common-helpers.md)
---
**Summary:**

Класс для генерации csr запроса и ключей

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
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [OUTPUT_PRIVATE_KEY_FILENAME](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#constant_OUTPUT_PRIVATE_KEY_FILENAME) |  | Название файла закрытого ключа |
| public | [OUTPUT_REQUEST_CSR_FILENAME](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#constant_OUTPUT_REQUEST_CSR_FILENAME) |  | Название файла запроса сертификата |
| public | [OUTPUT_SIGNATURE_FILENAME](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#constant_OUTPUT_SIGNATURE_FILENAME) |  | Название файла подписи |
---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$config](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#property_config) |  | Настройки OpenSSL по умолчанию |
| protected | [$csrRequest](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#property_csrRequest) |  | Запрос на сертификат |
| protected | [$organizationInfo](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#property_organizationInfo) |  | Информация об организации |
| protected | [$output](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#property_output) |  |  |
| protected | [$privateKey](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#property_privateKey) |  | Закрытый ключ |
| protected | [$privateKeyPassword](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#property_privateKeyPassword) |  | Пароль для закрытого ключа |
| protected | [$signature](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#property_signature) |  | Цифровая подпись |
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#method___construct) |  | GeneratorCsr constructor. |
| public | [generate()](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#method_generate) |  | Генерирует пакет файлов для запроса сертификата |
| public | [getConfig()](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#method_getConfig) |  | Возвращает настройки OpenSSL |
| public | [setConfig()](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#method_setConfig) |  | Устанавливает настройки OpenSSL |
| public | [validateOrganization()](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#method_validateOrganization) |  | Проверяет данные организации |
| protected | [saveFile()](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md#method_saveFile) |  | Сохраняет строку в файл |
---
### Details
* File: [lib/Common/Helpers/GeneratorCsr.php](../../lib/Common/Helpers/GeneratorCsr.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\Helpers\GeneratorCsr
---
## Constants
<a name="constant_OUTPUT_PRIVATE_KEY_FILENAME" class="anchor"></a>
###### OUTPUT_PRIVATE_KEY_FILENAME
Название файла закрытого ключа

```php
OUTPUT_PRIVATE_KEY_FILENAME = 'privateKey.pem'
```

| Tag | Version | Desc |
| --- | ------- | ---- |
| const |  | string |

<a name="constant_OUTPUT_REQUEST_CSR_FILENAME" class="anchor"></a>
###### OUTPUT_REQUEST_CSR_FILENAME
Название файла запроса сертификата

```php
OUTPUT_REQUEST_CSR_FILENAME = 'request.csr'
```

| Tag | Version | Desc |
| --- | ------- | ---- |
| const |  | string |

<a name="constant_OUTPUT_SIGNATURE_FILENAME" class="anchor"></a>
###### OUTPUT_SIGNATURE_FILENAME
Название файла подписи

```php
OUTPUT_SIGNATURE_FILENAME = 'signature.txt'
```

| Tag | Version | Desc |
| --- | ------- | ---- |
| const |  | string |

---
## Properties
<a name="property_config"></a>
#### public $config : array
---
**Summary**

Настройки OpenSSL по умолчанию

**Type:** <a href="../array"><abbr title="array">array</abbr></a>

**Details:**


<a name="property_csrRequest"></a>
#### protected $csrRequest : resource
---
**Summary**

Запрос на сертификат

**Type:** <a href="../resource"><abbr title="resource">resource</abbr></a>

**Details:**


<a name="property_organizationInfo"></a>
#### protected $organizationInfo : \YooKassaPayout\Model\Organization
---
**Summary**

Информация об организации

**Type:** <a href="../classes/YooKassaPayout-Model-Organization.html"><abbr title="\YooKassaPayout\Model\Organization">Organization</abbr></a>

**Details:**


<a name="property_output"></a>
#### protected $output : string
---
**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_privateKey"></a>
#### protected $privateKey : \OpenSSLAsymmetricKey|resource
---
**Summary**

Закрытый ключ

**Type:** <a href="../\OpenSSLAsymmetricKey|resource"><abbr title="\OpenSSLAsymmetricKey|resource">OpenSSLAsymmetricKey|resource</abbr></a>

**Details:**


<a name="property_privateKeyPassword"></a>
#### protected $privateKeyPassword : string
---
**Summary**

Пароль для закрытого ключа

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_signature"></a>
#### protected $signature : string
---
**Summary**

Цифровая подпись

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(\YooKassaPayout\Model\Organization|array $organizationInfo, string $output = __DIR__, string $privateKeyPassword = '') : mixed
```

**Summary**

GeneratorCsr constructor.

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\GeneratorCsr](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Model\Organization OR array</code> | organizationInfo  | Информация об организации |
| <code lang="php">string</code> | output  | Путь к директории для сгенерированных файлов |
| <code lang="php">string</code> | privateKeyPassword  | Пароль для закрытого ключа |

**Returns:** mixed - 


<a name="method_generate" class="anchor"></a>
#### public generate() : string|string[]

```php
public generate(string|null $privateKeyPath = null) : string|string[]
```

**Summary**

Генерирует пакет файлов для запроса сертификата

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\GeneratorCsr](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | privateKeyPath  | Путь к файлу закрытого ключа |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\OpenSSLException | Выбрасывается при ошибке работы с OpenSSL |
| \YooKassaPayout\Common\Exceptions\SaveFileException | Выбрасывается при ошибке сохранения файла |

**Returns:** string|string[] - Цифровая подпись


<a name="method_getConfig" class="anchor"></a>
#### public getConfig() : array

```php
public getConfig() : array
```

**Summary**

Возвращает настройки OpenSSL

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\GeneratorCsr](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md)

**Returns:** array - Настройки OpenSSL


<a name="method_setConfig" class="anchor"></a>
#### public setConfig() : mixed

```php
public setConfig(array $config) : mixed
```

**Summary**

Устанавливает настройки OpenSSL

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\GeneratorCsr](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | config  | Настройки OpenSSL |

**Returns:** mixed - 


<a name="method_validateOrganization" class="anchor"></a>
#### public validateOrganization() : bool

```php
public validateOrganization(\YooKassaPayout\Model\Organization $organizationInfo) : bool
```

**Summary**

Проверяет данные организации

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\GeneratorCsr](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassaPayout\Model\Organization</code> | organizationInfo  |  |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\EmptyPropertyValueException | Выбрасывается, если заполнены не все обязательные поля |

**Returns:** bool - 


<a name="method_saveFile" class="anchor"></a>
#### protected saveFile() : mixed

```php
protected saveFile(string $fileName, string $content) : mixed
```

**Summary**

Сохраняет строку в файл

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\GeneratorCsr](../classes/YooKassaPayout-Common-Helpers-GeneratorCsr.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | fileName  | Имя файла |
| <code lang="php">string</code> | content  | Строка для сохранения |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassaPayout\Common\Exceptions\SaveFileException | Выбрасывается при ошибке сохранения файла |

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

This document was automatically generated from source code comments on 2021-07-23 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2021 YooMoney