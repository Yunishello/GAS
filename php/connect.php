<?php
$connect = mysqli_connect("localhost", "root", "", "gas");

if (!$connect) {
	echo "Error connect to Database" . mysqli_error();
}

?>