<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>
        <input type="number" name="age" required placeholder="Age" value="<?=isset($_REQUEST['age']) ? $_REQUEST['age'] : '' ?>">
    </p>
    <p>
        <input type="submit" name="submit" value="Send">
    </p>

</form>
<?php
    if (isset($_REQUEST['submit'])) {

        $age = $_REQUEST['age'];

        if ($age >= 18 and $age <= 59) {
            echo "Вам еще работать и работать!";
        } elseif (($age > 59) and ($age < 100)) {
            echo "Вам пора на пенсию";
        } elseif (($age < 18) and ($age > 0)) {
            echo "Вам еще рано работать";
        } else {
            echo "Unknown Age";
        }
    }

?>

</body>
</html>