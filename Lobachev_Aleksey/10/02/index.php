<?
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3</title>
</head>
<body>
<div>Задача про время захода на сайт</div>
<br>
<?php
if(!isset($_SESSION['firsttime'])){
    $_SESSION['firsttime']=time();
}else{
    echo "Вы были здесь первый раз ",time()-$_SESSION['firsttime']," секунд назад";
}
?>
</body>
</html>

