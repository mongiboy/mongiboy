<?

include 'city.php';// $cityList, $other, $obl, $kray, $resp, $AO
$array = $kray;
$parser = 3;

if($parser == 1){
    for($i = 0; $i < count($array); $i++){
        $page = file_get_contents($array[$i]);

        preg_match_all('#d-md-block">(.*)<\/span><sp.*\n\s*<td>(.*)<\/td>#', $page, $matches);

        echo 'Steep '.$i.': ';

        for($j = 0; $j < 6; $j++){
            echo $matches[2][$j].';';
        }
        echo '<br>';
    }
} elseif($parser == 2){
    for($i = 0; $i < count($array); $i++){
        $page = file_get_contents($array[$i]);

        preg_match_all('#<tr><td>(.*)<\/td><td>(.*)<\/td#', $page, $matches);

        echo 'Steep '.$i.': '.'Возьми сам'.';';

        for($j = 0; $j < 5; $j++){
            echo $matches[2][$j].'; ';
        }
        echo '<br>';
    }
} elseif($parser == 3){//Для прилагательных
    for($i = 0; $i < count($array); $i++){
        $page = file_get_contents($array[$i]);

        // preg_match_all('#d-md-block">.*\s*<td>.*\s*<td>(.*)<\/td>#', $page, $matches);//Ж. род
        preg_match_all('#d-md-block">.*\s*<td>(\W*)<#', $page, $matches);//М. род

        echo 'Steep '.$i.': ';

        for($j = 0; $j < 6; $j++){
            echo $matches[1][$j].';';
        }
        echo '<br>';
    }
}


// $page = file_get_contents($array[13]);
// // preg_match_all('#d-md-block">.*\s*<td>.*\s*<td>(.*)<\/td>#', $page, $matches);
// // for($j = 0; $j < 6; $j++){
// //     echo $matches[1][$j].'; ';
// // }
// echo $array[13];
// // echo '<br>https://skloneniya.ru/калининградский';
// echo $page;

?>