<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HW07 Рекурсии</title>
    <style type="text/css">

    </style>
</head>

<body>

<!--Задача 1
Дано натуральное число n. Выведите все числа от 1 до n.
-->

<form action="index.php">
    <lable> Введите произвольное целое положительное число:<br>
        <input type="number" name="$n" placeholder="n" maxlength="2" size="5" required>
    </lable>
    <input type="submit" value="Ввести">
</form>

<?php

    $n = $_REQUEST['$n'];
    echo "<p>Введено число $n.</p>";

    function numberOutput_1 ($n) {
        if ($n != 1 && $n > 0) numberOutput_1($n-1);    //до тех пор, пока n не станет =1 и если n больше 0, углубляйся (прокол)
        elseif ($n <= 0) echo "Введённое число не положительное. Повторите ввод.";
        echo "$n ";                                     //как только n углубится до 1, начинай вывод чисел в обратном порядке
    }

    numberOutput_1($n);

?>

<hr>

<!--Задача 2
Даны два целых числа A и В (каждое в отдельной строке).
Выведите все числа от A до B включительно, в порядке возрастания,
если A < B, или в порядке убывания в противном случае.
-->

<form action="index.php">
    <lable> Введите первое целое число:<br>
        <div> <input type="number" name="$a" placeholder="A" maxlength="2" size="5" required> </div>
    </lable>
    <lable> Введите второе целое число:<br>
        <div> <input type="number" name="$b" placeholder="B" maxlength="2" size="5" required> </div>
    </lable>
    <input type="submit" value="Ввести">
</form>

<?php

    $a = $_REQUEST['$a'];
    $b = $_REQUEST['$b'];
    echo "<p>Введены числа $a и $b.</p>";

    function numberOutput_2 ($a,$b) {
        if ($a < $b) {
            if ($b != $a ) numberOutput_2($a,$b-1); //до тех пор, пока b не станет =a, углубляйся (прокол)
            echo "$b ";                             //как только b углубится до a, начинай вывод чисел в обратном порядке
        }elseif ($a > $b) {
            if ($b != $a ) numberOutput_2($a,$b+1); //до тех пор, пока b не станет =a, углубляйся (прокол)
            echo "$b ";                             //как только b поднимится до a, начинай вывод чисел в обратном порядке
        }else echo "$b ";
    }

    numberOutput_2($a,$b);

?>

<hr>

<!--Задача 3
Дано натуральное число N. Выведите слово YES, если число N
является точной степенью двойки, или слово NO в противном случае.
Операцией возведения в степень пользоваться нельзя!
-->

<form action="index.php">
    <lable> Введите произвольное целое число:<br>
        <input type="number" name="$m" placeholder="N" maxlength="4" size="5" required>
    </lable>
    <input type="submit" value="Ввести">
</form>

<?php

    $m = $_REQUEST['$m'];
    echo "<p>Введено число $m.</p>";

    function checkingPowerTo2 ($m) {
        if ($m != 1 && $m > 1) checkingPowerTo2($m/2);  //до тех пор, пока m не станет =1 (что свидетельствует о соответствие точной степени заданного числа), углубляйся (прокол)
        elseif ($m < 1) echo "NO";                      //как только m станет меньше 1, это будет означать, что оно не является точной степенью заданного числа
        else echo "YES";
    }

    checkingPowerTo2($m);


?>

<hr>

<!--Задача 4
Дано натуральное число N. Выведите все его цифры по одной, в
обратном порядке, разделяя их пробелами или новыми строками.
При решении этой задачи нельзя использовать строки, списки,
массивы (ну и циклы, разумеется). Разрешена только рекурсия и
целочисленная арифметика.
-->

<form action="index.php">
    <lable> Введите произвольное целое число:<br>
        <input type="number" name="$N" placeholder="N" maxlength="4" size="5" required>
    </lable>
    <input type="submit" value="Ввести">
</form>

<?php

    $N = $_REQUEST['$N'];
    echo "<p>Введено число $N.</p>";

    function numberDispart ($N) {
        $N = abs($N);                       //работаем только с модулями чисел
        if ($N > 10) {                      //до тех пор, пока N не станет <10 (что свидетельствует о достижении первой цифры введённого числа),
            echo $N%10," ";                 //выводи остаток от деления на 10 (т.к система исчисления десятичная)
            numberDispart (floor($N/10));   //и углубляйся (прокол)
        }else echo "$N ";                   //выведи первую цифру заданного числа
    }

    numberDispart($N);

?>

<hr>

</body>
</html>
