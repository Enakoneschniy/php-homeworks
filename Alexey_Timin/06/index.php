<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
function factorial($n)
{
    if ($n < 0) {
        return 0;
    }
    if ($n == 0) {
        return 1;
    }
    for ($i = 1, $fact = 1; $i <= $n; $i++) {
        $fact = $fact * $i;
    }
    return $fact;
}
echo factorial(6);

echo '<hr>';
function calendar()
{
    date_default_timezone_set('Europe/Kiev');
    echo "Сегодня - " . date("d F Y") . "<br>";
    echo "Текущее время - " . date("H:i:s") . "<br>";
    $c = date("t") - date("d");
    for ($a = 1; $a <= $c; $a++) {
        echo date("d-m-Y-l", mktime(0, 0, 0, date("m"), date("d") + $a, date("Y"))) . '<br>';
    }
}
calendar();
echo '<hr>';
?>
</body>
</html>