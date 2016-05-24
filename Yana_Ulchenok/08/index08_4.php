<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Доменные имена для протоколов http и https</title>
</head>
<body>

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">

    Имя: <input type="text" name="name"><br><br>

    <input type="submit" value="Проверить"> <br><br>
</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST") {
    $str = $_POST["name"];
    $pattern = '/^https?:\/\/([a-z\d]{1,22}(\-*[a-z\d]{1,22})?\.){1,45}\w+\/?$/i';
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

