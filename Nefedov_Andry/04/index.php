<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HW04</title>
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
    </style>
</head>

<body>

<!--Задача 1
1) Создайте две числовые переменные $cols, $rows.
2) Присвойте созданным переменным произвольные числовые значения в диапазоне от 1 до 10.-->

<?php
    $cols = rand(1, 10);
    $rows = rand(1, 10);
    //echo $cols, "<br>", $rows, "<br>";
?>

<!--Задача 2
Используя циклы, отрисуйте таблицу умножения в виде HTML-таблицы на следующих условиях:
    - число столбцов должно быть равно значению переменной $cols;
    - число строк должно быть равно значению переменной $rows;
    - ячейки на пересечении столбцов и строк должны содержать значения, являющиеся произведением
      значения порядковых номеров столбца и строки
Рекомендуется использовать цикл for.-->

<!--Задача 3
Значения в ячейках первой строки и первого столца должны быть отрисованны полужирным шрифтом
и выровнены по центру ячейки.
Фоновый цвет ячеек первой строки и первого столюца должен быть отличным от фонового цвета таблицы.-->

<table border="2" cellspacing="0">
    <caption class="strong_align"> Таблица умножения </caption>

<?php
    for ($i = 0; $i <= $rows; $i++): ?>
        <tr>
            <td class="td_caption">
                <?php
                    echo $i;
                ?>
            </td>
            <?php
                for ($j = 1; $j <= $cols; $j++):
                    if ($i != 0): ?>
                        <td class="td_base">
                            <?php
                                echo ($j*$i);
                            ?>
                        </td>
                    <?php
                    else: ?>
                        <td class="td_caption">
                            <?php
                                echo $j;
                            ?>
                        </td>
                    <?php
                    endif;
                endfor;
            ?>
        </tr>
    <?php
        endfor;

?>
</table>

<!--Задача 4
Используя цикл for, выведите в столбик все нечётные числа от 1 до 50.
-->

<?php
    for ($i = 1; $i <= 50; $i++) {
        $j = $i%2;
        if ($j) echo $i, "<br>";
    }

?>

<hr>

</body>
</html>