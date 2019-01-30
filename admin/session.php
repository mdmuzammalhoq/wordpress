<?php   session_start();
	if(isset($_SESSION['locked'])){
  	header('location:extra_lock.php');
   }   
	if (!isset($_SESSION['username']))
	{
	   header('Location: login.php');
	   exit;
	}
	// set timeout period in seconds
	$inactive = 1800;
	// check to see if $_SESSION['timeout'] is set
	if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive)
	{ session_destroy(); header("Location: login.php"); }
	}
	$_SESSION['timeout'] = time();	
?>