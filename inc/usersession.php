
<?php 
	session_start();
	if (!isset($_SESSION['fullname'])) {
		$_SESSION['warning'] = "please login first";
		@header('location:user_login.php');
		exit();
	}
 ?>

