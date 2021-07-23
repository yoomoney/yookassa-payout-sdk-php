# Уведомление о неуспешном переводе

Запрос errorDepositionNotification позволяет сообщить контрагенту о неуспешном статусе (возврате) 
перевода на банковский счет, карту, мобильный телефон. 

[Уведомление о неуспешном переводе документации](https://yookassa.ru/docs/payouts/api/error-deposition-notification)

Сервис ЮKassa отправляет уведомление на адрес контактного лица по техническим вопросам, 
который указан в личном кабинете ЮKassa или в технической анкете `errorDepositionNotificationURL`.

На каждое уведомление следует отвечать сообщением о результате операции, помещенным в криптопакет PKCS#7.

```php
require_once '../vendor/autoload.php';

// Создание ключницы и экземпляра клиента
$keychain = new YooKassaPayout\Request\Keychain('./250000.cer', './privateKey.pem', 12345);
$client  = new YooKassaPayout\Client('250000', $keychain);

try {
    $notificationBody = file_get_contents('php://input');
    $notification = new YooKassaPayout\Notification\ErrorDepositionNotification($notificationBody);
    $error = $notification->getError();
    echo $notification->createResponse(0, $keychain);
    exit();
} catch (\Exception $e) {
    echo $e->getMessage();
}
```
