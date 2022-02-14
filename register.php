<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','users');

// get the post records
$txtName1 = $_POST['username'];
$txtPassword1 = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$txtName1', '$txtPassword1')";

// insert in database 
$rs = mysqli_query($con, $sql);
echo $rs;
if($rs)
{
	echo "Account Created";
	header("Location: login1.html");
	die();
}

?>