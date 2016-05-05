<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF -8">
    <title>homework 04</title>
    <head/>
<body>
<h>Таблица умножения</h>

<?php

$cols = 10;
$rows = 9;
$color = 'green';

echo "<table border='1'><br>";
for ($r = 1; $r<=$rows; $r++) {
    echo "<tr>\n";
    for ($c = 1; $c<= $cols; $c++) {
        if ($r == 1 || $c == 1) {
            echo "<th style = 'background:$color'>" , $r * $c , "</th>\n";
        }
        else {
            echo "<td>" , $r * $c , "</td>\n";
        }
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";

// нечетные числа от 1 до 50
for ($num = 1; $num <= 50; $num += 2) {
    echo "$num <br>";
}
?>
</body>
</html>