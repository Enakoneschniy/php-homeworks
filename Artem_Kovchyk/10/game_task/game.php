<?php
	session_start();
	$userNumber = (int)$_POST['number'];

	$compNumber = rand(1, 3);
	$damage = rand(1, 4);
	$message = '';

	if ($userNumber < 1 || $userNumber > 3) {
		$damage = 0;
		$message = 'Число должно быть от 1 до 3!';
	}

	if ($userNumber === $compNumber) {
		$_SESSION['userhp'] -= $damage;

		if (!$message) {
			$message =  'Вам нанесли урон ' . $damage. ' хп';
		}
	} else {
		$_SESSION['comphp'] -= $damage;

		if (!$message) {
			$message = 'Вы нанесли урон ' . $damage. ' хп';	
		}
	}

	if ($_SESSION['userhp'] <= 0 || $_SESSION['comphp'] <= 0) {
		header('location: gameOver.php');
	}
?>
<!DOCTYPE HTML>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, maximum-scale=1, target-destinyDPI=deviceDPI" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link media="all" rel="stylesheet" href="css/all.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<title>Task 10</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default">
				  	<div class="container-fluid">
				    	<!-- Brand and toggle get grouped for better mobile display -->
				    	<div class="navbar-header">
				     		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand" href="name.php">Домашнее задание номер 10</a>
					    </div>
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      	<ul class="nav navbar-nav navbar-right">
					        	<li class="dropdown">
						         	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Меню <span class="caret"></span></a>
						         	<ul class="dropdown-menu">
							            <li><a href="index.php">Играть еще раз</a></li>
						         	</ul>
					       		</li>
					     	</ul>
					    </div>
					</div>
				</nav>
				<form id="formNumber" method="POST" class="center-block">
					<fieldset>
						<legend>Введите число от 1 до 3</legend>
					 	<div class="form-group">
						    <label for="exampleInputEmail1">Число</label>
						    <input type="text" name="number" class="form-control" id="number" placeholder="Число">
					  	</div>
					  	<button id="check" type="submit" name="check" class="btn btn-default">Отправить</button>
					</fieldset>
				</form>
				<div class="game">
					<div id="user">
						<span>Ваши хп: <strong><?=$_SESSION['userhp']?></strong></span>
					</div>
					<div id="comp">
						<span>Хп компьютера: <strong><?=$_SESSION['comphp']?></strong></span>
					</div>
				</div>
				<div class="gameLog">
					<span><?=$message?></span>
				</div>
			</div>
		</div>
	</body>
</html>