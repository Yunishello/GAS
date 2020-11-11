<?php
session_start();
require('connect.php');

$user = mysqli_real_escape_string($connect,$_POST['user']);
$pass = mysqli_real_escape_string($connect,$_POST['pass']);
$pass = base64_encode($pass);
$sql = "SELECT `id`, `UserName`, `PassWord` FROM `users` WHERE UserName = '$user' AND PassWord = '$pass'";
$query = mysqli_query($connect, $sql) or die(mysqli_error(.'<div style="color:red;">,</div>'));

$row = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) > 0) {
	
	$_SESSION['id'] = $row['id'];
	header('location:dashboard.php');
	}else {
	echo <div style='color:red;'>"Unable To Login. Please check your username or password"</div>;
}

?>