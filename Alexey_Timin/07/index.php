<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo '<hr>';
function recursia($n)
{
    if ($n == 0) {
        return 'stop';

    } else
        recursia($n - 1);
    echo $n . '<br>';
}
 recursia(10);
echo '<hr>';


function recurcia_1($a, $b)
{

    if ($a < $b) {

        recurcia_1($a, $b - 1);
        echo $b . '  ';

    } elseif ($a > $b) {
        recurcia_1($a, $b + 1);
        echo $b . ' ';
    } else echo "$b".' ';
    return;
}
recurcia_1(20, 6);

echo '<hr>';

function namberN($n)
{
    $c = 2;
    $x = log($n, $c);
    $y = $x - 1;

    echo $y;
     if(is_int($y)) {
         return 'yes';
     } else
         return 'no';
}
echo namberN(512);
echo '<hr>';

$r = 0;
function natur4($n)
{
    global $r;

    if ($n == 0) {
         return;
}
    if (($n % 10) == 0) {
        natur4($n / 10);

        echo "$r"." <br> ";
         $r = 0;
    } else {
        natur4($n - 1);
         $r++;
    }

}
natur4(3248570);


?>



</body>
</html>