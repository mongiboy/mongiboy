<style>
*{
    padding: 0; margin: 0;
}
p{
    margin: 0.5rem 0;
}
</style>
<main style="margin-left: 32px;">

<?

$num = (isset ($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
$num++;
setcookie("num", $num, time() +20);
echo "Страница обновлена $num раз";

// $teamA = new Imagick(realpath('cska.png'));
// $teamB = new Imagick(realpath('din.png'));
// $bg = new Imagick(realpath('bg-400.jpg'));

// $image = clone($bg);
// $image->compositeImage($bg, Imagick::COMPOSITE_IN, 0, 0);
// $image->compositeImage($teamA, Imagick::COMPOSITE_DEFAULT, 40, 50);
// $image->compositeImage($teamB, Imagick::COMPOSITE_DEFAULT, 260, 50);

// header("Content-Type: image/png");
// echo $image;
// $image->writeImage("Тамбов - ЦСКА.jpg");
// $image->destroy();
// $mask->destroy();
// $pattern->destroy();


//!Заблюривание файла
// $image->adaptiveBlurImage(10,20);

//! Изменение размера изображения и его запись с префиксом в папку:
// $image = new Imagick('bg.jpg');
// $sizeW = 400;
// $image->thumbnailImage($sizeW, 0);
// $image->writeImage("bg-$sizeW.jpg");


?>

    <p>Coockies:</p>
    <pre style="border: 1px solid blue; background: aqua;">
    
    $num = (isset ($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
    $num++;
    setcookie("num", $num, time() +4);
    echo "Страница обновлена $num раз";
    </pre>
</main>