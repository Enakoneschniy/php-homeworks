<?php
// Задача 1
$name="Sergey";
$ageSergey="32";
echo "Меня зовут $name ","<br>";
echo "Мне $ageSergey года";
echo"<hr>";

//Задача 2
$a=5;// Допустим сторона треугольника равна 5
$S= ($a*$a)*sqrt(3)/4;
echo "Площадь треугольника равна $S";// получаем  10.82531754730511
echo"<hr>";

// Задача 3
$a=10;// задаем значение , все переменные равны
$b=10;
$c=10;
$X=0;
if($a=$c){
$X=$a+$b/$c*$a;	
echo "Получим $X";
}
else if ($a>$c){
$X=$c*(3*$b)/$c*sqrt($c);
echo "Будет $X"; 
}
else echo 'Не работает ';




