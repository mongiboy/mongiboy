<?php
   //создаем какое-то имя, ну, например: 
   $name = time().'.png';
  //записываем, не забывая перекодировать из base64
  file_put_contents($name, base64_decode($_POST['data'] ));
  //отдаем обратно имя созданного файла 
  echo( $name );
?>