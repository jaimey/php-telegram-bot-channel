# php-telegram-bot-channel
Clase para enviar mensajes a canales a través de un Telegram Bot
### Uso
Reemplazar `bot_token` y `@channel`
```php
<?php
inlclude_once(__DIR__ . '/telegram-bot.php');

$telegram_bot = new telegram_bot("<chatid>","<token>");

$response = $telegram_bot->send('Test'));

var_dump($response);
```
