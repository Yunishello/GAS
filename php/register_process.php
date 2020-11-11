<?php
require('connect.php');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$user = $_POST['user'];
$email = $_POST['mail'];
$mobile = $_POST['mobile'];
$pass = $_POST['password'];
$pass = base64_encode($pass);

$checkemail = "SELECT `email` FROM `users` WHERE `email` = '$email'";
$checkemailquery = mysqli_query($connect, $checkemail) or die(mysqli_error());
$result = mysqli_fetch_assoc($checkemailquery);
if ($result > 0) {
	echo "Email already registered";
} else {

	$uploads_dir = '../uploads';
	$mat = date('ymdhis');
    $tmp_name = $_FILES["image"]["tmp_name"];
    // basename() may prevent filesystem traversal attacks;
    // further validation/sanitation of the filename may be appropriate
    $name = $mat . ".jpg";
    move_uploaded_file($tmp_name, "$uploads_dir/$name");

	$sql = "INSERT INTO `users` (`FirstName`, `LastName`, `UserName`, `Email`, `Mobile`, `PassWord`, `Image`) VALUES ('$fname', '$lname', '$user', '$email', '$mobile', '$pass', '$name')";

// exit($mat);


	$query = mysqli_query($connect, $sql) or mysqli_error(mysql_errno());

	if ($query>0) {
		header('location:success.php');
	}
	else{
		echo "An Error Occured";
	}

}


?>