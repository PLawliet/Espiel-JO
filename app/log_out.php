<?php
	session_start();

	include "FUNCTIONS/home_functions.php";
	$execute_log_out = new home_functions();
	
	if(isset($_SESSION['email_entered'])) {
		
		$execute_log_out->log_out_user();
		session_unset();
		session_destroy();

		header("Location: main_page.php");
	
	} else {
		header("Location: main_page.php");
	}
	
?>
