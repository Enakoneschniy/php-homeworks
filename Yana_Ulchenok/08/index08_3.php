<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Выбрать числа с запятой или пробелом, в качестве разделителя разрядов</title>
</head>
<body>

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">

    Число: <input type="text" name="number"><br><br>

    <input type="submit" value="Проверить"><br><br>
</form>

<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $str = $_POST["number"];
    $pattern = '/^\d{1,3}([, ]\d{3})*([.,]\d+)?$/';
    $matches = [];
    if (preg_match($pattern, $str, $matches)) {
        echo "TRUE";
        echo "<pre>";
        print_r($matches);
        echo "</pre>";
    } else {
        echo "FALSE";
    }
}
?>
</body>
</html>

