<?
session_start();
$_SESSION['age'] = $_POST['age'];
$_SESSION['pages'][]=$_SERVER['PHP_SELF'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3</title>
</head>
<body>
<div>Задание с картинки</div>
<?php
echo "Вас зовут ",$_SESSION['firstname']," ",$_SESSION['secondname'],".Ваш возраст ",$_SESSION['age'],"<br>";
echo "Вы посещали:<br>";
foreach ($_SESSION['pages'] as $value){
    echo $value,"<br>";
}
?>
</body>
</html>

