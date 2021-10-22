<?
include 'month.php';

$page = file_get_contents('https://pfc-cska.com/matches/spisok-matchej/');

$page = preg_replace('/ +/', ' ', $page);
preg_match_all('#list-matches__date">(\s|)( (\d\d).(.{6}).*(\d\d.\d\d).*)<\/span>#', $page, $date);
preg_match_all('#list-matches__name">(\s|)(.*)<\/span>#', $page, $game);
preg_match_all('#list-matches__team-name">(\s|)(.*)<\/div>#', $page, $team);

$today = date('d.m.Y H:i');
$todayYear = date('Y');
$todayMonth = date('m');

function year($todayMonth, $gameMonth, $todayYear){
    if($todayMonth - $gameMonth < -1){
        $todayYear = $todayYear - 1;
    } else{
        $todayYear;
    }
    return $todayYear;
}
echo '<p style="font-size: 40px; color: blue;">'.'Ближайшие матчи:'.'</p>';
for($i = 0; $i < count($date[3]); $i++){
    $dateGame = $date[3][$i].'.'.$month[$date[4][$i]].'.'.year($todayMonth, $month[$date[4][$i]], $todayYear).' '.$date[5][$i];
    $today_timestamp = strtotime($today);
    $dateGame_timestamp = strtotime($dateGame);
    if($today_timestamp < $dateGame_timestamp){
        $message = $dateGame.' ЦСКА -'.$team[2][$i].$game[2][$i];
        // echo '<p style="font-size: 40px; color: blue;">'.'Ближайший матч:'.'</p>';
        echo '<p style="font-size: 40px; color: red;">'.$message.'</p>';
        // echo '<p style="font-size: 40px;">'.$dateGame.$game[2][$i].$team[2][$i].'</p>';
        // break;
    }
};


?>

