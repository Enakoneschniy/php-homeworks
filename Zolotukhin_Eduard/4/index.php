<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DZ4</title>
</head>
<body>
<?php
// Task 1,2
$cols = 9;//rand (1,10);
$rows = 9;//rand (1,10);
$color = 'red';

echo "<table border= '1' width='20%'><br>";
 for ($c = 1; $c <= $cols; $c++) {
       echo "<tr>\n";
    for ($r = 1; $r <= $rows; $r++) {
               if ($c == 1 || $r == 1) {
                       echo "<th style = 'background: $color'>" , $c * $r , "</th>\n";
        }
         else {
                       echo "<td>" , $c * $r , "</td> \n";
         }
     }
     echo "</tr>";
 }
echo "</table>";
echo "<br>";
echo "<hr>";

// task 3
 for ($num = 1; $num <= 50; $num += 2) {
     echo "$num <br>";
 }
?>
</body>
</html>