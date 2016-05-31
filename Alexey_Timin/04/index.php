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

echo '<table>';
for($a = 1;$a <=$cols; $a++) {
    echo '<tr>';
    for($b = 1;$b <=$rows;$b++) {
        echo '<td>'.$a*$b.'</td>';
    }
    echo '</tr>';
}
echo '</table>';


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
