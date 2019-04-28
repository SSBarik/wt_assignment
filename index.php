<?php

    require("includes/common.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SUIIT Hub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SUIIT Hub - meet people at facebook meet projects @ SUIIT Hub | HTML CSS3 BS4 JS jQuery PHP MySQLi">
    <meta name="author" content="Shashank Shekhar Barik">
    <link href='https://fonts.googleapis.com/css?family=Barrio' rel='stylesheet'>
    <link rel="icon" type="image/png" href="img/logo1.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/css/mdb.min.css" rel="stylesheet">
    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #000000;">

    <?php 
    
        if (!isset($_SESSION['email'])) {  
    ?>                        
        <div class="container">
            <!--Header-->
            <div id="main" class="jumbotron">
                <h1><span style="color: #FFD20A;"">SUIIT</span> Hub</h1>      
                <p>Experience | Share | Enhance<br>
                    <span class="animated lightSpeedOut infinite  b"> ......</span><span class="animated lightSpeedIn infinite  b">......</span><span class="animated lightSpeedOut infinite  b">......</span><span class="animated lightSpeedIn infinite  b">......</span>
                </p>
            </div>
            <div class="row text-center">
                <!--Logo-->
                <div class="col-lg-4 offset-lg-1" style="margin-bottom: 60px; margin-top: 40px;">
                    <img class="img-fluid wow rotateIn" data-wow-delay="1s" src="img/logo1.png" alt="Logo by https://www.flaticon.com/free-icon/earth-pictures_48792" width="60%" height="60%">  
                </div>
                <!--Login-->>
                <div class="jumbotron x col-lg-3 grow" style="">
                    <br><br>
                    <p>Explore new projects...</p>      
                    <a href="login.php">
                        <button type="button" class="btn btn-outline-light grow">Login</button>
                    </a>
                </div>
                <!--Sign up-->>
                <div class="jumbotron x col-lg-3 grow" style="">
                    <br><br>
                    <p>Dive into our world !</p>
                    <a href="signup.php">
                        <button type="button" class="btn btn-outline-light grow">Sign up</button>
                    </a>
                </div>
            </div>       
        </div>

    <?php    
        }  else {  
            
            header('location: home.php');
        }

    ?>  
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