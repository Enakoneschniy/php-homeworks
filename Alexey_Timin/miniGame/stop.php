<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
print_r('ваши жизни:'. $_SESSION['ваши жизни:'].'<br>');
print_r('жизни мафии:'. $_SESSION['жизни мафии:'].'<br>');
print_r($_SESSION['stop'].'<br>');
session_unset()
?>