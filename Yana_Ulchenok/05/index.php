<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework05</title>
</head>
<body>


<?php

//task 1
$n=25;
$sum = 0;

for($i = 1; $i <= $n; $i +=3){
    $res = $sum += $i;
}
echo $res;

echo "<hr>";//task 2

$arr = array();
$n = 10;
for($i=0; $i<= $n; $i++){
    $arr[] = pow($i, 2);
}
echo "<pre>";
var_dump ($arr);

echo "<hr>";//task 3

$array = array();
$n=9;
for ($i = 1; $i <= $n; $i++){
    if($i%2 == 0){
        $array[] = 1;
    }
    else {
        $array[]= 0;
    }
}
echo "<pre>";
var_dump($array);

echo "<hr>";//task 4

$arNumbers = array (1,2,3,2,5,6,3);

echo "<pre>";
var_dump(array_count_values($arNumbers));

echo "<hr>";//task 5

$input = array (1,2,3,2,5,6,3);
$new = array_unique($input);

echo "<pre>";
var_dump($new);

echo "<hr>";//task 6

$arr1 = array (-2, -1, 1, 2, 3, 4);
$n = count($arr1);

for($i = 0; $i < $n; $i++) {
    if ($arr1[$i] < 0) {
        array_splice($arr1, $i + 1, 0, 0);
    }
}
echo "<pre>";
var_dump($arr1);

?>

</body>
</html>


