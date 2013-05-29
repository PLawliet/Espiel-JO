<?php
	session_start();

	include "FUNCTIONS/home_functions.php";
	
	$email_entered = $_SESSION['email_entered'];
	
	$execute_determine = new home_functions();
	$execute_determine->determine_current_user($email_entered);	
?>
