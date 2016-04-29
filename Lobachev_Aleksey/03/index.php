<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>
        <input type="text" name="age" placeholder="Задай число">
    </p>
    <p>
        <input type="submit" name="submit" value="send">
    </p>
</form>
<?php
if(isset($_REQUEST['submit'])){
    $age = $_REQUEST['age'];
    if(is_numeric($age)) {
        if ($age >= 1 && $age <= 17) {
            echo "Вам еще рано работать";
        } elseif ($age >= 18 && $age <= 59) {
            echo "Вам еще работать и работать";
        } elseif ($age > 59) {
            echo "Вам пора на пенсию";
        } else {
            echo "Неизвестный возраст";
        }
    } else {
        echo "Введи число, епта!";
    }
}
?>
</html>
</body>
