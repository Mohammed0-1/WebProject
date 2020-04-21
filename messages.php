<?php
session_start();
$sender = $_SESSION['email'];
$receiver = $_GET['email'];
$content = $_GET['msg'];
$con = mysqli_connect('localhost','root','','e-commerce');
if(mysqli_errno($con)){
	die();
}
$insert = "INSERT INTO message (Sender,Receiver,Content) values('$sender','$receiver','$content')";
mysqli_query($con,$insert);
$select = "SELECT * FROM message WHERE (Sender = '$sender' AND Receiver = '$receiver') OR (Sender = '$receiver' AND Receiver = '$sender')";
$result = mysqli_query($con,$select);
	for($i =0; $i<mysqli_num_rows($result);$i++){
		$row = mysqli_fetch_row($result);
		$sndr = $row[0];
		$rcvr = $row[1];
		$cont = $row[2];
		$time = $row[3];
		echo '['.$time.'] '.$sndr.': '.$cont.'<br>';
	}
	mysqli_close($con);
  ?>
