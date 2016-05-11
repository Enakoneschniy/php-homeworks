

<form method="post">
    <p>Enter a: <input type="text" name="a" /></p>
    <p>Enter b: <input type="text" name="b" /></p>
    <p>Enter c: <input type="text" name="c" /></p>
    <p><input type="submit" /></p>
</form>

<?php
if (!empty($_POST)) {

    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $c = (float)$_POST['c'];

    if ($a < $c) {
        $x = $a + $b / $c * $a;
    } elseif ($a == $c) {
        $x = 100;
    } elseif ($a > $c) {
        $x = $a * $c * 3 * $b + $c / $c * sqrt($c);
    }
    echo "$x";
}

?>