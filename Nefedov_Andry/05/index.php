<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HW05</title>
    <style type="text/css">
            
    </style>
 </head>

<body>

<!--Задача 1
Найти сумму 1+4+7+10+...+n.
n - можно изменять.
-->

<form action="index.php">

    <lable> Введите произвольное целое число:<br>

        <input type="text" name="$n" placeholder="n" maxlength="2" size="5" required>

    </lable>

    <input type="submit" value="Ввести">

</form>

<?php

    $n = $_REQUEST['$n'];
    echo "<p>Введено число $n.</p>";

    $ost = $n%3 - 1;
    $aN = $n - $ost;
    $a1 = 1;
    $a2 = 4;

    echo "<p>Числовой ряд (1+4+7+10+...+n) представляет собой арифметическую прогрессию с первым членом равным 1, последним членом равным $aN
        и дополнением равным $ost.</p>
        <p> Зная второй член прогрессии (4), применим формулу Алпеева для нахождения суммы прогрессии, а затем к результату добавим дополнение.</p>
        ";
    $SumOfProgression = ($a1 + $aN)/2 * (($aN - $a1)/($a2 - $a1) + 1);

    echo "<p>Итого, сумма заданного числового ряда равна $SumOfProgression. Гы! 8)</p>";

?>

<hr>

<!--Задача 2
Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.
-->

<form action="index.php">

    <lable>Введите произвольное целое число:<br>

        <input type="text" name="$m" placeholder="n" maxlength="1" size="5" required>

    </lable>

    <input type="submit" value="Ввести">

</form>

<?php

    $n = $_REQUEST['$m'];

    echo "<p>Введено число $n.</p>";

    $arRes2 = [];

    for ($i = 0; $i <= $n-1; $i++) {

        $arRes2 [] = pow($i, 2);

    }

    var_dump($arRes2);

?>

<hr>

<!--Задача 3
Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная
с нуля.
-->

<form action="index.php">

    <lable> Введите произвольное целое число:<br>

        <input type="text" name="$a" placeholder="n" maxlength="2" size="5" required>

    </lable>

    <input type="submit" value="Ввести">

</form>

<?php

    $n = $_REQUEST['$a'];

    echo "<p>Введено число $n.</p>";

    $arRes3 = [];

    for ($i = 0; $i <= $n-1; $i++) {

        $arRes3 [] = $i%2;

    }

    var_dump($arRes3);

?>

<hr>

<!--Задача 4
Определите, есть ли в массиве повторяющиеся элементы.
-->

<?php

    echo "<p> В качестве исходного массива возмем массив из предыдущей задачи. </p>";

    // известно, что исходный массив числовой, поэтому для диагностики будем использовать цикл for.
    // в противном случае применялся бы цикл foreach.

    $true = 1;

    for ($i = 0; $i < count($arRes3); $i++) {

        for ($j = 0; $j < count($arRes3); $j++) {

            if (($arRes3[$i] == $arRes3[$j]) and ($i != $j)) {

                echo "В исходном массиве присутствуют повторяющиеся элементы.";

                $true = 0;
                //echo "$i   $j<br>";

                break;

            }

        }

        if (!$true) break;

    }

    if ($true) echo "В исходном массиве нет повторяющихся элементов.";

?>

<hr>

<!--Задача 5
Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом
будет 1 2 4 5
-->

<?php

    echo "<p> В качестве исходного массива возмем массив из предыдущей задачи. </p>";

    // решением задичи будет новый обработанный выходной массив $arRes5

    $arRes5 = [];

    $arRes5[0] = $arRes3[0];

    for ($i = 1; $i < count($arRes3); $i++) {

        for ($j = 0; $j < count($arRes5); $j++) {

            if ($arRes3[$i] == $arRes5[$j]) break;

        }

        if ($j != count($arRes5)) continue;

        $arRes5[] = $arRes3[$i];
    }

    var_dump($arRes5);

?>

<hr>

<!--Задача 6
Дан массив размера n. После каждого отрицательного элемента массива вставить
элемент с нулевым значением.
-->

<form action="index.php">

    <lable> Введите произвольное целое число:<br>

        <input type="text" name="$b" placeholder="n" maxlength="2" size="5" required>

    </lable>

    <input type="submit" value="Ввести">

</form>

<?php

    $n = $_REQUEST['$b'];

    echo "<p>Введено число $n.</p>";

    $arRes6 = []; // объявлем исходный массив

    for ($i = 0; $i < $n; $i++) {

        $arRes6[] = rand(-10, 10); // заполняем исходный массив

    }

    echo "Введён следующий массив:";

    var_dump($arRes6);

    $arRes6_1 = []; // объявлем выходной массив

    for ($i = 0; $i < count($arRes6); $i++) {

        if ($arRes6[$i] < 0) {

            $arRes6_1[] = $arRes6[$i];
            $arRes6_1[] = 0;

        } else $arRes6_1[] = $arRes6[$i];

    }

    echo "Результирующий массив:";

    var_dump($arRes6_1);

?>

<hr>

<!--Задача *
Упорядочить значения массива по возрастанию. Реализовать двумя способами: с
помощью стандартной функции и без.
-->

<?php

    echo "<p> В качестве исходного массива возмем исходный массив из предыдущей задачи. </p>";

    echo "<p>Сортировка стандартной функцией</p>";

    $arRes7_0 = $arRes6_1; // чтобы не трогать основной массив

    asort($arRes7_0);

    var_dump($arRes7_0);

    echo "<p>Пузырьковый метод сортировки</p>";

    $arRes7_1 = $arRes6_1; // чтобы не трогать основной массив
    $buffer = 0; // объявляем буферную переменную для реализации пузырьковой сортировки

    for ($i = 1; $i < count($arRes7_1); $i++) {

        if ($arRes7_1[$i] < $arRes7_1[$i - 1]) {

            $buffer = $arRes7_1[$i - 1];
            $arRes7_1[$i - 1] = $arRes7_1[$i];
            $arRes7_1[$i] = $buffer;
            $i = 0;

        }

    }

    echo "Результирующий массив:";

    var_dump($arRes7_1);

?>

<hr>

</body>
</html>
