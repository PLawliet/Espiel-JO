<?php
	include 'FUNCTIONS/home_functions.php';
	
	$execute = new home_functions();
	
	session_start();
	
	if(isset($_SESSION['email_entered'])){
		header('Location: home_page.php');
	} else{
			if(isset($_POST['email_entered']) && isset($_POST['password_entered'])){
			$email_exist = $execute->check_email($_POST['email_entered']);
			if($email_exist){
				$password_matched = $execute->check_password($_POST['email_entered'], $_POST['password_entered']);
				if($password_matched){
					$_SESSION['email_entered'] = $_POST['email_entered'];
					header('Location: home_page.php');
					$execute->determine_current_user($_POST['email_entered']);
				}else{
					$error_message =  "Invalid PASSWORD";
				}
			}else{
					$error_message =  "Unknown EMAIL";
			}
		}
	}
?>
