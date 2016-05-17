<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
function factorial($n)
{
    if ($n < 0) {
        return 0;
    }
    if ($n == 0) {
        return 1;
    }
    for ($i = 1, $fact = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
    }
    return $fact;
}
echo factorial(6);

echo '<hr>';
function calendar()
{
    date_default_timezone_set('Europe/Kiev');
    echo "Сегодня - " . date("d F Y") . "<br>";
    echo "Текущее время - " . date("H:i:s") . "<br>";
    $c = date("t") - date("d");
    for ($a = 1; $a <= $c; $a++) {
        echo date("d-m-Y-l", mktime(0, 0, 0, date("m"), date("d") + $a, date("Y"))) . '<br>';
    }
}
calendar();
echo '<hr>';
$arMass = array();
function sluchMass($min, $max, $leng)
{
    for ($i = 0; $i < $leng; $i++) {
        $gen = rand($min, $max);
        global $arMass;
        $arMass[] = $gen;
    }
}
sluchMass(2,56,20);
echo '<pre>';
print_r($arMass);

echo '<hr>';
function correct($procent)
{
global $arNew;
    $arKor = array(1, 1, 2.5, 5, 6.5, 10, 3.355, 400, 9.43, 15, 184, 99);
    $arNew = array();
    if($procent < 0){
        echo 'ошибка';
        exit;
    }
    if($procent < 0.8 or $procent > 80){
        echo 'вне диапазона';
        exit;
    }
    $korr = $procent/100;
    for ($i = 0; $i <= count($arKor); $i++) {

        if ($arKor[$i] == 1) {
            $arNew[] = $arKor[$i];
        } elseif ($arKor[$i] == 2.5) {
            $arNew[] = $arKor[$i] * 1.5;
        } elseif ($arKor[$i] == 10) {
            $arNew[] = $arKor[$i] * 3;
        } else
            $arNew[] = $arKor[$i] + $arKor[$i] * $korr;
    }
}
correct(81);
echo '<pre>';
print_r($arNew);
?>
</body>
</html>