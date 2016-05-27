<!DOCTYPE HTML>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, maximum-scale=1, target-destinyDPI=deviceDPI" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link media="all" rel="stylesheet" href="css/all.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<title>Task 10</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<form id="regExp" method="POST" action="info.php" class="center-block">
					<fieldset>
						<legend>Заполните форму</legend>
					 	<div class="form-group">
						    <label for="exampleInputEmail1">Возраст</label>
						    <input type="text" name="age" class="form-control" id="exampleInputEmail1" placeholder="Возраст">
					  	</div>
					  	<button id="check" type="submit" name="check" class="btn btn-default">Отправить</button>
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>
<?php
	session_start();
	$_SESSION['surname'] = $_POST['surname'];
	$_SESSION['address'][] = $_SERVER['REQUEST_URI'];
?>