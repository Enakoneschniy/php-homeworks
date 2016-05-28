<?
session_start();
$_SESSION['pages'][]=$_SERVER['PHP_SELF'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3</title>
</head>
<body>
<div>Задание с картинки</div>
<form action="page2.php" method="post">
    <input type="text" name="firstname" placeholder="Имя">
    <button type="submit">Submit</button>
</form>
</body>
</html>

