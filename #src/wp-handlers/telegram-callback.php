<?php
$name = $_POST['user-name'];
$phone = $_POST['user-phone'];
$email = $_POST['user-email'];
$message = $_POST['user-message'];

require 'config.php';

$txt = "
*Имя:* {$name},%0A
*Телефон:* {$phone},%0A
*Email:* {$email},%0A
*Сообщение:* {$message}
";
  
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id['callback']}&parse_mode=MarkDown&text={$txt}","r");

if ($sendToTelegram) {
    echo json_encode('Данные отправлены!');
}
else {
    echo json_encode('Ошибка! Данные не отправлены!');
}