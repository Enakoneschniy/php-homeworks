<?
session_start();
$basehp=15;
if(!isset($_SESSION['flag'])){
	$_SESSION['baseServ']=$basehp;
	$_SESSION['basePlr']=$basehp;
	$_SESSION['flag']=1;
}
if(isset($_REQUEST['setTurn'])){
	$randServ=rand(1,3);
	$randHurt=rand(1,4);
	if($randServ==$_REQUEST['turn']){
		$_SESSION['basePlr']-=$randHurt;
		$_SESSION['plrHurt'][]=$randHurt;
	}else{
		$_SESSION['baseServ']-=$randHurt;
		$_SESSION['srvHurt'][]=$randHurt;
	}
	if($_SESSION['basePlr']>0 && $_SESSION['baseServ']>0) {
		header("Location: index.php");
	}else{
		header("Location: gameover.php");
	}
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
<div class="player-right">
	<h4>Cерверный персонаж</h4>
	<p class="virav"><?=$_SESSION['baseServ']?></p>
</div>
<div class="player-left">
	<h4>Твой персонаж</h4>
	<p class="virav"><?=$_SESSION['basePlr']?></p>
</div>
</div>
<div class="container regular-form">
		<form action="" method="post">
			<input type="text" class="center-block" name="turn" placeholder="Число от 1 до 3">
			<button type="submit" class="btn btn-block" name="setTurn">Ход</button>
		</form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.2.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>