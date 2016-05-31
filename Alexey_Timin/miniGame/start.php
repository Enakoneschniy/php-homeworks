<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$baseHpPolice = 10;
$baseHpMafia = 10;
$config = fopen('config.txt','r+');
$handle = fwrite($config,$baseHpPolice);
fclose($config);
$config = fopen('config1.txt','r+');
$handle = fwrite($config,$baseHpMafia);
fclose($config);

?>
<form action="index.php">
    <div><input type="submit" value="начать игру" </div>
</form>
</body>
</html>

