<?php
session_start();
if(!isset($_POST['email']) || !isset($_POST['pass']))
    header('location:Loginpage.php');

$username = $_POST['email'];
$password = $_POST['pass'];


if(($username!='mohammed@ksu.edu.sa') || ($password!='mohammed'))
    header('location:Loginpage.php?error=Wrong username or password');
else{

    $_SESSION["email"] = $username;
    header('location:homePage-user.html');
}

?>