<?

$sendMessage = "Имя: $_POST[name]<br>Соцсеть: $_POST[optionally]<br>Текст отзыва:<br>$_POST[review]";

$to = "mongiboy@inbox.ru";
$subject = "Отзыв с Грифона";
$message = $sendMessage;
$headers = 'From: mongiboy@inbox.ru' . "\r\n" .
    "MIME-Version: 1.0" . "\r\n" .
    "Content-type: text/html; charset=UTF-8" . "\r\n";

$success = mail($to, $subject, $message, $headers);
echo $success ? "Спасибо за Ваше мнение" : "Извините, по техническим причинам сейчас мы не можем принять Ваш отзыв";
