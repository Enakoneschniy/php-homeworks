<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$n = 25;
$arr = array();
for ($i = 1; $i <= $n;$i+=3 ){
$arr[] = $i;
}
echo '<pre>';
print_r($arr);
echo '<hr>';
echo array_sum($arr);
echo '<hr>';
$arRes = [];
$n = 10;
for($i = 0; $i < $n; $i++) {
    $arRes[] = $i * $i;
}
echo '<pre>';
print_r($arRes);
echo '<hr>';
$n = 10;
$arThree = array();
    for($i = 0;$i < $n; $i++){
        if($i%2==0)
            $arThree[$i] = 1;
else
        $arThree[$i] = 0;

    }
echo '<pre>';
print_r($arThree);
echo '<hr>';
echo 'пятое задание';
$arFour = array(1, 2, 4, 4, 2, 5, 8, 9, 4, 8, 9, 8,);
$arNew = array();
$arNew[] = $arFour[0];
var_dump($arNew);
    for ($i = 1; $i <= count($arFour); $i++) {
        $arNew[] = $arFour[$i];
        var_dump($arNew);
        for ($j = 0; $j < count($arNew); $j++) {
            if ($arFour[$i] != $arNew[$j]) {

            }else


          $del = array_pop($arNew);

            break;


        }

    }

echo '<pre>';
print_r($arNew);
echo '<hr>';


echo '<hr>';
$arFive = array(1 , 3, -5, 2, -9, 6, -7);
$arSix = array();
for ($i = 0;$i < count($arFive);$i++){
    if ($arFive[$i] < 0) {
        $arSix[] = $arFive[$i];
        $arSix[] = 0;
    }else
        $arSix[] = $arFive[$i];
}
echo '<br>';
print_r($arSix);


?>
</body>
</html>