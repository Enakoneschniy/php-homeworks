<?php
session_start();
$_SESSION['age']=$_POST['age'];
echo 'Проверьте ваши данные:'.'<br>';
print_r($_SESSION['name'].'<br>');
print_r($_SESSION['fam'].'<br>');
print_r($_SESSION['age'].'<br>');


$e = $_SERVER['REQUEST_URI'];
$vsePos = array();
$vsePos[3] = $e;

echo 'вы посетили страницы:'.'<br>';
$_SESSION['vsePos'][3]=$vsePos;
echo '<pre>';
print_r($_SESSION['vsePos'][0][0].'<br>');
print_r($_SESSION['vsePos'][1][1].'<br>');
print_r($_SESSION['vsePos'][2][2].'<br>');
print_r($_SESSION['vsePos'][3][3].'<br>');
echo '</pre>';

session_unset();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

</body>
</html>

