<?php

$name = $_POST['user-name'];
$phone = $_POST['user-phone'];
$message = $_POST['user-message'];

require 'config.php';

$arr = array(
    'Имя: ' => $name,
    'Номер телефона: ' => $phone,
    'Сообщения: ' => $message
);

$txt = '';
foreach($arr as $key => $value) {
    $txt .= '<b>'.$key.'</b> '.$value.'%0A';
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id['support']}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    echo json_encode('Данные отправлены!');
}
else {
    echo json_encode('Ошибка! Данные не отправлены!');
}