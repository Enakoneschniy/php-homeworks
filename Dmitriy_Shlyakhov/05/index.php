<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework5</title>
</head>
<body>

<h3>Первое задание</h3>

<form action="" method="post">
    <p>
        <label for="number">Введите число</label>
        <input type="text" name="number" style="width: 25px;" placeholder="<?=$_REQUEST['number'];?>">
    </p>
    <p>
        <input type="submit" name="submit" value="result">
    </p>
</form>

<?php

$arSum = [1, 4, 7, 10, 13, 16, 18, 22, 25, 28, 31, 33, 35, 38, 40];
var_dump($arSum);

if($_REQUEST['submit'] == 'result'){
    for($i = 0; $i < $_REQUEST['number']; $i++) {
        $sum += $arSum[$i];
    }
    echo 'Сумма задаваемого числа элементов массива равна = '.$sum;
}
?>
<hr>

<h3>Второе задание</h3>
<?php

$arSquare = [];

for ($i = 0; $i < $_REQUEST['number']; $i++) {
    $arSquare[] = pow($i, 2);
}


var_dump($arSquare);
?>
<hr>

<h3>Третье задание</h3>
<?php

$arNull = [];
for ($i = 1; $i < $_REQUEST['number']; $i++) {
   if ($i % 2 == 0) {
       $arNull[] = 1;
   } else {
       $arNull[] = 0;
   }

}
var_dump($arNull);

?>
<hr>


<h3>Четвертое и Пятое задание</h3>
<?php

$arRepDel = [1, 2, 1, 3, 5, 2, 'Коля', 'Олег', 'Олег', 'Гриша', 'Коля'];
var_dump($arRepDel);

$res = array_unique($arRepDel);
var_dump($res);


?>
<hr>

<h3>Шестое задание</h3>
<?php

$arInput = [1, -2, 3, -4, 5];

for ($i = 1; $i <count($arInput); $i++){
    if ($arInput[$i] < 0){
        array_splice($arInput, $i + 1, 0, 0);
    }
}
var_dump($arInput);

?>
<hr>

<h3>Седьмое задание</h3>
<?php


?>

</body>
</html>