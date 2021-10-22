<?

echo "<table border='1'>";
$i = 1;
while($i <= 9){
    echo "<tr>";
    $j = 1;
    while($j <= 9){
        $res = $i * $j;
        echo "<td width='24px' height='24px'>$res</td>";
        $j++;
    }
    echo "</tr>";
    $i++;
}
echo "</table";