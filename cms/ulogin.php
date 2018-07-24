<?php 
session_start();
if (isset($_SESSION['fullname'])) {
	@header('location:udashboard.php');
	exit();
}
?>

<?php include 'ulogprocess.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>user login page</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  	<link rel="stylesheet" href="../style.css">
  	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

  	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../assets/js/jquery.js"></script>
</head>
<body>
	<?php include '../inc/header.php';?>
	<div class="form-container">
		<div class="title">
			<h2>User Login</h2>
		</div>
		<form action="ulogin.php" method="post">
			<!-- display validation error here -->
			<?php 
			include '../inc/alert.php';
			include '../inc/errors.php';
			?>
			<div class="input-group">
				<label for="username">Username</label>
				<input type="text" name="fullname" placeholder="Email or Username" required>
			</div>
			<div class="input-group">
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="Password" required>
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
			</div>
		</form>
	</div>
</body>
</html>

