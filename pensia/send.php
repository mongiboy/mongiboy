<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta HTTP-EQUIV="refresh" CONTENT="5;URL=index.html">
</head>
<body>
<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
if (mail("mongiboy@inbox.ru", "Заявка с сайта", "Имя:".$name.". Телефон:".$phone))
{
	echo "<script>window.location.href='thankYou.html'</script>";
} else {
	echo "Ваша заявка не отправлена, вы будете перенаправлены на главную страницу.";
}

?>
</body>
</html>