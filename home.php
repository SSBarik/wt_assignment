<?php

    require("includes/common.php");

    // Redirects the user to home page if logged in.
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | SUIIT Hub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SUIIT Hub - meet people at facebook meet projects @ SUIIT Hub | HTML CSS3 BS4 JS jQuery PHP MySQLi">
    <meta name="author" content="Shashank Shekhar Barik">
    <link rel="icon" type="image/png" href="img/logo1.png">
    <link href='https://fonts.googleapis.com/css?family=Barrio' rel='stylesheet'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.1/css/mdb.min.css" rel="stylesheet">
    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body{
            background: url(img/bg3.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <!--Header-->
    <div class="container">
        <br>
        <div id="hh" class="jumbotron z-depth-0">
            <h1 class="wow bounceInDown" id="b1"><span id="b2">S U I I T </span> Hub</h1>      
        </div>
    </div>
    
    <!--Projects Feed-->
    <div class="container">    
        <?php     
            if(isset($_GET['submit'])) {
                $type=$_GET['type'];
            }else {
                $type=0;
            }
            $id=1; 
            while(true) {
                if($type!=0) {   
                    $query = "SELECT * FROM projects where id='". $id."' AND type='". $type."'";
                } else {
                    $query = "SELECT * FROM projects where id='". $id."' ";    
                } 
                    
                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                $num = mysqli_num_rows($result); 
                $row = mysqli_fetch_array($result);
                $id=$row['id'];
                if($num==0)
                    break;
                $query = "SELECT fname, lname FROM users WHERE id='" . $row['uid'] . "'";
                $result = mysqli_query($con, $query)or die($mysqli_error($con));
                $row1 = mysqli_fetch_array($result);
        ?>        
                <div class="jumbotron z-depth-2" id="j">
                    <h4 class="col-lg-6">
                        <?php echo $row['pname'];?>
                    </h4>
                    <br>
                    <div class="jumbotron z-depth-2" id="j2">
                        <p class="wow fadeIn">
                            <?php echo $row['description'];?>
                        </p>
                        <a href="<?php echo $row['link'];?>" target="_blank">
                            Project Link 
                            <i class="fas fa-star wow rollIn"></i>
                        </a>
                    </div>
                    <br>
                    <p>
                        <i class="far fa-copyright"></i> 
                        <?php echo " " . $row1['fname'] . " " . $row1['lname']; ?>
                    </p>
               </div> 
        <?php
                $id++;
            } 
        ?>
    </div>
    
    <!--FAB-->
    <div class="container-fluid fixed-bottom">
        <div class="btn-group dropup float-right">
            <button type="button" class="btn btn-lg btn-warning z-depth-3 nav-elevate px-4 mb-3" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" style="border-radius: 100px;">
                <span><i class="fas fa-bars"></i></span>
            </button>
            <div class="dropdown-menu z-depth-2 animated fadeIn" style="border-radius: 100px;padding:10px">
                <a class="dropdown-item nav-elevate" href="share.php">Share your project</a>
                <a class="dropdown-item nav-elevate" href="logout.php">Logout</a>
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
