<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
// task 1
$name = Edik;
$age = 27;
echo "My name is $name!";
echo "<br>";
echo "I'm $age years old!";
echo "<hr>";

// task 2
$a = 5;
$s = 1/4*$a*sqrt(3);
print "a = $a";
echo "<br>";
echo "The area of ​​an equilateral triangle is $s";
echo "<hr>";
// task 3
$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);
if ($a < $c) {
    $x = $a + $b / ($c * $a);
}
if ($a = $c) {
    $x = 100;
}
if ($a>$c) {
    $x = $c*3*$b + $c / $c * (sqrt($c));
}
echo "X = $x";
echo "<br>";
echo "a = $a";
echo "<br>";
echo "b = $b";
echo "<br>";
echo "c = $c";
echo "<hr>";
?>
</body>
</html>