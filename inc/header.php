<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../style.css">
	<script src="../assets/js/bootstrap.css"></script>
</head>
<body>
	<header class="navbar">
	<div class="header">
		<div class="wrapper">
			<div class="headerDiv">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-sm-9">
							<div class="logo">
								<a href="../index.php"><img src="http://tribhuvan-university.edu.np/wp-content/themes/tu/images/logo.png" alt="logo">
								</a>
							</div>
						</div>
						<div class="col-sm-12 col-sm-3">
							<?php 
								$current_page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
								if ($current_page == 'index') {
									?>
									<div class="login">
										<ul class="nav nav-pills nav-left">
										<li><a href="cms/login.php">Admin Login</a></li>
										<li><a href="cms/ulog_sig.php">Sign-Up</a></li>
									</ul>
									</div>
									
									<?php

								}

							 ?>
							 <ul class="nav nav-pills">
										<li><a href = "cms/login.php">Admin Login</a></li>
										<li><a href = "cms/usignup.php">SignUp or Login</a></li>
										<!--<li><a href = "ulogin.php">Login</a></li> -->

										
									
									</ul><br>
							 <ul class="nav nav-pills">
										<li class = "active"><a href = "#">Home</a></li>
										<li><a href = "#">Contact Us</a></li>
										<li><a href = "#">About Us</a></li>
										
									
									</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</header>
</body>
</html>