<?php
session_start();
$userID = $_SESSION['id'];
require('connect.php');

$deli = $_POST['deliver'];
$pay = $_POST['payment'];
$price = $_POST['amount'];


// exit($userID);
$sql = "INSERT INTO `orders` (`user_id`, `Address`, `GateWay`, `Price`) VALUES ('$userID', '$deli', '$pay', '$price')";
$query = mysqli_query($connect, $sql);

if ($query>0) {
	header('location:dashboard.php');
}
else{
	echo "An Error Occured";
}

?>