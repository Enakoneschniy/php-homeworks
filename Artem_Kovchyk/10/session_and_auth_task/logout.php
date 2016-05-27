<?php
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['enterTime']);
	header('location: index.php');