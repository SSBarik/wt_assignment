
<?php 
	require("includes/common.php");
	 
	$fname = $_POST['fname'];
	$fname = mysqli_real_escape_string($con, $fname);
	
	$lname = $_POST['lname'];
	$lname = mysqli_real_escape_string($con, $lname);

	$email = $_POST['email'];
	$email = mysqli_real_escape_string($con, $email);
	
	$password = $_POST['password'];
	$password = mysqli_real_escape_string($con, $password);
	$password = MD5($password);

	$contact = $_POST['contact'];
	$contact = mysqli_real_escape_string($con, $contact);
	
	$gender = $_POST['gender'];
	$gender = mysqli_real_escape_string($con, $gender);

	$dob = $_POST['dob'];
	$dob = mysqli_real_escape_string($con, $dob);
	
	$address = $_POST['address'];
	$address = mysqli_real_escape_string($con, $address);
	
	$city = $_POST['city'];
	$city = mysqli_real_escape_string($con, $city);

	$pincode = $_POST['pincode'];
	$pincode = mysqli_real_escape_string($con, $pincode);

	$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	$regex_num = "/^[789][0-9]{9}$/";
	

	$query = "SELECT * FROM users WHERE email='$email'";
  	$result = mysqli_query($con, $query)or die($mysqli_error($con));
  	$num = mysqli_num_rows($result);

	if ($num != 0) {
    $m = "<span style='color: red; padding: 2px;'>Email Already Exists !<a href='login.php'> Login now</a></span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span style='color: red; padding: 2px;'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span style='color: red; padding: 2px;'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
  

		$query = "INSERT INTO users(fname, lname, email, password, contact, gender, dob, address, city, pincode)VALUES('" . $fname . "', '" . $lname . "', '" . $email . "', '" . $password . "', '" . $contact ."', '" . $gender . "', '" . $dob . "', '" . $address . "', '" . $city . "', '" . $pincode . "')";
		mysqli_query($con, $query) or die(mysqli_error($con));
		$user_id = mysqli_insert_id($con);
	    $_SESSION['email'] = $email;
	    $_SESSION['user_id'] = $user_id;

		header('location: home.php'); //rediect to the form page
	}  
 ?>
