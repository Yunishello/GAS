<?php 

if (isset($_POST['submit'])) {
	
	$name = $_POST['name'];


}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>API TEST</title>
 </head>

 <style type="text/css">
 	.input {
 		display: inline-block;
 	}
 	.label {
 		display: inline-block;
 	}
 </style>

 <body>

 	<form>
 		<label class="label">Book Name</label>
 		<input class="input" type="text" name="name">
 	</form>
 
 </body>
 </html>