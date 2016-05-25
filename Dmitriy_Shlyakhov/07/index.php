<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework7</title>
</head>
<body>

<h3>First task</h3>

<form method="post">
    <p>
        <label for="number">Enter the number:</label>
        <input type="text" name="number" style="width: 25px;" placeholder="<?=$_REQUEST['number'];?>">
    </p>
    <p>
        <input type="submit" name="submit" value="result">
    </p>
</form>

<?php

function outNumbers ($x) {
    if ($x < 1) {
        return;
    }else {
        outNumbers($x - 1);
        echo"$x ";
    }
}

outNumbers($_REQUEST['number']);
?>
<hr>

<h3>Second task</h3>

<form method="post">
    <p>
        <label for="number2">Enter A:</label>
        <input type="text" name="number2" style="width: 25px;" placeholder="<?=$_REQUEST['number2'];?>">
    </p>
    <p>
        <label for="number3">Enter B:</label>
        <input type="text" name="number3" style="width: 25px;" placeholder="<?=$_REQUEST['number3'];?>">
    </p>
    <p>
        <input type="submit" name="submit" value="result">
    </p>
</form>

<?php
function mySort ($a, $b) {
    if ($a > $b) {
        mySort($a - 1, $b);
    } elseif ($a < $b) {
        mySort($a + 1, $b);
    }
    echo "$a ";
}
mySort($_REQUEST['number2'], $_REQUEST['number3']);
?>
<hr>

<h3>Third task</h3>

<form method="post">
    <p>
        <label for="number4">Enter the number:</label>
        <input type="text" name="number4" style="width: 25px;" placeholder="<?=$_REQUEST['number4'];?>">
    </p>
    <p>
        <input type="submit" name="submit" value="result">
    </p>
</form>

<?php

function powerOfTwo($n) {
    if ($n > 1) {
        powerOfTwo($n/2);
    }elseif ($n == 1){
        echo "YES";
    }else{
        echo "NO";
    }
}

powerOfTwo($_REQUEST['number4']);

?>
<hr>

<h3>Fourth task</h3>

<form method="post">
    <p>
        <label for="number5">Enter N:</label>
        <input type="text" name="number5" style="width: 100px;" placeholder="<?=$_REQUEST['number5'];?>">
    </p>
    <p>
        <input type="submit" name="submit" value="result">
    </p>
</form>

<?php

function sortInReversOrder ($x) {
    if ($x < 10) {
        echo $x;
    }else {
        echo sortInReversOrder($x % 10) ." ";
        echo sortInReversOrder(intval(($x / 10)));
    }
}

sortInReversOrder($_REQUEST['number5']);

?>

</body>
</html>

