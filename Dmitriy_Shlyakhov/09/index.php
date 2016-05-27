<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Homework09</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="row margin-top">
        <form class="reg-form center-block">
            <div class="form-group">
                <label for="regExp">Enter a regular expression:</label>
                <input type="text" name="regExp" class="form-control" id="regExp" placeholder="Regular expression">
            </div>
            <div class="form-group">
                <label for="customText">Custom text:</label>
                <input type="text" name="customText" class="form-control" id="customText" placeholder="Custom text">
            </div>
            <button type="submit" class="btn btn-default check-btn">Check</button>
            <button type="submit" class="btn btn-default apply-btn">Apply</button>
        </form>
        <p class="reg-form center-block p">String matches the regular expression:</p>
        <div class="reg-form center-block information"></div>   
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>