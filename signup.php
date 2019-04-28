<?php

	require("includes/common.php");
	// Redirects the user to home page if logged in.
	if (isset($_SESSION['email'])) {
	    header('location: home.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign up | SUIIT Hub</title>
    <meta charset="UTF-8">				
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SUIIT Hub - meet people at facebook meet projects @ SUIIT Hub | HTML CSS3 BS4 JS jQuery PHP MySQLi">
    <meta name="author" content="Shashank Shekhar Barik">
	<link rel="icon" type="image/png" href="img/logo1.png">
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/css/mdb.min.css" rel="stylesheet">
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<!--Home Button-->
			<a href="index.php">
                <button type="button" class="btn btn-lg btn-warning z-depth-3 nav-elevate px-4 mb-3 sticky-top" style="border-radius: 100px;">
                        <span><i class="fas fa-home"></i></span>
            	</button>
            </a>
            <!--Others-->
			<div class="col-lg-6 mb-4 ml-lg-4 text-center" style="position: fixed;margin-top: 50px;">
				<img src="img/signup.png" atl="signup flaticon" class="img-fluid animated zoomInUp mt-4" height="50%" width="50%">
				<p class="mt-4" style="font-size: 40px;">New to Us ? just Join Us ...</p>
			</div>
			<div class="col-lg-4">
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>	
			<div class="col-lg-5 offset-lg-2 mt-4">
				<!-- Default form signup -->
				<form action="signup_submit.php" method="POST" class="text-center p-5 mt-4 mb-4 z-depth-3" style="border: 1px solid #e3f2fd;background-color: #fff;">
					<h1 class="mt-2 mb-4" style="color: blue;font-weight: bold;"><span style="color: #1de9b6;">Sign</span> up</h1>

				    <div class="form-row mb-4">
				        <div class="col-lg-6 mt-4">
				            <!-- First name -->
				            <input name="fname" type="text" class="form-control" placeholder="First name" required>
				        </div>
				        <div class="col-lg-6 mt-4">
				            <!-- Last name -->
				            <input name="lname" type="text" class="form-control" placeholder="Last name" required>
				        </div>
				    </div>

				    <!-- E-mail -->
				    <input name="email" type="email" class="form-control mb-4" placeholder="E-mail" required>
				    <?php if(isset($_GET['m1'])) {echo $_GET['m1']; }?>

				    <!-- Password -->
				    <input name="password" type="password" class="form-control" placeholder="Password" aria-describedby="defaultsignupFormPasswordHelpBlock" required>
				    <small class="form-text text-muted mb-4">
				        At least 8 characters and 1 digit
				    </small>

				    <!-- Phone number -->
				    <input name="contact" type="number" class="form-control" placeholder="+91 Phone number" aria-describedby="defaultsignupFormPhoneHelpBlock" required>
				    <?php if(isset($_GET['m2'])) { echo $_GET['m2']; }?>
				    
				    <div class="form-row mb-4">
				        <div class="col-lg-6 mt-4">
					        <!-- Gender -->
						    <select  name="gender" class="browser-default custom-select mt-4" required>
								<option value="">Sex</option>
								<option value="female">Female</option>
								<option value="male">Male</option>
								<option value="others">Others</option>
							</select>
						</div>
						<div class="col-lg-6 mt-4">
							<!-- DOB -->
							<div class="form-group">
							    <label for="inputDOB"></label>
								<input name="dob" type="date" class="form-control" placeholder="DOB" required>
							</div>
						</div>
					</div>  
					<!-- Address -->
					  <div class="form-group">
					    <label for="inputAddress"></label>
					    <input name="address" type="textarea" class="form-control" placeholder="Address" required>
					  </div>
					  <!-- Grid row -->
					  <div class="form-row">
					    <!-- City -->
					    <div class="form-group col-md-6">
					      <label for="inputCity"></label>
					      <input name="city" type="text" class="form-control" placeholder="City" required>
					    </div>
					    <!-- Pincode -->
					    <div class="form-group col-md-6">
					      <label for="inputZip"></label>
					      <input name="pincode" type="number" class="form-control" placeholder="Pincode" required>
					    </div>
					  </div>
				    <!-- Sign up button -->
				    <button class="btn btn-info my-4 btn-block" type="submit">Sign Up</button>

				    <hr>

				    <!-- Terms of service -->
				    <p>By clicking
				        <em>Sign up</em> you agree to our
				        <a href="" target="">terms of service</a>
				    </p>
				</form>
				<!-- Default form signup -->
				
			</div>
		</div>
	</div>
	
	<!--JS-->

	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/js/mdb.min.js"></script>
	
	<!--External Script-->
    <script type="text/javascript" src="js/script.js"></script>    
</body>
</html>