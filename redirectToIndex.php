<?php
if(isset($_POST['email'])){
	echo $_POST['email'];
header('location:HomePage-user.html');
}else {
echo "in else";
	header('location:index.html');
}
?>