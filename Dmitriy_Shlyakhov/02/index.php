<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeWork02</title>
</head>
<body>

    <?php

    echo "Задача №1<br>";
    $name = 'Дмитрий';
    $age = 31;
    echo "Меня зовут $name";
    echo "<br>Мне $age год";

    echo "<hr>";

    echo "Задача №2<br>";
    $d = 2;
    $s = 1 / 4 * pow($d, 2) * sqrt(3);
    echo "Площадь равностороннего треугольника равна $s, при условии что его сторона равна $d";

    echo "<hr>";

    echo "Задача №3<br>";
    $a = 2;
    $b = 2;
    $c = 3;
    ?>
    <form method="post">
        Введите значение для a <input type="text" name="a"><br/>
        Введите значение для b <input type="text" name="b"><br/>
        Введите значение для c <input type="text" name="c"><br/>
        <input type="submit" value="Получить результат">
    </form>
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if ($a < $c) {
        $result = ($a + $b) / ($c * $a);
        echo "Так как a < c, то возьмем следующее выражение \"a + b / c * a\", которое в нашем случае равно $result";
    } else if ($a == $c) {
        echo "Так как a = c, то выводим переменную х со значением 100";
    } else if ($a > $c) {
        $result = $c * (3 * $b) + ($c / $c) * sqrt($c);
        echo "Так как a > c, то возьмем следующее выражение \"c * 3b + c / c * корень квадратный из с\", которое в нашем случае равно $result";
    }
    ?>

</body>
</html>
