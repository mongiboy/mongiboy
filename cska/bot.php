<?
include 'month.php';

$page = file_get_contents('https://pfc-cska.com/matches/spisok-matchej/');

$page = preg_replace('/ +/', ' ', $page);
preg_match_all('#list-matches__date">(\s|)( (\d\d).(.{6}).*(\d\d.\d\d).*)<\/span>#', $page, $date);
preg_match_all('#list-matches__name">(\s|)(.*)<\/span>#', $page, $game);
preg_match_all('#list-matches__team-name">(\s|)(.*)<\/div>#', $page, $team);
preg_match_all('#__ico-place">\s*.*"(.*)">#', $page, $place);
preg_match_all('#__team-logo">\R*.*="(.*png)#', $page, $teamLogo);

//*Текущее время
$today = date('d.m.Y H:i');
$todayYear = date('Y');
$todayMonth = date('m');
$todayDay = date('d');
$todayHour = date('H');
$todayHourMin = date('H:i');
$tomorrow = date('d', strtotime("+1 day"));

//*определяет год игры
function year($todayMonth, $gameMonth, $todayYear){
    if($todayMonth - $gameMonth < -1){
        $todayYear = $todayYear - 1;
    } else{
        $todayYear;
    }
    return $todayYear;
}

//*Цикл выводит ближайшую игру
for($i = 0; $i < count($date[3]); $i++){
    $dateGame = $date[3][$i].'.'.$month[$date[4][$i]].'.'.year($todayMonth, $month[$date[4][$i]], $todayYear).' '.$date[5][$i];
    $today_timestamp = strtotime($today);
    $dateGame_timestamp = strtotime($dateGame);
    if($today_timestamp < $dateGame_timestamp){
        echo '<p style="font-size: 40px; color: blue;">'.'Ближайший матч:'.'</p>';
        echo '<p style="font-size: 40px; color: red;">'.$dateGame;
        echo $place[1][$i] == 'i-home' ? ' ЦСКА - '.$team[2][$i].'.' : $team[2][$i].' - ЦСКА.';
        echo $game[2][$i];
        echo '</p>';
        break;
    }
};

//? Завтра игра?
if($date[3][$i] == $tomorrow){
    $tomorrowGame = true;
}
$ifTomorrow = $tomorrowGame && $todayHour == 19;

//? Скоро игра?
$gameHour = $date[5][$i];
$todayGame = $date[3][$i] == $todayDay ? 1 : 0;
$unixTodayHour = strtotime($todayHourMin);
$unixGameHour = strtotime($gameHour);
$hourDif = ($unixGameHour - $unixTodayHour) / 60 / 60;
$ifSoon = $todayGame == 1 && $hourDif < 1.52 && $hourDif > 0.51;

//? Дома или выезд?
if($place[1][$i] =='i-home'){
    $teamA = 'ЦСКА';
    $teamB = $team[2][$i];
    $enTeamA = 'CSKA';
    $enTeamB = translit(trim($team[2][$i]));
} else{
    $teamA = $team[2][$i];
    $teamB = 'ЦСКА';
    $enTeamA = translit(trim($team[2][$i]));
    $enTeamB = 'CSKA';
}

//*Создание картинки
$imgtime = $tomorrowGame == 1 && $todayHour == 18;
// $imgtime = 1;

$pathToLogo = "img/" .translit(trim($team[2][$i])) .".png";
$linkLogo = "https://pfc-cska.com".$teamLogo[1][$i];

if($imgtime){
    file_put_contents($pathToLogo, file_get_contents($linkLogo));

    $logoA = new Imagick(realpath("img/".$enTeamA .".png"));
    $logoB = new Imagick(realpath("img/".$enTeamB .".png"));
    $bg = new Imagick(realpath('img/bg-400.jpg'));


    $image = clone($bg);
    $image->compositeImage($bg, Imagick::COMPOSITE_IN, 0, 0);
    $image->compositeImage($logoA, Imagick::COMPOSITE_DEFAULT, 40, 50);
    $image->compositeImage($logoB, Imagick::COMPOSITE_DEFAULT, 260, 50);

    header("Content-Type: image/png");
    $image->writeImage("img/$enTeamA-$enTeamB.jpg");
    $image->destroy();
    $logoA->destroy();
    $logoB->destroy();
    $bg->destroy();

}

$photo = "https://mongiboy.ru/cska/img/".$enTeamA."-".$enTeamB.".jpg";

echo "<image src=" .$photo ."></image>";
// echo $photo;

//*Парметры для Телеги
$token = '1651501897:AAETt0x5AXbUpUSLeC3ywj8hS9yX8Ey7kXE';
$chatId = '@cskaalarm';
$chatIdOleg = '180237114';
$mychatId = '369452689';

$message = $date[5][$i]." ".$teamA.' - '.$teamB.'.'.$game[2][$i];

//*Определяем текст для отправки
$text = $message;
if($ifTomorrow){
	$text = 'Завтра в '.$message;
};
if($ifSoon){
	$text = 'Скоро игра '.$message;
};
// $ifTomorrow = 1;
//*Отправка в Телегу при соблюдении условий
// echo '<img src="'.$photo.'">';
if($ifTomorrow || $ifSoon){
	$response = array(
		'chat_id' => $chatId,//!Проверить
        'photo' => $photo,
		// 'text' => $text,
		'caption' => $text,
	);	
			
	// $ch = curl_init('https://api.telegram.org/bot' . $token . '/sendMessage');  
	$ch = curl_init('https://api.telegram.org/bot' . $token . '/sendPhoto');  
	curl_setopt($ch, CURLOPT_POST, 1);  
	curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_exec($ch);
	curl_close($ch);
}

function translit($value){
	$converter = array(
		'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
		'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
		'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
		'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
		'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
		'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
		'э' => 'e',    'ю' => 'yu',   'я' => 'ya',

		'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
		'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
		'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
		'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
		'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
		'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
		'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
        ' ' => '-',
	);

	$value = strtr($value, $converter);
	return $value;
}

?>