<?php 
session_start();
$email = $_SESSION['email'];
echo "this is a test, we should insert product to database here";
$con = mysqli_connect('localhost','root','','e-commerce');
if(mysqli_errno($con)){
	mysqli_close($con);
	header('location:EditItem.php?error=could not connect to database');
	exit();
}
if(isset($_POST['ItemName'])&&isset($_POST['Price'])&&isset($_POST['discription'])){
	$PID = $_POST['PID'];
	$ItemName = $_POST['ItemName'];
	$Price = $_POST['Price'];
	$discription = $_POST['discription'];
	$pic = $_POST['uploadimglink'];
$update = "UPDATE product set ProductName='$ItemName', Price= $Price , Discription='$discription', Picture='$pic' WHERE ProductID = '$PID'";
if(mysqli_query($con,$update)){
	mysqli_close($con);
	header('location:EditItem.php?inserted= item updated successfully');
	exit();
}else{
	echo mysqli_error($con);
	mysqli_close($con);
	header('location:EditItem.php?error= could not update item');
	exit();
}
mysqli_close($con);
}
 ?>