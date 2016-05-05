<html>
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
</head>
<body>
<form action=" " method="post">
    <p>
        <input type = "text" name = "f" required placeholder="f" value="<?=isset($_REQUEST['f']) ? $_REQUEST['f'] : ''?>">
    </p>
    <p>
        <input type = "text" name = "c" required placeholder="c" value="<?=isset($_REQUEST['c']) ? $_REQUEST['c'] : ''?>">
    </p>

    <p>
        <input type="submit" name="submit" value="=">
    </p>
</form>
<table border=1>
    <?php
    if(isset($_REQUEST['submit'])) {
        $p = null;
        $f = $_REQUEST['f'];
        $c = $_REQUEST['c'];
        if (($f > 1 and $f <= 10) and ($c > 1 and $c <= 10)) {

            $p = $f * $c;
        }
        {
            echo $p;
        }
    }?>
    <?php
    $cols = 10;
    $rows = 10;

    ?>
    <table border="1" >
        <?php

        for ($tr=1; $tr<=$rows; $tr++) {

            echo "<tr>";

            for ($td = 1; $td <= $cols; $td++) {

                if ($td == 1 or $tr == 1) {

                    echo "<th style='background-color:yellow'>", $tr * $td, "</th>";
                }                   else {

                    echo "<td style='background-color:blue; text-align: center'>", $tr * $td, "</td>";
                }   echo "</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
    <?php
    $cols =  rand (0,10);
    $rows = rand (0,10);
    echo "Значение cols = $cols <br>";
    echo "Значение rows = $rows";
    ?>
    <form method="post">
        <input type="submit" name ="rand" value="Вывод">
    </form>
    <?php
    for ($k=0; $k <50; $k++){
        if ($k % 2 ==0)continue;
        echo "Число =" ,$k, "<br>";}
    ?>
</body>
</html>