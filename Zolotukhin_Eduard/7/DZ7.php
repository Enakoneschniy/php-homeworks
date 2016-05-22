<?php
echo "DZ7<br>";
echo "task1<br>";
echo "vse chisla ot 1 do n<br>";
function natnum($x){
if ($x > 1) { natnum($x-1); }
echo $x." ";
}
natnum(10);
echo "<hr>";

echo "task2<br>";
function numbersout($a,$b){
if ($a<$b){
numbersout($a,$b-1);
}elseif ($a<$b){
numbersout($b,$b+1);
}
echo $a." ";
//echo "<br>";
echo $b." ";
}
numbersout(5,10);
echo "<hr>";

echo "task3<br>";
function powoftwo($n){
     if ($n>1){
         powoftwo($n/2);
     }elseif ($n==1){
         echo "yes";
     }else{
         echo "no";
     }
 }
 powoftwo(5);
 echo "<hr>";
echo "task4<br>";
 function numer($n){
     if(intval($n/10)>0){
         numer(intval($n/10));
     }
     echo $n%10," ";
 }
 numer(13479);
 
 
 
 
 
 
 
 
 