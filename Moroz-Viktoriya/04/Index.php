<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Work 3</title>
</head>
<body>
    <h3>Задача 1</h3>
    <?php
    $cols = mt_rand(1,10);
    $rows = mt_rand(1,10);
    echo "Вывод рандомных чисел $cols и $rows";
    ?>
    <hr>
    <h3>Задача 2</h3>
    <p>Таблица умножения</p>
    <?php
    echo"<table> <tr>";
    for ($cols = mt_rand(1,10); $cols <= 10; $cols++)
    {
    for ($rows = 1; $rows <= 10; $rows++)
    echo "<td>".($cols*$rows)."</td>";
    if ($cols != 10) echo "</tr><tr>";
    };
    echo "</tr></table>";
    ?>
    <h3>Задача 2.1</h3>
    <?php
    for ($rows = 1; $rows <=10; $rows++){
        for ($cols = 1; $cols <=1; $cols++){
            echo ($rows*$cols);
            echo " ";
        }
    }
    ?>


</body>
</html>