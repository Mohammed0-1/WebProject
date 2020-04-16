<?php 
session_start();
$email = $_SESSION['email'];
echo "this is a test, we should insert product to database here";
/*$con = mysqli_connect('localhost','root','','e-commerce');
if(mysqli_errno()){
	header('location:AddItem.php?error=can not connect to database');
}
if(isset($_POST['ItemName'])&&isset($_POST['Price'])&&isset($_POST['discription'])){
$query = "INSERT INTO product values(/*'there should be ID here'*//*,'$_POST['ItemName']','$_POST['Price']','$_POST['discription']')";
$result = mysqli_query($con,$query);
}*/
 ?>