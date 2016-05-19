<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>Задание 1</h3>
    <?php
    $a= array (1,4,7,10,57);
    echo array_sum($a);
    ?>
    <hr>
        <h3>Задание 2</h3>
    <?php
    $b = 5;
    $arr = [];
    for ($i=1;$i<=$b;$i++){
        echo $arr[]=pow($b,2);
    }
    ?>
    <hr>
    <h3>Задание 3</h3>
    <?php
    $arr = [1,0];
    foreach (range (0,1) as $b){
        echo $b. " ";
    }
    ?>
    <hr>
    <h3>Задание 4</h3>
    <?php
    $ar = array (1,2,2,4,5,6);
    print_r(array_count_values($ar));
    ?>
    <hr>
    </body>
</html>
