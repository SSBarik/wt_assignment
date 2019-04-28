<?php 
	require("includes/common.php");
	 
	$pname = $_POST['pname'];
	$pname = mysqli_real_escape_string($con, $pname);
	
	$type = $_POST['type'];
	$type = mysqli_real_escape_string($con, $type);
	
	$pd = $_POST['pd'];
	$pd = mysqli_real_escape_string($con, $pd);

	$link = $_POST['link'];
	$link = mysqli_real_escape_string($con, $link);
	
	$uid = $_SESSION['user_id'];
	
	echo "yeheheh " . $uid . " axaj ";
	    
	$query = "INSERT INTO projects(uid, type, pname, description, link)VALUES('" . $uid . "', '" . $type . "', '" . $pname . "', '" . $pd . "', '" . $link ."')";
	mysqli_query($con, $query) or die(mysqli_error($con));
	
	header('location: home.php'); //rediect to the home page
	  
 ?>
