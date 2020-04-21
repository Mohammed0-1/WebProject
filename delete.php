<?php 
session_start();
$email = $_SESSION['email'];
echo "this is a test, we should insert product to database here";
$con = mysqli_connect('localhost','root','','e-commerce');
if(mysqli_errno($con)){
	mysqli_close($con);
	header('location:sellerHomepage.php?error=could not connect to database');
	exit();
}
if(isset($_GET['PID'])){
	$PID = $_GET['PID'];
	$delete = "DELETE FROM product WHERE ProductID = '$PID'";
if(mysqli_query($con,$delete)){
	mysqli_close($con);
	header('location:sellerHomepage.php?deleted= item deleted successfully');
	exit();
}else{
	echo mysqli_error($con);
	mysqli_close($con);
	header('location:sellerHomepage.php?derror= could not delete item');
	exit();
}
mysqli_close($con);
}
 ?>