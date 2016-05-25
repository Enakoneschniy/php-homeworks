
<?php
session_start();
?>

<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div class="row">
    <form class="col s12" method="POST">
        <div class="row">
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate" name="FirstName">
                <label for="icon_prefix">First Name</label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="step_1">Next
            <i class="material-icons right">trending_flat</i>
        </button>
    </form>
</div>

<?php

if($_POST['FirstName']){

    $_SESSION['FirstName']=$_POST['FirstName'];
    $array_pages[] = 'index.php';
    $_SESSION['array_pages'] = $array_pages; 
    header("Location: page2.php");
}
?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>