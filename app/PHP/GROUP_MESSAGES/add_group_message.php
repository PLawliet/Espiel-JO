<?php
	include "FUNCTIONS/home_functions.php";
	
	$sender = $_POST['current_user_fullname'];
	$group_message_to_post = $_POST['group_message_to_post'];
	
	$execute_add = new home_functions;
	$execute_add->add_group_message($sender, $group_message_to_post);
?>