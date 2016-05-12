<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание</title>
</head>
<body>
<?php

// Задание 1 Найти сумму 1+4+7+10+...+n.

$sum=0;
$ar1=[0=>1,
    1=>4,
    2=>7,
    3=>10,
    4=>13];
for($i=0;$i<count($ar1); $i++){
    $sum += $ar1[$i];

}
echo $sum,"<br>";

echo"<hr>";

// Задание 2 Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.

for($i=0;$i<count($ar1); $i++) {
    $a=pow($ar1[0],2);
    $b=pow($ar1[1],2);
    $c=pow($ar1[2],2);
    $d=pow($ar1[3],2);
    $e=pow($ar1[4],2);
}
echo $a,"<br>";
echo $b,"<br>";
echo $c,"<br>";
echo $d,"<br>";
echo $e,"<br>";



echo"<hr>";

// Задание 3 Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начинаяс нуля

$ar = array();
for($i = 1; $i<=10; $i++) {
    if($i % 2 == 0){
        $ar[$i] = 1;
    }
    else {
        $ar[$i] = 0;
    }

}
echo '<pre>';
print_r($ar);

echo"<hr>";

// Задание 4 , 5 Определите, есть ли в массиве повторяющиеся элементы и удалить их


$ar2=[0,1,5,3,2,4,3,2,5,6,7,2];
$input=array_unique($ar2);
echo '<pre>';
print_r($input);

echo"<hr>";

//// Задание 6 Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением
$ar3=[1,-2,4,-6,4,4,6,-7];

echo "<br>";
if ($ar3[0] <0)
{
    unset($ar3[0]);
}
if ($ar3[1] <0)
{
    unset($ar3[1]);
}
if ($ar3[2] <0)
{
    unset($ar3[2]);
}
if ($ar3[3] <0)
{
    unset($ar3[3]);
}
if ($ar3[4] <0)
{
    unset($ar3[4]);
}
if ($ar3[5] <0)
{
    unset($ar3[5]);
}
if ($ar3[6] <0)
{
    unset($ar3[6]);
}
if ($ar3[7] <0)
{
    unset($ar3[7]);
}


echo '<pre>';
print_r($ar3);



?>

</body>
</html>