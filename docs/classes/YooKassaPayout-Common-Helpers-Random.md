# [YooKassa Payout API SDK](../home.md)

# Class: \YooKassaPayout\Common\Helpers\Random
### Namespace: [\YooKassaPayout\Common\Helpers](../namespaces/yookassapayout-common-helpers.md)
---
**Summary:**

Class Random

---
### Constants
* No constants found
---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [bool()](../classes/YooKassaPayout-Common-Helpers-Random.md#method_bool) |  | Возвращает случайное булево значение |
| public | [bytes()](../classes/YooKassaPayout-Common-Helpers-Random.md#method_bytes) |  | Возвращает случайную последовательность байт |
| public | [float()](../classes/YooKassaPayout-Common-Helpers-Random.md#method_float) |  | Возвращает случайное число с плавающей точкой. По умолчанию возвращает значение в промежутке от нуля до едениы. |
| public | [hex()](../classes/YooKassaPayout-Common-Helpers-Random.md#method_hex) |  | Возвращает строку, состоящую из символов '0123456789abcdef' |
| public | [int()](../classes/YooKassaPayout-Common-Helpers-Random.md#method_int) |  | Возвращает случайное целое число. По умолчанию возвращает число от нуля до PHP_INT_MAX. |
| public | [str()](../classes/YooKassaPayout-Common-Helpers-Random.md#method_str) |  | Возвращает строку из случайных символов |
| public | [value()](../classes/YooKassaPayout-Common-Helpers-Random.md#method_value) |  | Возвращает случайное значение из переданного массива |
---
### Details
* File: [lib/Common/Helpers/Random.php](../../lib/Common/Helpers/Random.php)
* Package: YooKassaPayout
* Class Hierarchy:
  * \YooKassaPayout\Common\Helpers\Random

---
## Methods
<a name="method_bool" class="anchor"></a>
#### public bool() : bool

```php
static public bool() : bool
```

**Summary**

Возвращает случайное булево значение

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\Random](../classes/YooKassaPayout-Common-Helpers-Random.md)
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если невозможно сгенерировать случайное число |

**Returns:** bool - Либо true либо false, одно из двух


<a name="method_bytes" class="anchor"></a>
#### public bytes() : string

```php
static public bytes(int $length, bool $useBest = true) : string
```

**Summary**

Возвращает случайную последовательность байт

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\Random](../classes/YooKassaPayout-Common-Helpers-Random.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | length  | Длина возвращаемой строки |
| <code lang="php">bool</code> | useBest  | Использовать ли функцию random_int если она доступна |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если невозможно сгенерировать случайное число |

**Returns:** string - Строка, состоящая из случайных символов


<a name="method_float" class="anchor"></a>
#### public float() : float

```php
static public float(float|null $min = null, float|null $max = null, bool $useBest = true) : float
```

**Summary**

Возвращает случайное число с плавающей точкой. По умолчанию возвращает значение в промежутке от нуля до едениы.

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\Random](../classes/YooKassaPayout-Common-Helpers-Random.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">float OR null</code> | min  | Минимально возможное значение |
| <code lang="php">float OR null</code> | max  | Максимально возможное значение |
| <code lang="php">bool</code> | useBest  | Использовать ли функцию random_int если она доступна |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если невозможно сгенерировать случайное число |

**Returns:** float - Рандомное число с плавающей точкой


<a name="method_hex" class="anchor"></a>
#### public hex() : string

```php
static public hex(int $length, bool $useBest = true) : string
```

**Summary**

Возвращает строку, состоящую из символов '0123456789abcdef'

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\Random](../classes/YooKassaPayout-Common-Helpers-Random.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | length  | Длина возвращаемой строки |
| <code lang="php">bool</code> | useBest  | Использовать ли функцию random_int если она доступна |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если невозможно сгенерировать случайное число |

**Returns:** string - Строка, состоящая из случайных символов


<a name="method_int" class="anchor"></a>
#### public int() : int

```php
static public int(int|null $min = null, int|null $max = null, bool $useBest = true) : int
```

**Summary**

Возвращает случайное целое число. По умолчанию возвращает число от нуля до PHP_INT_MAX.

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\Random](../classes/YooKassaPayout-Common-Helpers-Random.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int OR null</code> | min  | Минимально возможное значение |
| <code lang="php">int OR null</code> | max  | Максимально возможное значение |
| <code lang="php">bool</code> | useBest  | Использовать ли функцию random_int если она доступна |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если невозможно сгенерировать случайное число |

**Returns:** int - Случайное целое число


<a name="method_str" class="anchor"></a>
#### public str() : string

```php
static public str(int $length, int|null $maxLength = null, string|array|null $characters = null, bool $useBest = true) : string
```

**Summary**

Возвращает строку из случайных символов

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\Random](../classes/YooKassaPayout-Common-Helpers-Random.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | length  | Длина возвращаемой строки, или минимальная длина, если передан параметр $maxLength |
| <code lang="php">int OR null</code> | maxLength  | Если параметр не равен null, возвращает сроку длиной от $length до $maxLength |
| <code lang="php">string OR array OR null</code> | characters  | Строка или массив используемых в строке символов |
| <code lang="php">bool</code> | useBest  | Использовать ли функцию random_int если она доступна |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если невозможно сгенерировать случайное число |

**Returns:** string - Строка, состоящая из случайных символов


<a name="method_value" class="anchor"></a>
#### public value() : mixed

```php
static public value(array $values, bool $useBest = true) : mixed
```

**Summary**

Возвращает случайное значение из переданного массива

**Details:**
* Inherited From: [\YooKassaPayout\Common\Helpers\Random](../classes/YooKassaPayout-Common-Helpers-Random.md)
##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | values  | Массив источник данных |
| <code lang="php">bool</code> | useBest  | Использовать ли функцию random_int если она доступна |
##### Throws:
| Type | Description |
| ---- | ----------- |
| \Exception | Выбрасывается, если невозможно сгенерировать случайное число |

**Returns:** mixed - Случайное значение из переданного массива



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