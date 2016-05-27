<!DOCTYPE HTML>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, maximum-scale=1, target-destinyDPI=deviceDPI" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link media="all" rel="stylesheet" href="css/all.css" />
		<title>Task 8</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<form id="about" method="POST" class="center-block">
					<fieldset>
						<legend>Заполните форму</legend>
					 	<div class="form-group">
						    <label for="exampleInputEmail1">Имя</label>
						    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Имя">
					  	</div>
						<div class="form-group">
						    <label for="exampleInputPassword1">Фамилия</label>
						    <input type="text" name="surname" class="form-control" id="exampleInputPassword1" placeholder="Фамилия">
						</div>
					  	<button type="submit" name="submit" class="btn btn-default">Отправить</button>
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>
<?php
	define('fileName', 'fullName.txt');

	if ( isset($_POST['submit']) && $_POST['name'] != '' && $_POST['surname'] != '' ) {
		$string = "Ваше имя: ". $_POST['name'] .", Ваша фамилия: ". $_POST['surname'];
		$file = fopen(fileName, 'w');
		$res = fwrite($file, $string);
		fclose($file);
		header('Location: index.php');
		exit();
	}

	//Задача:
	//Доменные имена для протоколов http и https, с необязательным слешем в конце. 
	$pattern = '/https?:\/\/\w+.[a-z]{2,}/';
	$subject = "http://google.ru/mail/u/0/#inbox";
	preg_match($pattern, $subject, $matches);

	print_r($matches);
?>