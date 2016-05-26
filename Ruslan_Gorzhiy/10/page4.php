<?php

session_start();
echo $_SESSION['FirstName']." ".$_SESSION['LastName']." (Age: ".$_SESSION['Age'].")<br>";
echo "<hr>";
echo "Вы посещали страницы: <br>";

foreach ($_SESSION['array_pages'] as $val){
    echo $val."<br>";
}
