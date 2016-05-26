<?php
session_start();
$_SESSION['name'] = $_POST['name'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<form method="post" action="index2.php">
    <p><label for="fam">фамилия</label>
        <input type="text" name="fam"><br><br><br>
        <input type="submit" id="bottom1" value="далее" ></p>


</form>
<?php
$b = $_SERVER['REQUEST_URI'];
$vsePos = array();
$vsePos[1] = $b;
$_SESSION['vsePos'][1]=$vsePos;
?>
</body>
</html>
