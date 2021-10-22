<?
function printResult($result_set){
    echo "Количество записей ".$result_set->num_rows.": <br>";
    while(($row = $result_set->fetch_assoc()) != false){
        print_r($row);
        // echo $row["login"];
        echo "<br>";
    }
    echo "<br><hr><br>";
}

$mysqli = new mysqli("localhost", "cn01374_test", "614746", "cn01374_test");
$mysqli->query("SET NAMES 'utf8'");

$result_set = $mysqli->query("SELECT * FROM `users`");
printResult($result_set);

$result_set = $mysqli->query("SELECT `id` FROM `users`");
printResult($result_set);

//*Проверка подключения к БД
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
    echo "Ok";
}

//*Добавление значений в таблицу
$success = $mysqli->query("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('oleg', '".md5("234")."', '".time()."') ");
echo $success;

$mysqli->close();