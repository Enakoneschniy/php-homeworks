<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    //task 1
    $age = 31;//Возраст
    if ($age >= 18 and $age < 60) {
        echo "Вам еще работать и работать";
    }
        elseif ($age >= 1 and $age < 18) {
        echo "Вам еще рано работать";
    }
        elseif ($age >= 60) {
        echo "Вам пора на пенсию";
    } else {
        echo "Неизвестный возраст";
    }
    ?>
</body>
</html>


