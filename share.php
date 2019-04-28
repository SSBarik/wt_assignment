<?php

    require("includes/common.php");
	// Redirects the user to index page if logged in.
	if (!isset($_SESSION['email'])) {
	    header('location: login.php');
	}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Share | SUIIT Hub</title>
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
        <!--HOme Button-->
        <a href="index.php">
            <button type="button" class="btn btn-lg btn-warning z-depth-3 nav-elevate px-4 mb-3" style="border-radius: 100px;">
                        <span><i class="fas fa-home"></i></span>
            </button>
        </a>
            
        <div class="row">
            <div class="col-lg-6 offset-lg-3 mt-4 mb-4">
                <!-- Default form login -->
                <form action="project_submit.php" method="POST" class="text-center p-5 mb-4 z-depth-3" style="border: 1px solid #e3f2fd;margin-top: 30px;">

                    <h1>Project Details</h1>

                    <!-- Project Name -->
                    <input type="text" name="pname" class="form-control mt-4" placeholder="Project Name" required>
                    <!--Project Type-->
                    <div class="form-row mb-4">
                        <div class="col-lg-6">
                            <select  name="type" class="browser-default custom-select mt-4" required>
                                <option value="">Select Category</option>
                                <option value="web">Web Development</option>
                                <option value="android">Android</option>
                                <option value="ml">Machine Learning | AI</option>
                                <option value="iot">IOT</option>
                            </select>
                        </div>
                    </div>  
                    <!-- Project Descrition -->
                    <div class="form-group">
                        <label>Give a short description of your project</label>
                        <textarea name="pd" class="form-control rounded-0" rows="10"></textarea>
                    </div>
                  
                    <input type="url" name="link" class="form-control mb-4" placeholder="Project Link" required>   
                    <!-- Sign in button -->
                    <button class="btn btn-info waves-light my-4" type="submit">Share</button>  
                </form>
                <!-- Default form login -->
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
