<?php
	session_start();
	$currentTime = time();

	if ( isset($_SESSION['enterTime']) ) {
		$loginTime = $currentTime - $_SESSION['enterTime'];
	}

	if ( !isset($_SESSION['user']) ) {
		header('location: index.php');
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
					    <?php if ( isset($_SESSION['user']) ):?>
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      	<ul class="nav navbar-nav navbar-right">
					      		<li><a href=""><?='Время на сайте: ' . $loginTime . ' сек'?></a></li>
					        	<li class="dropdown">
						         	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?='Привет, '. $_SESSION['user']?> <span class="caret"></span></a>
						         	<ul class="dropdown-menu">
							            <li><a href="#">Сменить пользователя</a></li>
							            <li role="separator" class="divider"></li>
							            <li><a href="logout.php">Выйти</a></li>
						         	</ul>
					       		</li>
					     	</ul>
					    </div>
					    <?php endif;?>
					</div>
				</nav>
				<div>
					<?php 
						echo "Вас зовут " . $_SESSION['name'] . " " . $_SESSION['surname'] . " и Вам " . $_POST['age'] . " год<br>";
						echo "Вы посетили:<br>";

						for ($i = 0; $i < count($_SESSION['address']); $i++) { 
							echo $_SESSION['address'][$i]."<br>";
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>