<?php
//1)функцию вычисления факториала
function fact($n){
    if($n==1){
        return 1;
    }
    return $n*fact($n-1);
}
function fact_ver2($n){
    $l=1;
    for($k=1;$k<=$n;++$k){
        $l *= $k;
    }
    return $l;
}
echo fact(5),"<hr>";
echo fact_ver2(5),"<hr>";
//2)выводить данные в календарном формате на текущий месяц.
function currentmonth(){
    $i=date('t');
    for($j=1;$j<$i;$j++){
        echo $j.".".date('m').".".date('Y')." ".date('D',mktime(0, 0, 0, date('m'), $j, date('Y')))."<br>";
    }
}
currentmonth();
echo "<hr>";
//3)функцию для генерации массива случайных чисел
function rand_arr($len,$min,$max){
    $arr=[];
    for($i=0;$i<$len;$i++){
        $arr[$i]=rand($min,$max);
    }
    return $arr;
}
var_dump(rand_arr(6,-200,100));
echo "<hr>";
//4)функция процентной коррекции
$input_arr=[1,0.8,3,2.4,2,9.43,3.335];
var_dump($input_arr);
function perccorrect($arr,$perc){
    $len=count($arr);
    if($perc<0){
        echo "Введи положительный процент";
        return;
    }else {
        for ($i = 0; $i < $len; $i++) {
            ($perc==0)?:($arr[$i] *= $perc);
        }
        return $arr;
    }
}
var_dump(perccorrect($input_arr,2));
?>