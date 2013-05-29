<?php
	include "FUNCTIONS/home_functions.php";
	
	$current_user_fullname = $_POST["current_user_fullname"];
	
	$execute_display = new home_functions();
	$execute_display->display_sent_message($current_user_fullname);
?>
