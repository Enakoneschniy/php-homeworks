<?php
session_start();
$a = 87;
echo $a;
$_SESSION['a'] = $a;
echo '<pre>';
print_r($_SESSION);
echo '<pre>';
print_r($_COOKIE);
?>
