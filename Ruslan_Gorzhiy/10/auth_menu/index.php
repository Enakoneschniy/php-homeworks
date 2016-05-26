<?php
session_start();

if ($_POST['Email'] AND $_POST['Password']){
    $auth = array('Email' => 'gladerus@gmail.com',
             'Password' => '123654');

    if($auth['Email'] == $_POST['Email'] AND $auth['Password'] == $_POST['Password']){
        $_SESSION['auth'] = true;
//    }else{
//        echo "Логин " .$_POST['Email']. " не существует";
    }

}

if($_GET['logout']==1){
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
    <title>Menu</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<body>

<?php if (isset($_SESSION['auth'])){

    echo '<ul class="nav nav-pills">
    <li class="dropdown pull-right">
        <span class="icon-bar"></span>
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
            Menu
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <li><a href="index.php?logout=1">LogOut</a></li>
        </ul>
    </li>
 </ul>';

    echo "<strong><center>Вы успешно авторизировались!</center></strong>";

}else{
    echo '
    <div class="container">
    <div class="row">
        <form class="form-horizontal" method="Post" action="index.php">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>';

} ?>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>

