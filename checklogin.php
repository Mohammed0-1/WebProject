<?php
session_start();
if(!isset($_POST['email']) || !isset($_POST['pass']))
    header('location:Loginpage.php');

$email = $_POST['email'];
$password = $_POST['pass'];

$con = mysqli_connect('localhost','root','','e-commerce');
if(mysqli_errno()){
	header('location:Loginpage.php?errordb=can not connect to database');
}
$query = "SELECT Email , Password FROM user WHERE Email='$email'AND Password='$password'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result)==0){
	mysqli_close();
    header('location:Loginpage.php?error=Wrong username or password');
}
else{
mysqli_close();
    $_SESSION['email'] = $email;
    header('location:homePage-user.php');
}

?>