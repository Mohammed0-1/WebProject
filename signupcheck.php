<?php
session_start();
if (!isset($_POST['name'])|| !isset($_POST['email'])|| !isset($_POST['pass'])){
	header('location:SignUp.php');
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pass'];

$con = mysqli_connect('localhost','root','','e-commerce');
if(mysqli_connect_errno()){
	header('location:SignUp.php?error=can not connect to database');
}
$query = "SELECT * FROM user WHERE Username = '$name' OR Email = '$email' ";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0){
mysqli_close($con);
header('location:SignUp.php?used= The Username or email is used');
} else{
$insert = "INSERT INTO user (Username,Email,Password) VALUES('$name','$email','$password')";
if(mysqli_query($con,$insert)){
	echo "inserted successfully";
}else{
	echo "could not insert";
}
mysqli_close($con);
header('location:loginpage.php');
}
?>