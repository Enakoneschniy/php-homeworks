<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dz5</title>
</head>
<body>
<?php
define("BR","<hr>");
echo "task1<br>Найти сумму 1+4+7+10+...+n.<br>";
$n=10;
$sum=0;
for ($i=1;$i<=$n;$i+=3){
    $sum+=$i;
}
echo "При n=$n сумма ряда 1+4+7+10+...+n. равна $sum";
echo BR;

echo "task2<br>";
$arr;
for ($i=0;$i<$n;$i++){
    $arr[$i]=$i*$i;
}
echo "<pre>";
print_r($arr);
echo "</pre>";
echo BR;

echo "task3<br>";
for ($i=0;$i<=$n;$i++){
     $arr_x[]=$i%2;
 }
 print_r($arr_x);
 echo BR;
 
 echo "task4<br>";
$a= array(  
  0 => 1,  
  1 => 2,  
  2 => 2,  
  3 => 2,  
  4 => 3, 
  5 => 3, 
); 
print_r(array_diff(array_count_values($a), array('1')));
echo BR;

echo "task5<br>";
$input = array(1, "2", "2", 4, 4, "5");
$result = array_unique($input);
print_r($result);
echo BR;

echo "task6<br>";
echo "Задание с повышенной сложностью:<br>Упорядочить значения массива по возрастанию. Реализовать двумя способами: ";
echo "с помощью стандартной функции и без.<br>";
for ($i=0; $i<=20; $i++){
    $arr[$i]=mt_rand(1,100);
}
$arr1=&$arr;
?>
    <div style="overflow: hidden;">
        <div style="float: left;">
            Исходный массив<br>
            <pre>
                <?php
                    print_r($arr);
                ?>
            </pre>
        </div>
        <div style="float: left;">
            1-й способ:<br>
            <pre>
                <?php
                    sort($arr1);
                    print_r($arr1);
                ?>
            </pre>
        </div>
        <div style="float: left;">
            2-й способ:<br>
            <pre>
                <?php
                    for($i=0;$i<count($arr)-1;$i++){
                        for($k=$i+1;$k< count($arr);$k++){
                            if($arr[$i]>$arr[$k]){
                                $temp=$arr[$i];
                                $arr[$i]=$arr[$k];
                                $arr[$k]= $temp;
                            }
                        }
                    }
                    print_r($arr);
                ?>
            </pre>
        </div>
    </div>
	
</body>
</html>