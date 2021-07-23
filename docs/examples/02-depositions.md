# Зачисление переводов

Операция для отправки перевода на кошелек ЮMoney, на рублевый банковский счет, банковскую карту или счет мобильного телефона.

Получатель перевода определяется значением параметра `dstAccount`. 
В параметрах `paymentParams` передаются данные, необходимые для зачисления соответствующим способом. 
Среди них передается согласие получателя с офертой ЮKassa (`pof_offerAccepted`). 
Вам необходимо разместить на своей стороне ссылку на оферту: [https://yoomoney.ru/pay/page?id=526623](https://yoomoney.ru/pay/page?id=526623)

* [Проверка возможности зачислений](#Проверка-возможности-зачислений)
* [Зачисление на банковскую карту](#Зачисление-на-банковскую-карту)
* [Зачисление переводов на банковский счет](#Зачисление-переводов-на-банковский-счет)

---

## Проверка возможности зачислений

[Создание запроса в документации](https://yookassa.ru/docs/payouts/api/make-deposition/basics#test-deposition)

Перед тем, как отправлять деньги пользователю, необходимо проверять возможность зачисления перевода с помощью запроса `testDeposition`. 
Этот запрос позволяет проверить возможность перечисления указанной суммы нужному пользователю.

При приеме запроса `testDeposition` зачисление перевода не производится.

[Создание запроса в документации](https://yookassa.ru/docs/payouts/api/make-deposition/mobile)

```php
require_once '../vendor/autoload.php';

// Создание ключницы и экземпляра клиента
$keychain = new YooKassaPayout\Request\Keychain('./250000.cer', './privateKey.pem', 12345);
$client  = new YooKassaPayout\Client('250000', $keychain);

// Проверка возможности зачислений
try {
    // Подготовка данных о получателе выплаты
    $recipient = new YooKassaPayout\Model\Recipient\BaseRecipient();
    $recipient->setPofOfferAccepted(true);

    // Создание запроса
    $deposition = new YooKassaPayout\Request\TestDepositionRequest();
    $deposition->setAmount(100)
               ->setDstAccount('79001002030')
               ->setPaymentParams($recipient);

    $result = $client->createDeposition($deposition);
    var_dump($result);
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

## Зачисление на банковскую карту

[Создание запроса в документации](https://yookassa.ru/docs/payouts/api/make-deposition/bank-card#перевод_на_банковскую_карту)

```php
require_once '../vendor/autoload.php';

// Создание ключницы и экземпляра клиента
$keychain = new YooKassaPayout\Request\Keychain('./250000.cer', './privateKey.pem', 12345);
$client  = new YooKassaPayout\Client('250000', $keychain);

// Проверка возможности зачислений
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

## Зачисление переводов на банковский счет

[Создание запроса в документации](https://yookassa.ru/docs/payouts/api/make-deposition/bank-account#перевод_на_банковский_счет)

```php
require_once '../vendor/autoload.php';

// Создание ключницы и экземпляра клиента
$keychain = new YooKassaPayout\Request\Keychain('./250000.cer', './privateKey.pem', 12345);
$client  = new YooKassaPayout\Client('250000', $keychain);

// Проведение реальной выплаты
try {
    // Подготовка данных о получателе выплаты
    $recipient = new YooKassaPayout\Model\Recipient\BankAccountRecipient();
    $recipient->setPdrLastName('Иванов')
              ->setPdrFirstName('Иван')
              ->setPdrMiddleName('Иванович')
              ->setDocNumber('1234567890')
              ->setPofOfferAccepted(true)
              ->setPdrDocIssueDate('01.02.2018')
              ->setSmsPhoneNumber('79000000000')
              ->setPaymentPurpose('Назначение выплаты')
              ->setBankBIK(5435435435)
              ->setBankCorAccount('');

    // Создание запроса
    $deposition = new YooKassaPayout\Request\MakeDepositionRequest();
    $deposition->setDstAccount('2570066962077')
               ->setAmount(100)
               ->setCurrency(YooKassaPayout\Model\CurrencyCode::RUB)
               ->setContract('Основание для выплаты')
               ->setPaymentParams($recipient);

    $result = $client->createDeposition($deposition);
    var_dump($result);
} catch (\Exception $e) {
    echo $e->getMessage();
}
```
