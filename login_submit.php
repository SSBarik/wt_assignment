<?php 

	require("includes/common.php");
	 
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($con, $email);

	$password = $_POST['password'];
	$password = mysqli_real_escape_string($con, $password);
	$password = MD5($password);

	// Query checks if the email and password are present in the database.
	$query = "SELECT id, fname, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$num = mysqli_num_rows($result);

	// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
	if ($num == 0) {
	  $error = "<p style='border: 1px solid red; padding: 10px;'>Please enter correct E-mail id and Password !</p>";
	  header('location: login.php?error=' . $error);
	} else {  
	  	
	  	if(isset($_POST['remember'])){
			echo "<script>alert('".$_POST['remember']."')</script>";
			setcookie('email',$_POST['email'], time() + (86400 * 365), "/");
			setcookie('password',$_POST['password'], time() + (86400 * 365), "/");
	  	}
	 	
	 	$row = mysqli_fetch_array($result);
	  	$_SESSION['email'] = $row['email'];
	  	$_SESSION['user_id'] = $row['id'];
	  	$_SESSION['name'] = $row['fname'];

	  	header('location: home.php');
	}

?>