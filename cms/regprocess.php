<?php 

//initializing variables

$student_name = "";
$college_name = "";
$email = "";
$registration_number = "";
$symbol_number = "";
$batch = "";

	$errors = array(); //creating $errors as an array variable.

	//if the register button is clicked...

	include '../inc/dbcon.php';
	if (isset($_POST['register'])) {
		$student_name = mysqli_real_escape_string($con, $_POST['student']);
		$college_name = mysqli_real_escape_string($con, $_POST['college']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$registration_number = mysqli_real_escape_string($con, $_POST['registration']);
		$symbol_number = mysqli_real_escape_string($con, $_POST['symbol']);
		$batch = mysqli_real_escape_string($con, $_POST['batch']);

		//ensure that the form field are filled properly(form validation)...

		if (!empty($student_name)) {
			if (!preg_match("/^[a-z A-Z]*$/", $student_name)) {
				array_push($errors, "invalid student name");
			}
		}else{
			array_push($errors, "student name is required");
		}


		if (!empty($college_name)) {
			if (!preg_match("/^[a-z A-Z]*$/", $college_name)) {
				array_push($errors, "invalid college name");
			}
		}else{
			array_push($errors, "college name is required");
		}

		//check if email is valid...
		if (!empty($email)) {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($errors, "invalid email address");
			}
		}else{
			array_push($errors, "email address is required");
		}

		
		if (!empty($registration_number)) {
			if (!preg_match("/^[0-9]*$/", $registration_number)) {
				array_push($errors, "invalid registration number");
			}
		}else{
			array_push($errors, "registration number is required");
		}

		if (!empty($symbol_number)) {
			if (!preg_match("/^[0-9]*$/", $symbol_number)) {
				array_push($errors, "invalid symbol number");
			}
		}else{
			array_push($errors, "symbol number is required");
		}

		if (!empty($batch)) {
			if (!preg_match("/^[0-9]*$/", $batch)) {
				array_push($errors, "invalid batch number");
			}
		}else{
			array_push($errors, "batch is required");
		}

		//check whether the user already exists or not...
		$user_check_query = "SELECT * FROM registration WHERE symbol_num = '$symbol_number' OR registration_num= '$registration_number' LIMIT 1";
		$result = mysqli_query($con, $user_check_query);
		$student = mysqli_fetch_assoc($result);

		if ($student) {
			if ($student['symbol_num'] == $symbol_number) {
				array_push($errors, "student already exists with this symbol number.");
			}

			if ($student['registration_num'] == $registration_number) {
				array_push($errors, "student already exists with this registration number.");	
			}
		}

		//if there are no errors save to database...
		if (count($errors) == 0) {

			$sql = "INSERT INTO registration(student_name, college_name, email, registration_num, symbol_num, batch) VALUES ('$student_name','$college_name','$email','$registration_number','$symbol_number','$batch')";
			$run = mysqli_query($con, $sql);
			if ($run == 'true') {
				
				$_SESSION['success'] = "student registered successfully.";			
			}
			
		}

	}
?>