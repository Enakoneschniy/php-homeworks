<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework2</title>
</head>
<body>
<!--Task#1-->
<div>
    <h3>Задание1</h3>
    <?php
    $name = "Алексей";
    echo "Меня зовут $name<br>";
    $age = 25;
    echo "Мне $age лет(года)<br>";
    ?>
</div>
<!--Task#2-->
<div>
    <h3>Задание2</h3>
    <?php
    $a = 3;
    $s = round(pow($a,2)*sqrt(3)/4,2);
    echo "Площадь равностороннего треугольника со стороной $a равна $s";
    ?>
</div>
<!--Task#3-->
<div>
    <h3>Задание3</h3>
    <?php
    $a = 6;
    $b = 2;
    $c = 8;
    if ($a < $c)
    {$x = $a + $b/$c*$a;
    } elseif ($a == $c )
    {$x=100;
    } else {
        $x = 3*$c*$b+ $c/$c*sqrt($c);
    }
    echo "Результат $x";
    ?>
</div>
</body>
</html>
