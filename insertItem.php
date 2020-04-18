<?php 
session_start();
$email = $_SESSION['email'];
echo "this is a test, we should insert product to database here";
$con = mysqli_connect('localhost','root','','e-commerce');
if(mysqli_errno($con)){
	mysqli_close($con);
	header('location:AddItem.php?error=could not connect to database');
	exit();
}
if(isset($_POST['ItemName'])&&isset($_POST['Price'])&&isset($_POST['discription'])){
	$ItemName = $_POST['ItemName'];
	$Price = $_POST['Price'];
	$discription = $_POST['discription'];
	$pic = $_POST['uploadimglink'];
$insert = "INSERT INTO product (ProductName,Price,Discription,Picture,SellerEmail) VALUES('$ItemName','$Price','$discription','$pic','$email')";
if(mysqli_query($con,$insert)){
	mysqli_close($con);
	header('location:AddItem.php?inserted= item inserted successfully');
	exit();
}else{
	mysqli_close($con);
	header('location:AddItem.php?error= could not insert');
	exit();
}
mysqli_close($con);
}
 ?>