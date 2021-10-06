<?php
$name = $_POST['user-name'];
$rating = $_POST['user-rating'];
$email = $_POST['user-email'];
$review = $_POST['user-review'];

require 'config.php';

$arr = array(
    'Имя: ' => $name,
    'Рейтинг: ' => $rating,
    'Email: ' => $email,
    'Сообщение: ' => $review
);

$txt = '';
foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};
  
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id['review']}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    echo json_encode('Данные отправлены!');
}
else {
    echo json_encode('Ошибка! Данные не отправлены!');
}