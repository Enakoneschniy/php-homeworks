<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dz5</title>
</head>
<body>
<p>DZ_6</p>
<?php
define("BR","<hr>");
echo "task1<br>";
echo "факториал 3=> <br>";
function fact($n)
{
if ($n==0) return 1;
else 
return $fact = $n * fact($n-1);
}
echo fact(3). "<br>";
echo BR;

echo "task2<br>";
echo "_______Май________<br>";
echo "Пн Вт	Ср Чт Пт Сб	Вс<br>";
date_default_timezone_set('UTC');
$today = array(
"year" => date(Y),//year
"month" => date(n),//month
"days" => date(t),//days in month
"N" => date(N),//day of week
);
$startday = date(N, mktime(0, 0, 0, $today['month'], 1, $today['year']));
echo "<table border=1><tr>";
for ($day = 1; $day < $startday; $day++)

{
echo "<td>"."--"."</td>";
}
for ($day=1; $day<=$today['days']; $day++)
{
	echo "<td>".$day."</td>";
	if (date(N, mktime(0, 0, 0, $today['month'], $day, $today['year']))%7==0)
	{
		echo "<tr></tr>";
	}
}
$endday = date(N, mktime(0, 0, 0, $today['month'], $today['days'], $today['year']));
for ($day = $endday; $day < 7; $day++)
{
echo "<td>"."--"."</td>";
}
echo "</table>";
echo BR;

echo "task3<br>";
echo "массива случайных часел<br>";
$arr=[];
function rand_arr($n,$min,$max){
for($i=0;$i<$n;$i++){
         $arr[$i]=rand($min,$max);
     }
     return $arr;
 }
 print_r (rand_arr(10,1,100));
echo BR;

echo "task4<br>";
echo "функция процентной коррекции<br>";

$input_arr=[5,6.5,10,3.555,400,9.43];
print_r($input_arr);
echo "<br>";
 function perccorrect($arr,$perc){
     $x=count($arr);
     if($perc<0){
         return;
     }else {
         for ($i = 0; $i < $x; $i++) {
             ($perc==0)?:($arr[$i] *= $perc);
         }
         return $arr;
     }
}
print_r(perccorrect($input_arr,2));
echo BR;
