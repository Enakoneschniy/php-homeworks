<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework6</title>
</head>
<body>

<h3>First task</h3>

<form method="post">
    <p>
        <input type="text" name="number" placeholder="<?=$_REQUEST['number'];?>">
    </p>
    <p>
        <input type="submit" name="submit" value="result">
    </p>
</form>

<?php

function factorial($n)
{
    $res = 1;

    for ($i = 2; $i <= $n; $i++) {
        $res = $res * $i;
    }

    return $res;
}

echo factorial($_REQUEST['number']);

?>
<hr>


<h3>Second task</h3>
<?php

function thisMounth () {
    $dayofmonth = date('t');
    $day_count = 1;
    $num = 0;

    for($i = 0; $i < 7; $i++) {
        $dayofweek = date('w', mktime(0, 0, 0, date('m'), $day_count, date('Y')));
        $dayofweek = $dayofweek - 1;

        if($dayofweek == -1) $dayofweek = 6;

        if($dayofweek == $i) {
            $week[$num][$i] = $day_count;
            $day_count++;
        }
        else
        {
            $week[$num][$i] = "";
        }

    }

    while(true) {
        $num++;
        
        for($i = 0; $i < 7; $i++) {
            $week[$num][$i] = $day_count;
            $day_count++;
            
            if($day_count > $dayofmonth) break;
        }
        
        if($day_count > $dayofmonth) break;
    }
    
    echo "<table border=1>";

    for($i = 0; $i < count($week); $i++) {
        echo "<tr>";
        for($j = 0; $j < 7; $j++) {
            if(!empty($week[$i][$j])) {
                if($j == 5 || $j == 6)
                    echo "<td>".$week[$i][$j]."</td>";
                else echo "<td>".$week[$i][$j]."</td>";
            }
            else echo "<td>&nbsp;</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

thisMounth();

?>

<hr>

<h3>Third task</h3>
<?php

function arGeneration($arLength, $arMinValue, $arMaxValue) {
    for($i =1; $i <= $arLength; $i++) {
        $array [] = rand($arMinValue, $arMaxValue);
    }
    return $array;
}

var_dump(arGeneration(5, 1, 10))

?>
<hr>

<h3>Fourth task</h3>

<form method="post">
    <p>
        <label for="percent">Enter the percentage of correlations:</label>
        <input type="text" style="width: 25px;" name="percent" placeholder="<?=$_REQUEST['percent'];?>">
    </p>
    <p>
        <input type="submit" name="submit" value="result">
    </p>
</form>

<p>Array before correction:</p>

<?php

$arInput = [5, 6.5, 10, 3.355, 400, 9.43];
var_dump($arInput);

function percentCorrection($array,$percent) {

    $lengh = count($array);

    if ($percent < 0) {
        echo "Correction can not be negative";
        return;
    } else {
        for ($i = 0; $i < $lengh; $i++) {
            $array[$i] = $array[$i] * $percent / 100;
        }
        return $array;
    }

}

echo "Array after correction:<br>";
var_dump(percentCorrection($arInput, $_REQUEST['percent']));
?>

</body>
</html>