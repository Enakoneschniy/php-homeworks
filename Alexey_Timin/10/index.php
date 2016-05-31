<?php
session_start();
//unset($_SESSION['age']);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<form method="post" action="index1.php" id="form_id">
    <p><label for="name">имя</label>
    <input type="text" name="name"><br><br><br>
        <input type="submit" value="далее"></p>
</form>
<?php
$a = $_SERVER['REQUEST_URI'];
$vsePos = array();
$vsePos[0] = $a;
$_SESSION['vsePos'][0]=$vsePos;
?>
</body>
</html>
