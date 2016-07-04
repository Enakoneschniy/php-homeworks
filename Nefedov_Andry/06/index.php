<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HW06</title>
    <style type="text/css">
        .strong_align {
            text-align: center;
            font-weight: bold
        }
        .td_base {
            text-align: center;
            background-color: beige;
            width: 25px
        }
        .td_caption {
            text-align: center;
            font-weight: bold;
            background-color: burlywood;
            width: 25px
        }
        .td_current {
            text-align: center;
            background-color: coral;
            width: 25px
        }
    </style>
</head>

<body>

<!--Задача 1
Разработать функцию вычисления факториала заданного числа (n!)
Исходные данные, передаваемые в функцию: n - число, факториал которого вычисляется.
На выходе получить результат в виде факториала числа.
-->

<form action="index.php">

    <lable> Введите число, факториал которого необходимо узнать:<br>

        <input type="text" name="$n" placeholder="n" maxlength="2" size="5" required>

    </lable>

    <input type="submit" value="Ввести">

</form>

<?php

    $n = $_REQUEST['$n'];
    echo "<p>Введено число $n.</p>";

    function fFactorial ($n) {

        $Res = 1;

        for ($i = 1; $i <= $n; $i++){

            $Res *= $i;

        }

        return $Res;

    }

    echo "Факториал числа $n равен ".fFactorial($n);

?>

<hr>

<!--Задача 2
Написать функцию, которая будет выводить данные в календарном формате на текущий
месяц. Возможно использование стандартных функций определения дней недели.
-->

<?php

function calandar () {
    //введём ассоциативный массив русских обозначений дней недели
    $arNameOfDays = ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"];
    //введём ассоциативный массив русских обозначений месяцев
    $arNameOfMonth = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Наябрь", "Декабрь"];
    //определим текущий год
    $currentYear = date("Y");
    //определим текущий месяц
    $currentMonth = date("n");
    //определим количество дней в текущем месяце
    $amountOfDaysInMonth = date("t");
    //определим текущий день месяца
    $currentDayOfMonth = date("j");
    //определим день недели первого числа текущего месяца
    $firstDayOfMonth = date("w", mktime(0, 0, 0, date("m"), 1, date("Y")));


/*    echo date("l dS F Y H:i:s");
    echo "<p>$currentYear</p>";
    echo "<p>$currentDayOfMonth</p>";
    echo "<p>$currentMonth</p>";
    echo "<p>$amountOfDaysInMonth</p>";
    echo "<p>$firstDayOfMonth</p>";*/

?>

<table border="2" cellspacing="0">
    <caption class="strong_align">
        <?php
            echo $arNameOfMonth[$currentMonth-1]." ".$currentYear;
        ?>
    </caption>
    <!--создаём шапку таблицы-->
    <tr>
    <?php
        for ($i = 0; $i <= 6; $i++): ?>
            <td class="td_caption">
                <?php
                echo $arNameOfDays[$i];
                ?>
            </td>
        <?php
        endfor;
    ?>
    <!-- заполняем таблицу -->
    <?php
        $dayOfMonth = 1;
        while ($dayOfMonth <= $amountOfDaysInMonth): ?>
            <tr>
                <?php
                    for ($i = 0; $i <= 6; $i++): ?>
                        <?php
                            if ($i < $firstDayOfMonth - 1 and $dayOfMonth == 1) echo '<td class="td_base">'."".'</td>'; //заполняем пустые ячейки перед первым числом месяца
                            elseif ($dayOfMonth > $amountOfDaysInMonth) echo '<td class="td_base">'."".'</td>'; //заполняем пустые ячейки полсе последнего дня месяца
                            elseif ($dayOfMonth == $currentDayOfMonth) {
                                echo '<td class="td_current">'."$dayOfMonth".'</td>'; //выделяем текущую дату
                                $dayOfMonth++;
                            }
                            else {
                                echo '<td class="td_base">'."$dayOfMonth".'</td>';
                                $dayOfMonth++;
                            }
                        ?>
                    <?php
                    endfor;
                ?>
            </tr>
        <?php
        endwhile;} //end of function

        ?>
</table>

<?php

calandar();

?>

<hr>

<!--Задача 3
Написать функцию для генерации массива случайных часел. Функция принимает длину
массива, максимальное и минимальное значение в массиве. Функция должна вернуть массив.
-->

<form action="index.php">

    <lable> Введите длину генерируемого массива:<br>

        <div> <input type="text" name="$arLength" placeholder="Length" maxlength="2" size="5" required> </div>

    </lable>

    <lable> Введите минимальное значение случайных чисел генерируемого массива:<br>

        <div> <input type="text" name="$arMin" placeholder="Min" maxlength="2" size="5" required> </div>

    </lable>

    <lable> Введите максимальное значение случайных чисел генерируемого массива:<br>

        <div> <input type="text" name="$arMax" placeholder="Max" maxlength="2" size="5" required> </div>

    </lable>

    <input type="submit" value="Ввести">

</form>

<?php

    $arLength = $_REQUEST['$arLength'];
    $arMin = $_REQUEST['$arMin'];
    $arMax = $_REQUEST['$arMax'];
    echo "<p>Введены числа $arLength, $arMin, $arMax.</p>";
    if ($arMin >= $arMax or $arLength < 0 or $arMin < 0 or $arMax < 0) echo "Некорректный ввод данных. Повторите ввод.";

    function arInput ($arLength, $arMin, $arMax) {

        $arRes = [];

        for ($i = 0; $i < $arLength; $i++) {

            $arRes[] = rand($arMin, $arMax);

        }

        return $arRes;

    }

    $array = arInput($arLength, $arMin, $arMax);

    var_dump($array);

?>

<hr>

<!--Задача 4
Разработать функцию, которая вносит процентную коррекцию в массив чисел (целых, дробных или смешанный не имеет значения).
Исходные данные:
1) Массив с числами в виде
array(5, 6.5, 10, 3.355, 400, 9.43, ... [n]);
2) Процент внесения изменений (0,8 - 80% от целого, 1 - оставить без изменений, 2,5 - увеличить в полтора раза и т.д.).
Предусмотреть, что пользователь случайно может в функцию передать отрицательный процент, тогда функция должна вернуть ошибку.
На вызоде нужно получить такойже массив, с внесённой процентной ставкой.
-->

<form action="index.php">

    <lable> Введите желаемую процентную коррекцию:<br>

        <input type="text" name="$k" placeholder="k" maxlength="4" size="5" required>

    </lable>

    <input type="submit" value="Ввести">

</form>

<?php

    $k = $_REQUEST['$k'];
    echo "<p>Введено число $k.</p>";
    echo "<p> В качестве исходного массива возмем массив из предыдущей задачи. </p>";

    function arCorrection ($arInput, $k) {

        if ($k > 0) {

            for ($i = 0; $i < count($arInput); $i++) {

                $arInput[$i] += $arInput[$i] * $k;

            }

            return $arInput;

        }else {

            echo "Неправильный ввод. Повторите ввод";

            return false;
        }

    }

    $arRes4 = arCorrection($array, $k);

    var_dump($arRes4);

?>

<hr>

</body>
</html>