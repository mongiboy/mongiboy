<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta HTTP-EQUIV="refresh" CONTENT="5;URL=index.php">
</head>
<body>
<?php 

$url = $_SERVER['HTTP_REFERER'];
$url = urldecode($url);
$name = $_POST['name'];
$phone = $_POST['phone'];
if (mail("fenixmedtrans@yandex.ru", "Заявка с сайта", "Имя: ".$name."\nТелефон: ".$phone."\nURL: ".$url))
{
	echo "<script>window.location.href='thankYou.php'</script>";
} else {
	echo "Ваша заявка не отправлена, вы будете перенаправлены на главную страницу.";
}

?>
</body>
</html>