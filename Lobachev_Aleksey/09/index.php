<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Ajax homework</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">

</head>
<body>

<div class="container">
	<div class="row margin-top">
		<form class="regular-form center-block">
			<div class="form-group">
				<label for="inputReg">Regular expression</label>
				<input type="text" name="regExp" class="form-control" id="inputReg" placeholder="Regular expression">
			</div>
			<div class="form-group">
				<label for="inputText">Random text</label>
				<input type="text" name="regTxt" class="form-control" id="inputText" placeholder="Text">
			</div>
			<button type="submit" class="btn btn-primary" name="chkReg">Проверить</button>
			<button type="submit" class="btn btn-success" name="setReg">Применить</button>
		</form>
	</div>
	<div class="regular-form center-block" id="ajaxAnswer"></div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.2.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>