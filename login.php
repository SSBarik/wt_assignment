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
    <title>Login | Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A basic login tester | sending/validating credentials to/with DB">
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
            <div class="col-lg-4 offset-lg-1 mt-4 mb-4">
                <!-- Default form login -->
                <form action="login_submit.php" method="post" class="text-center p-5 mb-4 z-depth-3" style="border: 1px solid #e3f2fd;margin-top: 30px;">

                    <p class="h4 mt-2 mb-4" style="color: #1976d2 ;">Log in</p>

                    <!-- Email -->
                    <input type="email" name="email" class="form-control mb-4" placeholder="E-mail" required>

                    <!-- Password -->
                    <input type="password" name="password" class="form-control mb-4" placeholder="Password" required>

                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <label class="custom-control-label">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-info waves-light my-4" type="submit">Log in</button>

                    <hr>

                    <div>
                        <!-- Forgot password -->
                        <p class="wow flash" data-wow-delay="2s">Don't have an account ?<a href="register.php"> Register now</a></p>
                    </div>
                    <?php 

                        //shows the err message
                        if(isset($_GET['error'])) {
                            
                            echo "<br><br>";
                            echo $_GET['error']; 
                        
                        }
                    ?>
                </form>

            </div>
            <!--Others-->
            <div class="col-lg-6 mt-4 mb-4 ml-lg-4 text-center">
                <img src="img/login.png" atl="signup flaticon" class="img-fluid wow jello mt-4" height="50%" width="50%">
                <p class="mt-4" style="font-size: 40px;">Login to reExperience the GOOd ...</p>
                <a href="index.php">
                    <button type="button" class="btn btn-lg btn-warning z-depth-3 nav-elevate px-4 mb-3" style="border-radius: 100px;">
                        <span><i class="fas fa-home"></i></span>
                    </button>
                </a>
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