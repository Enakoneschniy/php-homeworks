<h3>First task</h3>
<?
function fact($n){
    if ($n == 1){
        return 1;
    }
    return $n * fact($n-1);
}
?>
<h3>Second task</h3>
<?
function calend($str)
{
    for ($i = 1; $i <= date('t'); $i++) {
        if ($i == date('j')) {
            echo "<div style='color: red;'>";
            echo date($str, mktime(0, 0, 0, date('m'), $i, date('Y')));
            echo "</div>";
        } else {
            echo "<div>";
            echo date($str, mktime(0, 0, 0, date('m'), $i, date('Y')));
            echo "</div>";
        }

    }
}
calend('d F Y');
?>
<h3>Third task</h3>
<?
function rand_arr ($length,$min,$max){
    $arRand = [];
    for ($i = 0;$i < $length;$i++){
        $arRand[$i] = rand($min,$max);
    }

    return $arRand;
}
echo "<pre>";
echo var_dump (rand_arr(10,2,9) );
echo "</pre>";
?>
<h3>Fourth task</h3>
<form action="?" method="post">
    <input type="number" name="num" placeholder="Кол-во элементов массива"
           value="<?= isset($_REQUEST['num']) ? $_REQUEST['num'] : '' ?>">
    <input type="submit" name="submit" value="Send">

</form>
<?
$arNum = [];
for ($i = 0;$i < $_REQUEST['num'];$i++){
    $arNum[] = rand(1,10);
}
echo "<pre>";
var_dump($arNum);
echo "</pre>";
echo "<hr>";
function correct($arRes,$pr){
    for ($i = 0;$i < count($arRes);$i++){
        $arRes[$i] = $arRes[$i] * $pr;
    }
    return $arRes;
}

echo "<pre>";
var_dump(correct($arNum,0.5));
echo "</pre>";
?>
