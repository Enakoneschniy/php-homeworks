<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>lesson 3</title>
</head>
<body>
<form method="post">
    <p>Ваш возраст: <input type="text" name="age" /></p>
    <p><input type="submit" /></p>
</form>


<?php

if (!empty($_POST)) {
    $age = (int)$_POST['age'];

    if ($age >= 18 && $age <= 59) {
        echo "Вам еще работать и работать";
    } elseif ($age > 59) {
        echo "Вам пора на пенсию";
    } elseif ($age >= 1 && $age <= 17) {
        echo "Вам еще рано работать";
    } else {
        echo "Неизвестный возраст";
    }
}

?>

</body>
</html>
