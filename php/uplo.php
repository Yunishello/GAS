<?php
session_start();
$sentID = $_SESSION['id'];

 //echo "$sentID";
 //exit();
require('connect.php');

$sql = "SELECT `register.FirstName`,`register.LastName`,`register.UserName`,`register.Mobile`, `order.Address`,`order.GateWay`,`order.Price`,`order.Time`, FROM `register` JOIN `order` ON `register.id` = `order.Id` WHERE `register.id`='$sentID'";
$query = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($query); 
?> 