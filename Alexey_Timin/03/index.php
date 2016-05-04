<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
$age = rand(1 , 80);//граница задана для удобства проверки
    echo "возраст : ",$age,"<br>";
if($age >= 18 && $age <=59) {
    echo "вам еще работать и работать", "<hr>";
}
elseif ($age > 59 && $age <= 65) { //граница задана для удобства проверки
    echo "вам пора на пенсию", "<hr>";
}
elseif ($age >= 1 && $age <=17) {
    echo "вам еще рано работать", "<hr>";
}
else {
    echo "неизвестный возраст","<hr>";
}

?>
</body>
</html>
