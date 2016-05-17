<?php
$arrNum = [];
$n =5;
for($i = 1; $i <= $n; $i+=3){
   $sum= $arrNum[] += $i;
   echo $sum;}
echo "<hr>";
?>
<?php
$sum=0;
$n=5;
for ($i=1; $i<=$n; $i+=3){
    $res = $sum += $i;
echo $res;}
echo "<br>Не получается одинакового результата!!!";
    ?>
    <hr>
    Задача 2.
<?php
$arr = Array();
$k =5;
for($i=0;$i<=$k; $i++){
    $arr[] = pow ($i, 2);
}
echo "<pre>";
print_r($arr);
?>
<hr>
Задача 3.
<?php
$arr = Array();
$n=5;
for($i=1;$i<=$n; $i++){
    if($i%2==0){
        $arr[]=1;
    }else {
        $arr[]=0;
    }
}
    echo "<pre>";
print_r($arr);

?>
    <hr>
    Задача 4.
<?php
$arrNum = Array(1,2,3,4,5,6,7,8,9,5,7,3,1);
echo "<pre>";
print_r(Array_count_values($arrNum));
?>
<hr>
Задача 5.
<?php
$arrNum = Array(1,2,3,4,5,6,7,8,9,5,7,3,1);
$a = Array_unique($arrNum);
echo "<pre>";
print_r ($a);
?>