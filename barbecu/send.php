<?php
  $config = [
    "name" => "Имя",
    "phone" => "Телефон",
    "mail" => "Почта",
    "form" => "Тип формы",
    "call_time" => "Удобное клиенту время звонка",
    "konf" => "Элементы конфигуратора"
  ];

  function konf_validate($data) {
    $arr = json_decode($data);
    $message_konf = [];
    foreach ($arr as $key => $value) {
      $message_konf[] = $value;
    }
    return implode('<br>', $message_konf);
  }

  if($_POST['form'] == 'Конфигуратор') {

  } else {
    unset($config["konf"]);
  }

  $message_arr = [];

  foreach ($config as $key => $value) {
    if(!empty($_POST[$key])) {
      if($config == 'konf') {
        $message_arr[] = $config[$key] . ': ' . $_POST[$key];
      } else {
        $message_arr[] = $config[$key] . ': ' . $_POST[$key];
      }
    }
  }

  if(empty($message_arr)) {
    exit();
  }

  $message = implode('<br>', $message_arr);

  $to = "zakaz@barbecue.msk.ru";

  $subject = "Заявка";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'From: ' . 'mySite@gmail.com' . "\r\n";
  $mail_res = mail($to, $subject, $message, $headers);
  mail('mongiboy@inbox.ru', $subject, $message, $headers);
  if($mail_res === true) {
    echo "success";
  } else {
    echo "error";
  }
?>