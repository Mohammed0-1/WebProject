<?php
session_start();
if (!isset($_POST['name'])|| !isset($_POST['email'])|| !isset($_POST['pass'])){
	header('location:SignUp.php');
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pass'];

$con = mysqli_connect('localhost','root','','e-commerce');
if(mysqli_errno()){
	header('location:SignUp.php?erroe=can not connect to database');
}
$insert = "INSERT INTO user (Username,Email,Password) VALUES('$name','$email','$password')";
if(mysqli_query($con,$insert)){
	echo "inserted successfully";
}else{
	echo "could not insert";
}
mysqli_close();
header('location:loginpage.php');
?>