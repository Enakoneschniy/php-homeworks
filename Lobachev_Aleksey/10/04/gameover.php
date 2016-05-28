<?
session_start();
if(isset($_REQUEST['newGame'])){
	session_destroy();
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Homework Game</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">

</head>
<body>
<div class="main-player">
	<h1>Победил <?=($_SESSION['baseServ']>0)?("cервер"):("твой персонаж")?></h1>
	<div class="player-right">
		<h4>Cерверный персонаж</h4>
		<p>Осталось HP: <?=$_SESSION['baseServ']?></p>
		<?php
		foreach ($_SESSION['srvHurt'] as $key => $value){
			echo "<p>Урон #".($key+1)." равен $value HP</p>";
		}
		?>
	</div>
	<div class="player-left">
		<h4>Твой персонаж</h4>
		<p>Осталось HP: <?=$_SESSION['basePlr']?></p>
		<?php
		foreach ($_SESSION['plrHurt'] as $key => $value){
			echo "<p>Урон #".($key+1)." равен $value HP</p>";
		}
		?>
	</div>
</div>
<div class="container regular-form">
	<form action="" method="post">
		<button type="submit" class="btn btn-block" name="newGame">Новая игра</button>
	</form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.2.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>