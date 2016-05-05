<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$age = 31;
echo "Мне $age год";
?>
<form action="" method="post">
    <p><input type = "text" name = "age" placeholder = "Возраст"></p>
    <p><input type = "submit" name = "submit" value = "Жми уже"></p>
</form>
<?php
$age = null;
if(isset($_REQUEST['submit'])) {
    $age = $_REQUEST['age'];
    if ($age > 17 and $age <= 59){
        echo "Вам ещё прийдёться поработать";
    } elseif ($age > 1 and $age <= 17) {
        echo "Вам рано на работу";
    } elseif ($age > 59){
        echo "Пора дома получать пенсию";
    } else {
        echo "Не вводи что зря";
    }
}
?>
</body>
</html>