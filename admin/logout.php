<?php //include('session.php');
session_start();
session_unset();
session_destroy();
header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));

?>