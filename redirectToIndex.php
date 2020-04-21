<?php
session_start();
if(isset($_SESSION['email'])){
header('location:HomePage-user.php');
}else {
	header('location:index.php');
}
?>