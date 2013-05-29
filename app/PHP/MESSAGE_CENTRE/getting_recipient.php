<?php
	include "FUNCTIONS/home_functions.php";
	
	$id = $_POST["id"];
	
	$execute_get = new home_functions();
	$execute_get->get_recipient($id);
?>
