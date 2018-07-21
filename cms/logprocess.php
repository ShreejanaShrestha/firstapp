<?php

	//initializing variables to null.
	$username = "";
	$password = "";

	$errors = array(); //creating error variable as an array variable.

	include '../inc/dbcon.php';
	if (isset($_POST['login'])) {

		$username = mysqli_real_escape_string($con,$_POST['username']);
		$password = mysqli_real_escape_string($con,$_POST['password']);

		//ensure that form fields are filled properly
		if (empty($fullname)) {
			array_push($errors, "fullname is required");
		}

		if (empty($email)) {
			array_push($errors, "email address is required");
		}

		if (empty($pword)) {
			array_push($errors, "password is required");
		}

		if (empty($con_pword)) {
			array_push($errors, "password confirmation is required");
		}

		if (count($errors) == 0) {

			$qry = " SELECT * FROM login WHERE fullname = '$fullname' AND password = '$pword' ";
			$run = mysqli_query($con, $qry);
			if (mysqli_num_rows($run) == 1) {

				//log user in...
				session_start();
				$_SESSION['fullname'] = $fullname;
				$_SESSION['success'] = "welcome to dashboard panel";
				header('location:userdashboard.php');
				exit();
			}else{

				array_push($errors, "wrong username/password combination");
			}
		}
	}

?>