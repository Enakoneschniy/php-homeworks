<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
        <h3>Задание 1</h3>
        <?php
        function funct()
        {
            static $a;
            $a++;
            echo "$a";
        }
        for ($i = 0; $i++<10;) funct();
        ?>
</body>
</html>