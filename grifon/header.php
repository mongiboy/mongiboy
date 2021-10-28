<!DOCTYPE html>
<html lang="ru">
<head>
    <?
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('?', $url);
        $url = $url[0];

        $pages = [
            "/bookingrule.php" => "Правила бронирования",
            "/politic.php" => "Политика конфиденциальности",
            "/agreement.php" => "Пользовательское соглашение",
            "/rulers.php" => "Правила проживания",
        ];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap">
    <link rel="stylesheet" href="scripts/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="style.min.css">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <? echo $url == '/' ? '<title>Берег Грифона | Глэмпинг отель</title>' : '<title>'.$pages[$url].' | Берег Грифона | Глэмпинг отель</title>' ?>
    <meta name="description" content="Первый Глэмпинг отель в Нижегородской области. Новая концепция экотуризма, позволяющая наслаждаться отдыхом на природе с максимальным комфортом.">

    <!--Twitter-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@bereggrifona.ru">
    <meta name="twitter:title" content="Берег Грифона | Глэмпинг отель">
    <meta name="twitter:description" content="Первый Глэмпинг отель в Нижегородской области. Новая концепция экотуризма, позволяющая наслаждаться отдыхом на природе с максимальным комфортом.">
    <meta name="twitter:image" content="image/bg.jpg">

    <!--Opengraph-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bereggrifona.ru">
    <meta property="og:site_name" content="Глэмпинг отель">
    <meta property="og:title" content="Берег Грифона | Глэмпинг отель">
    <meta property="og:description" content="Первый Глэмпинг отель в Нижегородской области. Новая концепция экотуризма, позволяющая наслаждаться отдыхом на природе с максимальным комфортом.">
    <meta property="og:image" content="image/bg.jpg">

</head>
<body>  
    <header>
        <div class="wrap">
            <div id="logo">
                <a class="logoLink" href="#cover">
                    <img src="image/griphon-green.png" alt="logo" class="logoImg">
                </a>
                <div class="logoDesc">
                    <p>Берег Грифона</p>
                    <p>глэмпинг отель</p>
                </div>
            </div>
            <div class="navMobile">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav>
                    <ul>
                        <li><a class="navLink" href="#terra">ТЕРРИТОРИЯ</a></li>
                        <li><a class="navLink" href="#price">СТОИМОСТЬ</a></li>
                        <li><a class="navLink" href="#thingsToDo">ЧЕМ ЗАНЯТЬСЯ</a></li>
                        <li><a class="navLink" href="#howToGet">КАК ДОБРАТЬСЯ</a></li> 
                        <li><a class="phone" href="tel:#">8 800 302 57 09</a></li>
                        <li><button onclick="ym(76592416,'reachGoal','button')" class="btn openBnovo">Забронировать</button></li>
                    </ul>
                </nav>
            </div>
            <div class="navWeb">
                <nav>
                    <ul>
                        <li><a class="navLink" href="#terra">ТЕРРИТОРИЯ</a></li>
                        <li><a class="navLink" href="#price">СТОИМОСТЬ</a></li>
                        <li><a class="navLink" href="#thingsToDo">ЧЕМ ЗАНЯТЬСЯ</a></li>
                        <li><a class="navLink" href="#howToGet">КАК ДОБРАТЬСЯ</a></li>
                    </ul>
                </nav>
            </div>
            <div id="contactsHeader">
                <a class="phone" href="tel:#">8 800 302 57 09</a>
                <button onclick="ym(76592416,'reachGoal','button')" class="btn openBnovo">Забронировать</button>
            </div>
        </div>
    </header>