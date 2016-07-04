<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>HW02</title>
    </head>

    <body>

        <snap> Привет! 8) </snap>

        <hr>

        <!--Задача 1
        Создать переменную $name и присвоить ей строковое значение содержащее Ваше имя.
        Создать переменную $age и присвоить ей числовое значение содержащее Ваш возраст.
        Вывести с помощью echo или print фразу “Меня зовут ваше_имя”, например “Меня зовут
        Евгений”.
        Вывести фразу “Мне ваш_возраст лет(года)”.
        Каждая фраза должна начинаться с новой строки.-->

        <div>
            <?php
                $name = "Андрей";
                $age = 33;
                echo "Меня зовут $name."
            ?>
        </div>
        <div>
            <?php
                echo "Мне $age года.";
            ?>
        </div>

        <hr>

        <!--Задача 2
        Вычислить площадь равностороннего треугольника по формуле S=1/4*a*(Корень из трех) , где а-
        сторона треугольника.-->

        <div>
            <?php
                $a = 10;
                $S = round(1/4* pow($a, 2) * sqrt(3), 2);
                echo "Площаль равностороннего треугольника со стороной равной $a мм равна $S мм2.";
            ?>
        </div>

        <hr>

        <!--Задача 3
        a + b / c * a если a < c;
        x = 100 если a = 10;
        c * 3b + c / c * Vc если a > c.-->

        <div>
            <?php
                $a = 5;
                $b = 2;
                $c = 3;
                $x = 100;
                if ($a < $c) {
                    $S = round($a + $b / $c * $a, 2); echo "$S<br>";
                };
                if ($a > $c) {
                    $S = round($c * 3 * $b + $c / $c * sqrt($c)); echo "$S<br>";
                };
                if ($x == 100) {
                    $a = 10; echo "$a<br>";
                }
                else echo "Фигня какая-то... Повторите ввод.";
            ?>
        </div>

        <hr>

    </body>
</html>
