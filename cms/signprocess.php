
<?php 
	include '../inc/header.php';
	include '../inc/dbcon.php';
	if(isset($_POST['ulogin'])){
		$fullname=$_POST['fullname'];
		$email=$_POST['email_address'];
		$pword=$_POST['password'];

		$ins_sql= "INSERT INTO users(fullname, email, password) VALUES('$fullname', '$email', '$pword')";
		$run_sql= mysqli_query($con,$ins_sql);
		if($run_sql==true){
			echo 'User Signed up successfully!!!';
		}
	}elseif ($_POST['cancel']) {
		# code...

	}
	else{
		echo 'sign up unsucess';
	}
?>