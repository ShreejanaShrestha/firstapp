<?php 
<<<<<<< HEAD

	//initializing variables to null.
	
	$uname='';
	/*$email= '';*/
	$pword='';
=======
	//initializing variables to null.

	$fullname='';
	$email='';
	$pword='';
	$con_pword='';
>>>>>>> c564a53344ea8c4a29ccaf5f4e00e2e58a3585ee

	$errors = array(); //creating error variable as an array variable.

	include '../inc/dbcon.php';
<<<<<<< HEAD
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

=======
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
>>>>>>> c564a53344ea8c4a29ccaf5f4e00e2e58a3585ee
?>