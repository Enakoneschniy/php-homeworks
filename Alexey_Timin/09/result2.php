<?php
if (isset($_POST["regul"])) {
    $reg = $_POST["regul"];
    $text = $_POST["prtext"];
    $arr = array();
    $s = preg_match_all($reg, $text, $arr);
    if ($s) {
        for ($i = 0; $i < count($arr[0]); $i++)
        {
            for ($j=0; $j < count($arr[0]); $j++)
            {
                echo $arr[$i][$j].'<br>';
            }
        }


    } else
    echo 'шось нима ниче';
}
?>