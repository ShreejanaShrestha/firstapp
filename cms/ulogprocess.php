<?php 

	//initializing variables to null.
	
	$uname='';
	/*$email= '';*/
	$pword='';

	$errors = array(); //creating error variable as an array variable.

	include '../inc/dbcon.php';
	if (isset($_POST['login'])) {

		$uname = mysqli_real_escape_string($con,$_POST['fullname']);
		$pword = mysqli_real_escape_string($con,$_POST['password']);

		//ensure that form fields are filled properly
		if (empty($uname)) {
			array_push($errors, "username is required");
		}

		if (empty($pword)) {
			array_push($errors, "password is required");
		}

		if (count($errors) == 0) {

			$qry = " SELECT * FROM users WHERE fullname = '$uname' AND password = '$pword' ";
			$run = mysqli_query($con, $qry);
			if (mysqli_num_rows($run) == 1) {

				//log user in...
				session_start();
				$_SESSION['fullname'] = $uname;
				$_SESSION['success'] = "welcome to user panel";
				header('location:udashboard.php');
				exit();
			}else{

				array_push($errors, "wrong username/password combination");
			}
		}
	}

?>