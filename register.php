<?php

$con = mysqli_connect('localhost', 'root', '','users');
$txtName = $_POST['username'];
$txtPassword = $_POST['password'];
$sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$txtName', '$txtPassword')";
$rs = mysqli_query($con, $sql);
echo $rs;
if($rs)
{
	echo "Account Created";
	header("Location: homepage.html");
	die();
}

?>