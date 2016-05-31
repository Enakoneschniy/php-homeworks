<?php
session_start();
$_SESSION['fam']=$_POST['fam'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<form method="post" action="index3.php">
    <p><label for="age">ваш возраст</label>
        <input type="text" name="age"><br><br><br>
        <input type="submit" value="далее"></p>
    <?php
    $c = $_SERVER['REQUEST_URI'];
    $vsePos = array();
    $vsePos[2] = $c;
    $_SESSION['vsePos'][2]=$vsePos;
    ?>

</form>
</body>
</html>
