<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $cols = 8;
    $rows = 8;
?>
      <table border "1">
<?php
    for ($i = 1; $i <= $rows; $i++) {
        if ($i == 1) {
            $style = 'font-weight: bold; text-align: center;';
        } else {
            $style = '';
        }
        echo '<tr style="' . $style . '">';
        for ($j = 1; $j <= $cols; $j++) {
            if ($j == 1) {
                $style = 'font-weight: bold; text-align: center;';
            } else {
                $style = '';
            }
            echo '<td style="' . $style . '">' . ($i * $j) . '</td>';
        }
        echo '</tr>';
    }
?>
    </table>
<?php

    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 1) {
            echo $i . '<br />';
        }
    }

?>

</body>
</html>
