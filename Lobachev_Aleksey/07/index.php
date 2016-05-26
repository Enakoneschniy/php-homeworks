<?php
//1.натуральные числа
function natnum($n){
    if ($n > 1) { natnum($n-1); }
    echo $n." ";
}
natnum(3);
echo "<hr>";
//2.вывод чисел от A до B
function numbersout($a,$b){
    if ($a<$b){
        numbersout($a,$b-1);
    }elseif ($a>$b){
        numbersout($a,$b+1);
    }
    echo $b." ";
}
numbersout(8,5);
echo "<hr>";
//3.проверка точной степенью двойки
function powoftwo($n){
    if ($n>1){
        powoftwo($n/2);
    }elseif ($n==1){
        echo "YES";
    }else{
        echo "NO";
    }
}
powoftwo(9);
echo "<hr>";
//4.Вывод цифр натурального числа
function numer($n){
    if(intval($n/10)>0){
        echo $n%10," ";
        numer(intval($n/10));
    }else{
        echo $n;
    }
}
numer(1785);
?>
