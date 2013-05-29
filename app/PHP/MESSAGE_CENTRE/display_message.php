<?php
	include "FUNCTIONS/home_functions.php";
	
	$current_user_id = $_POST['current_user_id'];
	
	$execute_display = new home_functions();
	$execute_display->display_message($current_user_id);
?>
