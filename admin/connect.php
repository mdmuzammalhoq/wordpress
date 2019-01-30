<?php
	   define ( 'DB_HOST', 'localhost' );
	   define ( 'DB_USER', 'innerwhe_hossain' );
	   define ( 'DB_PASSWORD', "h8#s9a2in" );
	   define ( 'DB_NAME', 'innerwhe_db_4_u' );
	   $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysqli_error());
	   
	   define('DB_CONNECT', $con);
	   $db = mysql_select_db(DB_NAME, DB_CONNECT) or die(mysqli_error());

?>