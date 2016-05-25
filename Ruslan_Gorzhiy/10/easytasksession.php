<?php

session_start();
if (!isset($_SESSION['ReleaseDate'])) {
    $_SESSION['ReleaseDate']= new DateTime("now");
}

$date1 = $_SESSION['ReleaseDate'];
echo "Вы посетили страницу ".$date1->format('Y-m-d H:i:s')."<br>";
$date2 = new DateTime("now");
$interval = $date1->diff($date2);
echo "Вы заходили на сайт ".$interval->format('%R%H часов, %R%I минут, %R%S секунд')." назад";

?>
