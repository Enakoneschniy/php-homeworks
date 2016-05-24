<?php
if (isset($_POST["regul"])) {
    $reg = $_POST["regul"];
    $text = $_POST["prtext"];
    $s = preg_match($reg, $text);
    if ($s) {
        echo 'текст соответствует регулярному выражению';
    } else echo 'текст не соответствует регулярному выражению';
    echo "<br>"."<br>". $_POST["prtext"] . "<br>";
}
?>