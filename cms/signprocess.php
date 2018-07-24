<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
</head>
<body>
<?php 
	include '../inc/header.php';
	include '../inc/dbcon.php';
	if(isset($_POST['signUp'])){
		$fullname=$_POST['fullname'];
		$email=$_POST['email_address'];
		$pword=$_POST['password'];

		$ins_sql= "INSERT INTO users(fullname, email, password) VALUES('$fullname', '$email', '$pword')";
		$run_sql= mysqli_query($con,$ins_sql);
		if($run_sql==true){
			header('location:ulogin.php');
			?>

		

		 <?php 
		}

		else{
			?>

			<h2 class="unsucess"><?php echo 'sign up unsucess'; ?></h2>
		<?php
		}
	
	}
	?>
</body>
</html>