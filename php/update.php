<?php
session_start();
require('connect.php');


$userID = $_SESSION['id'];
$user = $_POST['user'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$pass = $_POST['pass'];
$pass = base64_encode($pass);

$sql = "UPDATE `users` SET `UserName` = '$user', `FirstName` = '$fname', `lastName` = '$lname', `Email` = '$email', `Mobile` = '$phone', `PassWord` = '$pass' WHERE `id` = '$userID'";
$query = mysqli_query($connect, $sql);

if ($query > 0) {
	header('location:dashboard.php');
}
else{
	echo "An Error Occured During Update";
}

?>