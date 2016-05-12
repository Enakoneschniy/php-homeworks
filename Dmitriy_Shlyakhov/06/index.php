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

    for ($i = 2; $i <= $n; $i++)
    {
        $res = $res * $i;
    }

    return $res;
}

echo factorial($_REQUEST['number']);

?>
<hr>

<h3>Второе задание</h3>
<?php



?>
<hr>

<h3>Третье задание</h3>
<?php


?>
<hr>

<h3>Четвертое задание</h3>
<?php


?>
<hr>

<h3>Пятое задание</h3>
<?php


?>
<hr>

<h3>Шестое задание</h3>
<?php


?>
<hr>

<h3>Седьмое задание</h3>
<?php


?>

</body>
</html>