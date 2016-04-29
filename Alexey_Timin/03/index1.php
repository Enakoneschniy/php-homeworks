<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
    <form action="" method="post">
        <p><input type="text" required name="a" placeholder="A" value="<?=isset($_REQUEST['a']) ? $_REQUEST['a'] : ''?>"></p>
        <p><input type="text" required name="b" placeholder="B" value="<?=isset($_REQUEST['b']) ? $_REQUEST['b'] : ''?>"></p>
        <p><input type="text" required name="c" placeholder="C"  value="<?=isset($_REQUEST['c']) ? $_REQUEST['c'] : ''?>"></p>
       <p> <input type="submit" name="submit" value="Send"></p>
    </form>
    <?php
    //header('Content-Type: text/html; charset=utf-8');
    var_dump($_REQUEST);
    if(isset($_REQUEST['submit'])){
        $a = $_REQUEST['a'];
        $b = $_REQUEST['b'];
        $c = $_REQUEST['c'];
        $x = null;

        if ($a < $c) {
            $x = $a + $b + $c;
            echo "формула", "<br />", " x = a + b + c";
        } elseif ($a > $c) {
            $x = $a * $b * $c;
            echo "формула", "<br />", " x = a * b * c";
        } else {
            $x = 100;
        }

        echo "<br />", " Результат : $x";
    }

    ?>

</div>


</body>
</html>