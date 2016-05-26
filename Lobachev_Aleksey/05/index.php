<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>
        <input type="text" name="num" placeholder="Задай число">
    </p>
    <p>
        <input type="submit" name="submit" value="send">
    </p>
</form>
<?php
//Task1
if(isset($_REQUEST['submit'])){
    $n = $_REQUEST['num'];
    if(is_numeric($n)) {
        $sum=0;
        $i=1;
        while($i<=$n){
            $sum+=$i;
            $i+=3;
        }
        $sum+=$n;
        echo $sum;
    } else {
        echo "Введи число, епта!";
    }
}
echo "<hr>";
//Task2
$arr_task2=[];
for ($i=0;$i<=$n;$i++){
    $arr_task2[]=pow($i,2);
}
var_dump($arr_task2);
echo "<hr>";
//Task3
for ($i=0;$i<=$n;$i++){
    $arr_task3[]=$i%2;
}
var_dump($arr_task3);
echo "<hr>";
//Task4
$arr_task4=[4,3,2,4];
$a=count(array_unique($arr_task4));
$b=count($arr_task4);
echo ($b-$a==0)?("Нет повторяющихся значений"):("Есть повторяющиеся значения");
var_dump($arr_task4);
echo "<hr>";
//Task5
$arr_task5=[4,3,2,3,4,5,1,7];
var_dump($arr_task5);
echo "Без дублей<br>";
var_dump(array_unique($arr_task5));
echo "<hr>";
//Task6
$arr_task6=[];
for ($i=0;$i<=$n;$i++){
    $arr_task6[]=rand(-100, 100);
}
var_dump($arr_task6);
echo "С нолями<br>";
$len=count($arr_task6)-1;
$i=0;
while($i<=$len){
    if($arr_task6[$i]>=0){
        $i++;
    }else{
        $len++;
        for($j=$len;$j>$i;--$j){
            $arr_task6[$j]=$arr_task6[$j-1];
        }
        $arr_task6[$i+1]=0;
        $i++;
    }
}
var_dump($arr_task6);
echo "<hr>";
//Task7func
$arr_task7a=[4,3,2,3,4,5,1,7];
sort($arr_task7a);
var_dump($arr_task7a);
echo "<hr>";
//Task7withoutfunc
$arr_task7b=[8,9,8,3,4];
$len=count($arr_task7b);
for ($i=1; $i < $len; ++$i)
    {
        $k = $arr_task7b[$i];
        for ($j=$i-1; $j>=0 && $arr_task7b[$j] > $k; --$j){
            $arr_task7b[$j+1] = $arr_task7b[$j];
        }
        $arr_task7b[$j+1] = $k;
    }
var_dump($arr_task7b);
?>
</body>
</html>