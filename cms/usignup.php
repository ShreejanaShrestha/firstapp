
<!DOCTYPE html>
<html>
 
<body>
	<?php 
		include '../inc/header.php'; 
		//include '../inc/errors.php';
	?>
	<div class="form-container">
		<div class="title">
			<h2> User Sign Up</h2>
		</div>
		<form role="form" class="form-horizontal" action="signprocess.php" method="post">
			
			<div class="input-group" >
				<label for="fullname" >Full Name</label>
				<input type="text" name="fullname"  class="form-control" placeholder="Full Name" required > 
			</div>
			<div class="input-group ">
				<label for="email" >Email Address</label>
				<input type="email" name="email_address" class="form-control" placeholder="Email Address" required>
			</div>
			<div class="input-group">
				<label for="password" >Password</label>
				<input type="password" name="password"  class="form-control" placeholder="Password" required> 
			</div>
			
			<div class="input-group">
				<button type="submit" name="ulogin" class="btn btn-default" onclick="">Sign Up</button>
				<button type="cancel" name="cancel" class="btn btn-default" onclick="../inc/index.php">Cancel</button>

			</div>
		</form>
	</div>
</body>
</html>