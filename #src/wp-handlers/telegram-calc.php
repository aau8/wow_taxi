<?php
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$where_from = $_POST['where_from-rraannddoomm'];
$where = $_POST['where-rraannddoomm'];
$message = $_POST['user_message'];
$flight_number = $_POST['flight_number'];
$class_auto = $_POST['class_auto'];
$services = $_POST['services'];
$date_info = $_POST['date-info'];
$date = $_POST['date-order'];
$hours = $_POST['date-hours'];
$minutes = $_POST['date-minutes'];
// $date = $_POST['date'];
// $time = $_POST['time'];
$total_price = $_POST['total_price'];
$route = $_POST['route'];
$travel_time = $_POST['travel_time'];
$payment_method = $_POST['payment_method'];
$link_map = $_POST['link_map'];

// $post_key_error = array();
// function ($post_key) {
//   if ($_POST[$post_key]) {
//     $post_var[$post_key] = $_POST[$post_key];
//   }
//   else {
//     array_push($post_key_error, $post_key)
//   }
// }

if ($date_info == 'now') {
  $time = 'Как можно скорее!!!';
}
else if ($date_info == 'pre') {
  $time = $date.' '.$hours.':'.$minutes;
}

require 'config.php';
// $token = $config['TG_BOT_TOKEN'];
// $chat_id = $config['TG_GROUP_ID']; 

// https://yandex.ru/maps/?from=api-maps&ll=34.251358%2C44.723636&mode=routes&origin=jsapi_2_1_79&rtext=44.948295%2C34.100115~44.495361%2C34.166308&rtm=atm&rtt=auto&ruri=~&z=10

// $arr = array(
//   'Имя: ' => $name,
//   'Телефон: ' => $phone,
// );

$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Откуда: ' => $where_from,
  'Куда: ' => $where,
  'Когда: ' => $time,
  'Сообщение: ' => $message,
  'Номер рейса: ' => $flight_number,
  'Доп. услуги: ' => $services,
  'Класс авто: ' => $class_auto,
  'Общая цена: ' => $total_price . ' ₽',
  'Примерное расстояние: ' => $route . ' км.',
  'Примерное время в пути: ' => $travel_time,
  'Способ оплаты: ' => $payment_method
);

// echo 'Имя: '.$name . '<br>';
// echo 'Номер: '.$phone . '<br>';
// echo 'Откуда: '.$where_from . '<br>';
// echo 'Куда: '.$where . '<br>';
// echo 'Дата: '.$date . '<br>';
// echo 'Время: '.$time . '<br>';
// echo 'Сообщение: '.$message . '<br>';
// echo 'Номер рейса: '.$flight_number . '<br>';
// echo 'Доп. услуги: '.$services . '<br>';
// echo 'Класс авто: '.$class_auto . '<br>';
// echo 'Общая цена: '.$flight_number . '<br>';
// echo 'Расстояние: '.$flight_number . '<br>';
// echo 'Примерное время в пути: '.$flight_number . '<br>';
// echo 'Способ оплаты: '.$flight_number . '<br>';

// if (stripos($phone, '(') !== false && stripos($phone, ')') !== false && stripos($phone, '-') !== false && stripos($phone, '+') === false) {


// if ($title == 'Подарочный сертификат') {
//   $title_icon = '🎁';
// } elseif ($title == 'Помощь специалиста') {
//   $title_icon = '🆘';
// } elseif ($title == 'Заявка на первую установку') {
//   $title_icon = '🔧';
// } elseif ($title == 'Покупатель!!!') {
//   $title_icon = '🛒';
// } else {
//   $title_icon = '';
// }

// if ($brand != '') {
//   $arr_brand = array('Бренд авто: '=>$brand);
//   $arr = $arr + $arr_brand;
// }

// if ($mark != '') {
//   $arr_mark = array('Модель авто: '=>$mark);
//   $arr = $arr + $arr_mark;
// }

// if ($message != '') {
//   $arr_message = array('Сообщение: '=>$message);
//   $arr = $arr + $arr_message;
// }

// if ($totalPrice != '') {
//   $arr_totalPrice = array('Общая цена: '=>$totalPrice.' ₽');
//   $arr = $arr + $arr_totalPrice;
// }

// $arr_title = array($title_icon=>$title);

// $arr = $arr_title + $arr;

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id['order']}&parse_mode=html&text={$txt}","r");
// }
