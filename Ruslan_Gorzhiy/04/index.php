<?php

$cols = 7;
$rows = 5;


$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if ($tr===1 or $td===1){
            $table .= '<th style="color:white;background-color:red;font-weight: 600">'. $tr*$td .'</th>';
        }else{
            $table .= '<td>'. $tr*$td .'</td>';
        }
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;

echo '<hr>';

for ($x=0; $x++<50;)
    if ($x & 1){
        echo "$x<br>";
    }

?>