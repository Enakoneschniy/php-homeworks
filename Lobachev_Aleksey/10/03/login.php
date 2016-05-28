<?
session_start();

$arErrors = [];

$user = [
    "name" => "Evgeniy",
    'email' => 'e@gmail.com',
    'password' => '123321'
];

if(($user['email'] == $_REQUEST['email'])&&($user['password'] == $_REQUEST['password'])){
        $_SESSION['user'] = $user;
        header("Location: index2.php");
    }
?>