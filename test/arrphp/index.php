<style>body{padding-left: 500px;}</style>
<?

$cities = [
    "ufa" => ["Уфа", "ёбаную Уфу"],
    "omsk" => ["Омск", "проклятый Омск"],
    "kirov" => ["Киров", "сраный Киров"],
];
//!Тесты урла
// $url = "/price/ufa/";
// $url = "/price/kirov/";
// $url = "/uslugi/domashnie-veshchi-i-pereezdy/pereezdy-po-rossii/omsk/";
// $url = "/uslugi/domashnie-veshchi-i-pereezdy/pereezdy-po-rossii/kirov/";
// $url = "/uslugi/domashnie-veshchi-i-pereezdy/pereezdy-po-rossii/ufa/";
$url = "/uslugi/domashnie-veshchi-i-pereezdy/pereezdy-po-rossii/";

preg_match("#\/(\w*)\/$#", $url, $city);
$city = $city[1];

$array = [
    "/price/".$city."/" => [
        "title" => strlen($city) < 5 ? "Прайс лист в ".$cities[$city][1]." с 1-ой Транспортной" : "Прайс лист в ".$cities[$city][1],
        "desc" => "Перевозки в город ".$cities[$city][0],
    ],
    "/uslugi/domashnie-veshchi-i-pereezdy/pereezdy-po-rossii/".$city."/" => [
        "title" => strlen($city) < 5 ? "Переезд в ".$cities[$city][1]." с 1-ой Транспортной" : "Переезд в ".$cities[$city][1],
        "desc" => "Переезд город ".$cities[$city][0],
    ],
];

echo $array[$url]["title"]."<br>";
echo $array[$url]["desc"]."<br>";

