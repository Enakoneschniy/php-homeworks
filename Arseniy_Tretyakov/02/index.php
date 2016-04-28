<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
// First task
    $name = "Arseniy";
    echo "Hi,my name is $name!";
    echo "<hr>";
    $age = 23;
    echo "I'm $age years old.";
    echo "<hr>";
// Second task
    $a = rand(1,10);
    $s = 1/4*$a*sqrt(3);
    echo "a = $a";
    echo "<hr>";
    echo "Площадь равностороннего треугольника равна $s";
    echo "<hr>";
// Third task
    $a = rand(1,10);
    $b = rand(1,10);
    $c = rand(1,10);
    if ($a<$c) {
     $x = $a + $b / ($c * $a);
    }
    if ($a == $c) {
    $x = 100;
    }
    if ($a>$c) {
        $x = $c*3*$b + $c / $c * (sqrt($c));
    }
    echo "X = $x";
    echo "<hr>";
    echo "a = $a";
    echo "<hr>";
    echo "b = $b";
    echo "<hr>";
    echo "c = $c";
?>
</body>
</html>