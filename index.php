<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
	<nav>
		<ol>
			<li><a target="_blank" href="barbecu/index.html">Барбекю</a></li>
			<li><a target="_blank" href="nurse/index.html">Сиделки</a></li>
			<li><a target="_blank" href="pensia/index.html">Пенсионный юрист</a></li>			
			<li><a target="_blank" href="skorpom/index.php">Перевозка больных</a></li>			
<<<<<<< HEAD
			<li><a target="_blank" href="grifon/index.php">Берег Грифона</a></li>			
			<!-- <li><a target="_blank" href="cska/index.php">Матчи ЦСКА</a></li>			 -->
			<!-- <li><a href="test/index.php">TEST</a></li>			 -->
		</ol>
	</nav>
	<?
	// $dir = "/home/c/cn01374/public_html";
	// $dirs = scandir($dir);
	// print_r($dirs);

	// for($i = 0; $i < count($dirs); $i++){
	// 	echo $dirs[$i]." is folder? - ";
	// 	var_dump(is_dir($dirs[$i]));
	// 	echo"<br>";
	// }
=======
			<li><a target="_blank" href="grifon/index.php">Берег Грифона</a></li>
		</ol>
	</nav>
    <img src="images/certificate.jpg" width="500" alt="">
    <?
    $img = new Imagick(realpath('images/certificate.jpg'));
    $img->thumbnailImage(250, 0);
    $img->getImageBlob();
    echo "<br><img src='data:image/jpg;base64,".base64_encode($img)."' />";
>>>>>>> fc4d918b2f04b625ae7e9bf1d973456cdad10a65
	?>
</html>