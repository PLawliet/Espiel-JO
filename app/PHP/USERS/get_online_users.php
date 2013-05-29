<?php
	include "FUNCTIONS/home_functions.php";
	
	$current_user_id = $_POST["current_user_id"];
	
	$execute_get = new home_functions();
	$execute_get->get_users_on_line($current_user_id);
	
?>
