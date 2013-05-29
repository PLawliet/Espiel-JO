<?php

	include "FUNCTIONS/home_functions.php";
	
	$current_user_fullname = $_POST["current_user_fullname"];
	$recipient = $_POST["id"];
	$message_to_send = $_POST["message_to_send"];
	$time_sent = $_POST["current_time"];
	
	$execute_add = new home_functions();
	$execute_add->add_private_message($current_user_fullname, $recipient, $message_to_send, $time_sent);
	
?>
