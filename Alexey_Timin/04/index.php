<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
//задание 1

$cols = rand(1 , 10);
$rows = rand(1 , 10);
echo "переменная cols : ",$cols ,"<br>";
echo "переменная rows : ",$rows;
echo "<hr>";
//задание 2 с случайными переменными

$table = '<table>';

for ($tr=1; $tr<=$rows; $tr++) {
    $table .= '<tr>';
    for ($td = 1; $td <= $cols; $td++) {
        $table .= '<td>' . $tr * $td . '</td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;

//второй вариант с фиксированными произвольными переменными
echo "<hr>";

echo "<table><tr>";
for ($cols = 1; $cols  <= 5; $cols++) {
    for ($rows = 1; $rows <= 7; $rows++)
        echo "<td>".($rows*$cols)."</td>";
    if ($cols !=5) echo "</tr><tr>";
};
echo "</tr></table>";

//задание 3
echo "<hr>";
for($a = 0;$a <= 49;$a++) {
    $a = $a + 1;
    echo $a, "<br>";

}
?>
</body>
</html>
