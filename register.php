<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','users');

// get the post records
$txtName = $_POST['username'];
$txtPassword = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `users` (`usename`, `password`) VALUES ('0', '$txtName', '$txtPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>