<?php
session_start();
$sentID = $_SESSION['id'];

 //echo "$sentID";
 //exit();
require('connect.php');

$sql = "SELECT * FROM `order` WHERE `id`='$sentID'";
$query = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($query); 
?> 