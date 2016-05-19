<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        </head>
<body>
        <h3>Задание 1</h3>
        <p>1) Разработать функцию вычисления факториала заданного числа (n!)</p>
        <p>Исходные данные, передаваемые в функцию: n - число, факториал которого вычисляется.На выходе получить результат в виде факториала числа.</p>
        <p>Результат вычисления:</p>
        <?php
        function factorial ($n)
        {
            if($n <= 1)
            {
                return 1;
            }
            else
            {
                return $n * factorial($n - 1);
            }
        }

        echo factorial(8);

        ?>

</body>
</html>