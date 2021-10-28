<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?
	$fuulUrl = $_SERVER['REQUEST_URI'];
	$url = explode('?', $fuulUrl);
	$url = $url[0];
	$fuulUrl = urldecode($fuulUrl);

	if ($url == "/skorpom/obrabotka.php") {
		$title = "🚑 Пользовательское соглашение";
	}
	elseif ($url == "/skorpom/politika.php") {
		$title = "🚑 Политика конфиденциальности";
	}
	else {
		$title = "🚑 ФениксМедТранс || Перевозка лежачих больных";
	}

	if ($url == "/skorpom/thankYou.php") {
		$returnToIndex = '<meta HTTP-EQUIV="refresh" CONTENT="10;URL=index.php">';
	}
	?>
	<title><? echo $title; ?></title>
	<? echo $returnToIndex; ?>
	<script src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">

<!-- 	<meta property="og:url" content="https://fenixmedtrans.com/">
	<meta property="og:title" content="🚑 ФениксМедТранс || Перевозка лежачих больных">
	<meta property="og:description" content="Услуги сиделок на дому или в больницах в Москве">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://fenixmedtrans.com/logo-prev.png"> -->

</head>
<body>
	<header>
		<div class="wrapper flex">
			<div class="logo">
				<div class="logoImg">
					<??>
					<a href="#"><img src="images/logo.png" alt="logo"></a>
				</div>
				<div class="logoText">
					<p class="compName font">ФениксМедТранс<br></p>
					<p class="font">Перевозка больных<br></p>
				</div>
			</div>
			<div class="headerPhone">
				<a class="font" href="tel:84952268303">8 (495) 226-83-03</a>
				<a class="font" href="tel:89161099390">8 (916) 109-93-90</a>
			</div>
		</div>
	</header>