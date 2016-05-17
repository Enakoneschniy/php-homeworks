<h3>First task</h3>
<form action="?" method="post">
    <input type="number" name="num" placeholder="Кол-во элементов массива"
           value="<?= isset($_REQUEST['num']) ? $_REQUEST['num'] : '' ?>">
    <input type="submit" name="submit" value="Send">

</form>
<?
$arNum = [];
for ($i = 0; $i < $_REQUEST['num']; $i++) {
    $arNum[] = 1 + 3 * $i;
}
$sum = 0;
foreach ($arNum as $item) {
    $sum += $item;
}
echo $sum;
echo "<hr>";
?>
<h3>Second task</h3>
<form action="?" method="post">
    <input type="number" name="sqr" placeholder="Кол-во элементов массива"
           value="<?= isset($_REQUEST['sqr']) ? $_REQUEST['sqr'] : '' ?>">
    <input type="submit" name="submit" value="Send">

</form>
<?
$arSqr = [];
for ($i = 0; $i < $_REQUEST['sqr']; $i++) {
    $arSqr[] = pow($i, 2);
}
echo "<pre>";
var_dump($arSqr);
echo "<hr>"
?>
<h3>Third task</h3>
<form action="?" method="post">
    <input type="number" name="bin" placeholder="Кол-во элементов массива"
           value="<?= isset($_REQUEST['bin']) ? $_REQUEST['bin'] : '' ?>">
    <input type="submit" name="submit" value="Send">
</form>
<?
$arBin = [];
for ($i = 0; $i < $_REQUEST['bin']; $i++) {
    if ($i % 2 == 0) {
        $arBin[$i] = 0;
    } else $arBin[$i] = 1;

}
echo "<pre>";
var_dump($arBin);
echo "<hr>";
?>
<h3>Fourth task</h3>
<?
$match = 0;
$a = 1;
$arMatch = [];
$arRnd = [];
for ($i = 0; $i < 10; $i++) {
    $arRnd[] = rand(1, 10);
    echo $arRnd[$i] . " ";
}

echo "<hr>";
for ($i = 0; $i < count($arRnd); $i++) {
    if (!(array_search($arRnd[$i], $arMatch) > 0))
        for ($j = $i; $j < count($arRnd); $j++) {
            if ($i != $j) {
                if ($arRnd[$i] == $arRnd[$j]) {
                    $match++;
                    $arMatch[$a] = $arRnd[$i];
                    $a++;
                }
            }
        }
}
echo "Кол-во совпадений " . $match;
echo "<hr>";
?>

<h3>Fifth task</h3>

<?
$arRand = [];
$arRes = [];
for ($i = 0; $i < 10; $i++) {
    $arRand[] = rand(1, 10);
    echo $arRand[$i] . " ";

}
for ($i = 0; $i < 10; $i++) {
    if (!in_array($arRand[$i], $arRes)) {
        $arRes[] = $arRand[$i];
    }
}
echo "<pre>";
var_dump($arRes);
echo "</pre>";

?>

<h3>Task 6</h3>
<form action="?" method="post">
    <input type="number" name="zero" placeholder="Кол-во элементов массива"
           value="<?= isset($_REQUEST['zero']) ? $_REQUEST['zero'] : '' ?>">
    <input type="submit" name="submit" value="Send">

</form>
<?
$arZero = [];
$arZeroRes = [];
for ($i = 0; $i < $_REQUEST['zero']; $i++) {
    $arZero[] = rand(-10, 10);
}

for ($i = 0; $i < count($arZero); $i++) {
    if ($arZero[$i] >= 0) {
        $arZeroRes[] = $arZero[$i];
    } else {
        $arZeroRes[] = $arZero[$i];
        $arZeroRes[] = 0;
    }
}
echo "<pre>";
var_dump($arZeroRes);
echo "</pre>";
?>
<h3>Task 7</h3>
<h5>первый способ</h5>
<?
$arSortFirst = [];
for ($i = 0; $i < 10; $i++) {
    $arSortFirst[] = rand(1, 10);
}
var_dump($arSortFirst);
sort($arSortFirst);
echo "<hr>";
echo "<pre>";
var_dump($arSortFirst);
echo "</pre>";
?>
<h5>второй способ</h5>
<?
$arSortSecond = [];

for ($i = 0; $i < 10; $i++) {
    $arSortSecond[] = rand(1, 10);
}
var_dump($arSortSecond);
echo "<hr>";
for ($i = (count($arSortSecond)-1);$i >= 0;$i--){
    for ($j = 0;$j <=($i-1);$j++){
        if ($arSortSecond[$j]>$arSortSecond[$i+1]){
            $s = $arSortSecond[$j];
            $arSortSecond[$j] = $arSortSecond[$i+1];
            $arSortSecond[$i+1] = $s;
        }
    }
}
echo "<pre>";
var_dump($arSortSecond);
echo "</pre>";
?>

