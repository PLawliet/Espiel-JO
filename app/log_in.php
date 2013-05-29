<?php
	include 'log_in_val.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>LOG-IN PAGE</title>
	<link href = "CSS/sign_in_stylesheet.css" rel = "stylesheet" />
	<script src="JS/jquery-1.8.2.min.js"></script>
    <script src = "JS/jquery-ui-1.9.0.custom.min.js"></script>
    <link rel = "shortcut icon" href = "CSS/IMAGES/logo.jpg" />

</head>
<body>
	<div id = "container">
		<img src = "CSS/IMAGES/head.jpg" id = "head">
		<h1 id = "log_in_h1"><marquee behavior="alternate"><span>Jobster's  </span>Online !!</marquee></h1>
		<form id = "log_in_form">
			<h2 id = "log_in_form_heading">Log-in</h2>
			E-mail: <input type = "text" name = "email_entered" id = "email_entered" placeholder = "Enter your email"><br />
			Password: <input type = "password" name = "password_entered" id = "password_entered" placeholder = "Enter your password"><br />
			<button id = "log_in_button">Log in</button><br /><br />
		</form><!-- log_in_form -->
		<br /><br />
		<p id = "register_p">Not yet a member?&nbsp;<br /><a href = "sign_up.php" id = "registration_link">&raquo;Click here to REGISTER&laquo;</a></p>
		<br /><br /><br />
		<a href = "main_page.php" id = "left">back to Jobsters Online Main Page</a>
		<br />
	</div><!-- container -->
	<footer>
        <p>&copy; ICOTP-ICT<br />IT-Data Center<br /> Campetic, Palo, Leyte Visayas Phillippines<br /> batch 2012-2013 &middot; <br />
        <a href="#">Privacy</a> &middot; <a href="#">Terms</a><br />Elle Espiel ..</p>	
	</footer>
</body>
</html>