<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeWork4</title>
</head>
<body>

<h2>Задание 1</h2>

<form method="post">
    <input type="submit" name="rand" value="Генерируем случайные числа от 0 до 10">
</form>

<?php
    $cols = rand(0, 10);
    $rows = rand(0, 10);
    echo "<br>Переменная cols равна ".$cols;
    echo "<br>Переменная rows равна ".$rows;
    echo "<hr>";
?>

<h2>Задание 2 и 3</h2>

<h3>Таблица умножения</h3>
<table style="border:1px solid black;">
    <?php for($i = 1; $i <= $rows; $i++):?>
        <tr style="border:1px solid black; text-align: center;">
            <?php if($i == 1)
                echo "<tr style=\"border:1px solid black; text-align: center; background-color: aqua; font-weight: 600;\">";?>
            <?php for($j = 1; $j <= $cols; $j++):?>
                <?php if($j == 1)
                    echo "<td style=\"border:1px solid black; text-align: center; background-color: greenyellow; font-weight: 600;\">".$i*$j."</td>";
                    else {
                        echo "<td style=\"border:1px solid black; text-align: center;\">".$i*$j."</td>";
                        }?>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<?="<hr>";?>

<h2>Задание 4</h2>

<?php
    for($i = 0; $i < 50; $i++){
        if($i % 2 == 0) continue;
        echo "Это выведенное в столбик нечетное число ",$i,"<br>";
    }
?>

</body>
</html>