<?php
	include "FUNCTIONS/home_functions.php";
	$execute_check = new home_functions();
	
	$username_entered = $_POST['email_entered'];
	$password_entered = $_POST['password_entered'];
	
	$execute_check->log_in($email_entered, $password_entered);
?>
