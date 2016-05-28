<?
session_start();
$_SESSION['secondname'] = $_POST['secondname'];
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
<form action="page4.php" method="post">
    <input type="text" name="age" placeholder="Возраст">
    <button type="submit">Submit</button>
</form>
</body>
</html>

