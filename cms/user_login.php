<?php 
	include 'ulogprocess.php'
?>
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
	?>
	<div class="form-container">
		<div class="title">
			<h2> User Login</h2>
		</div>
		<form role="form" class="form-horizontal" action="user_login.php" method="post">
			
			<div class="input-group" >
				<label for="fullname" >Full Name</label>
				<input type="text" id="fullname" name="fullname"  class="form-control" placeholder="Full Name" > 
			</div>
			<div class="input-group ">
				<label for="email" >Email Address</label>
				<input type="email" name="email_address" class="form-control" placeholder="Email Address" >
			</div>
			<div class="input-group">
				<label for="password" >Password</label>
				<input type="password" name="password"  class="form-control" placeholder="Password">
			</div>
			<div class="input-group">
				<label for="confirm_password">Confirm Password</label>
				<input type="text" name="confirm_password"  class="form-control" placeholder="Re-enter Password">
			</div>
			<div class="input-group">
				<button type="submit" name="ulogin" class="btn btn-default">Login</button>
			</div>
		</form>
	</div>
</body>
</html>

