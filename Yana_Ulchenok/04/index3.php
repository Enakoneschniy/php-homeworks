<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF -8">
    <title>homework 03</title>
    <head/>

<?php
$age = 16;

    if ($age>= 18 && $age<= 59) {
        echo "Вам еще работать и работать";
    }
    elseif ($age > 59 && $age < 70) {
        echo "Вам пора на пенсию";
    }
    elseif ($age >= 1 && $age <= 17) {
        echo "Вам еще рано работать";
    }
    else
        echo "Неизвестный возраст";

?>

<body/>
<html/>