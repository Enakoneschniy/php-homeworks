<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomeWork3</title>
</head>
<body>
<form method="post">
    <p>
        Введите Ваш возраст: <input type="text" name="age" style="width: 20px;" placeholder="<?php echo $_REQUEST['age']; ?>">
    </p>
    <p>
        <input type="submit" name="submit" value="Ввести">
    </p>
</form>

<?php
    if (isset($_REQUEST['submit'])) {
        $age = $_REQUEST['age'];
        $x = null;
        $y = null;
        $z = null;
        if ($age > 18 and $age <= 59) {
            $z = 59 - $age;
            $y = $age - 18;
            $x = "Вам еще работать и работать. А точнее вы уже работаете $y лет и следовательно до пенсии вам осталось $z лет.";
        } elseif ($age > 59) {
            $y = $age - 59;
            $x = "Вам пора на пенсию, а точне уже $y лет как пора.";
        } elseif ($age > 1 and $age <= 17) {
            $y = 17 - $age;
            $x = "Вам еще рано работать, Вам еще $y лет учиться.";
        } else {
            $x = "Неизвесный возраст";
        }
        echo $x;
    }
?>

</body>
</html>