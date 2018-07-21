<?php 
	//initializing variables to null.

	$fullname='';
	$email='';
	$pword='';
	$con_pword='';

	$errors = array(); //creating error variable as an array variable.

	include '../inc/dbcon.php';
	include '../inc/errors.php';
	if(isset($_POST['ulogin'])){
		$fname = mysqli_real_escape_string($con,$_POST['fullname']);
		$email = mysqli_real_escape_string($con,$_POST['email_address']);
		$pword = mysqli_real_escape_string($con,$_POST['password']);
		$con_pword = mysqli_real_escape_string($con,$_POST['confirm_password']);

	if (empty($fullname)) {
			array_push($errors, "fullname is required");
		}
	if (empty($email)) {
			array_push($errors, "email is required");
		}
	if (empty($pword)) {
			array_push($errors, "password is required");
		}

	if (empty($conpword)) {
		array_push($errors, "password confirmation is required");
	}

	if (count($errors) == 0) {

		$ins_sql = " INSERT INTO users (fullname,email,password,confirm_password) values('$fullname' , '$email' , '$pword' , '$con_pword') ";
		$run = mysqli_query($con, $ins_sql);
		if($run == true){
			$_SESSION['success'] = "User signed up successfully.";			

		}
	}
	}
?>