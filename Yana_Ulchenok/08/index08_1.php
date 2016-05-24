<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework08</title>
</head>
<body>

<h1>Заполните форму</h1>

<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    Имя: <input type="text" name="fname"><br>
    Фамилия: <input type="text" name="lname"><br><br>

    <input type="submit" value="Отправить!">
</form>

<?php

define("USERS_LOG","users.log");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $fn=trim(strip_tags($_POST["fname"]));
    $ln=trim(strip_tags($_POST["lname"]));
    $user="$fn $ln \n";
    file_put_contents(USERS_LOG,$user,FILE_APPEND);
    header("Location: file.php");
    exit;
}
echo "<hr>";

if(file_exists(USERS_LOG)){
    echo "Файл \"users.log\" существует";
}
else {
    echo "Файл \"users.log\" не существует";
}
?>
</body>
</html>
