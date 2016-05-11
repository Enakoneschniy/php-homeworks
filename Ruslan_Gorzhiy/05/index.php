<?php

echo '1. Найти сумму 1+4+7+10+...+n. n - можно изменять.';

function res(){

    return $_POST['n']+$_POST['n1']+$_POST['n2']+$_POST['n3']+$_POST['n4']+$_POST['n5'];
}

print ' <form method="POST">
        <input type="number" size="5" name="n" min="1" max="5" value="'.$_POST['n'].'">
        + <input type="number" size="5" name="n1" min="1" max="5" value="'.$_POST['n1'].'">
        + <input type="number" size="5" name="n2" min="1" max="5" value="'.$_POST['n2'].'">
        + <input type="number" size="5" name="n3" min="1" max="5" value="'.$_POST['n3'].'">
        + <input type="number" size="5" name="n4" min="1" max="5" value="'.$_POST['n4'].'">
        + <input type="number" size="5" name="n5" min="1" max="5" value="'.$_POST['n5'].'">
        = <input type="text" name="resultat"  value="'.res().'">
        <input type="Submit" name="resultat"  value="result">
        </form>';




echo '<hr>';

echo '2. Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера<br>';

$num = rand(1,10);
$arr = [];

for ($i=1;$i<=$num;$i++){

    $arr[]= pow(rand(1,10),2);

}

print_r($arr);

echo '<hr>';

echo '3. Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля<br>';

$num = rand(1,10);
$arr = [];

for ($i=0;$i<=$num;$i++){

    $n = count($arr);

    if ($n==0) {

        $arr[] = 0;

    }
    elseif ($n>0){

        if ($arr[$i-1] == 0) {
            $arr[] = 1;
        }
        else{
                $arr[] = 0;
            }
        }

}

print_r($arr);

echo '<hr>';

echo '4. Определите, есть ли в массиве повторяющиеся элементы<br>';
$arr = array(1, 2, 4, 4, 2, 5);
print_r(array_count_values($arr));

echo '<hr>';

echo '5. Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5<br>';

$arr = array(1, 2, 4, 4, 2, 5);
$arrres = array_unique($arr);
print_r($arrres);

echo '<hr>';

echo '6. Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением<br>';

$arr = array(1, -2, 4, -4, -2, -5, 6, 7, 8, -9, -10);
$n = count($arr);
$arres = [];

for ($i=0;$i<$n;$i++){

    if ($arr[$i] < 0) {

        $arres[] = $arr[$i];
        $arres[] = 0;

    }elseif($arr[$i] >= 0){
        $arres[] = $arr[$i];
    }

}

print_r($arr);
echo '<br>';
print_r($arres);

echo '<hr>';

echo 'Упорядочить значения массива по возрастанию.[1,21,8,9,7,14,5,5,25] Реализовать двумя способами: с помощью стандартной функции и без.<br>';

$arr = [1,21,8,9,7,14,5,5,25];
sort($arr);
print_r($arr);

echo '<br>';

$sr = [];

foreach($arr as $key=>$val) {

    $m = max($arr);
    array_unshift($sr, $m);
    unset($arr[array_search($m, $arr)]);

}
print_r($sr);


?>