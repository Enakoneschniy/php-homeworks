<?php
	header('Content-Type: text/html; charset=utf-8');
	session_start();
	echo "Вас зовут " . $_SESSION['name'] . " " . $_SESSION['surname'] . " и Вам " . $_POST['age'] . " год<br>";
	echo "Вы посетили:<br>";

	for ($i = 0; $i < count($_SESSION['address']); $i++) { 
		echo $_SESSION['address'][$i]."<br>";
	}
