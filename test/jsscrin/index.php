<?
// $num = 0;
$num = (isset ($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
$num++;
setcookie("num", $num, time() + 60 * 60 * 24 * 5);
// echo "Страница обновлена $num раз";
$yaLink = array(
    1 => ["https://yandex.ru/maps/11319/gorno-altaysk/?ll=85.9712906%2C51.9581183&z=10", "gorno-altaysk" ],
    2 => ["https://yandex.ru/maps/1106/groznyy/?ll=45.6703911%2C43.3098413&z=10", "groznyy"],
    3 => ["https://yandex.ru/maps/27555/dzhankoy/?ll=34.417195%2C45.717146&z=10", "dzhankoy"],
    4 => ["https://yandex.ru/maps/972/dzerzhinsk/?ll=43.4452703%2C56.2354202&z=10", "dzerzhinsk"],
    5 => ["https://yandex.ru/maps/10383/dimitrovgrad/?ll=49.6150588%2C54.2236405&z=10", "dimitrovgrad"],
    
);

$page = file_get_contents($yaLink[$num][0]);?>

<p id="scrin" onclick='screenshot();'><?echo "Итерация № $num"?></p>
<input type="text" value="<?echo $yaLink[$num][1]?>">
<!-- <div style="width: 100%; position: absolute; height: 900px;" id="map"><?echo $page?></div> -->
<div id="capture" style="padding: 10px; background: #f5da55">
    <h4 style="color: #000; ">Hello world!</h4>
</div>
<script src="html2canvas.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  navigator.clipboard.writeText("<?echo $yaLink[$num][1]?>")//*Копирует в буфер

  function screenshot(){
    html2canvas(document.body,{background: '#fff'}).then(function(canvas) {

      document.body.appendChild(canvas);

      // Get base64URL
      var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');

      // AJAX request
      $.ajax({
        url: 'ajaxfile.php',
        type: 'post',
        data: {image: base64URL},
        success: function(data){
            console.log('Upload successfully');
        }
      });
    });  
  }

</script>