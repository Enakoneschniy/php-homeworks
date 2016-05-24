<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Выбрать существующие даты между 1000 и 2012 годом YYYY/MM/DD HH:MM</title>
</head>
<body>

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">

    Дата: <input type="text" name="date"><br><br>

    <input type="submit" value="Проверить"><br><br>
</form>

<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $str = $_POST["date"];
    $pattern = '/^(1\d{3}|20(0\d|1[0-2]))\/(0[1-9]|1[012])\/(0[1-9]|[12]\d|30) ([01]\d|2[0-3]):[0-5]\d(:([0-5]\d))?$/';
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

