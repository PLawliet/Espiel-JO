<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<title>REGISTRATION PAGE</title>
	<script src="JS/jquery-1.8.2.min.js"></script>
    <script src = "JS/jquery-ui-1.9.0.custom.min.js"></script>
    <script src = "JS/page_functionality.js"></script>
    <script src = "JS/page_script.js"></script>
    <link rel = "shortcut icon" href = "CSS/IMAGES/logo.jpg" />
    <link rel = "stylesheet" href = "CSS/jquery-ui-1.9.0.custom.min.css" />
    <link href = "CSS/sign_up_stylesheet.css" rel = "stylesheet" />
</head>
<body>
	<img src = "CSS/IMAGES/head.jpg" id = "head">
  <h1 id = "sign_up_h1"><marquee behavior="alternate"><span>Jobster's Online !! </span>Registration Page ..</marquee></h1>
	<br /><br />
  <div id = "container">
		<form id = "registration_form" action = "PHP/USERS/add_user.php">
      	<h2>Register Now !!</h2>
      	<fieldset>
        	<legend>Personal Infromation:</legend>
        	<table>
        		<tr>
        			<td>Firstname:</td>
           			<td><input type = "text" id = "firstname" name = "firstname"/></td>
        		</tr>
        		<tr>
           			<td>Middlename:</td>
           			<td><input type = "text" id= "middlename" name ="middlename"/></td>
        		</tr>
        		<tr>
         			<td>Lastname:</td>
         			<td><input type = "text" id= "lastname" name ="lastname"/></td>
          	    </tr>
        		<tr>
            	    <td>Username:</td>
            	    <td><input type = "text" id= "username" name ="username"/></td>
          	    </tr>
        		<tr>
         			<td>Address:</td>
          		    <td><input type = "text" id= "address" name ="address"/></td>
        		</tr>
        		<tr>
          		    <td>Age:</td>
          		    <td><input type = "number" id= "age" name ="age"/></td>
          	    </tr>
          	    <tr>
        		    <td>Gender:</td>
           		    <td><input type = "radio" id= "female" name ="gender"/>Female<input type = "radio" id= "male" name ="gender"/>Male</td>
          	    </tr>
          	    <tr>
            	    <td>E-mail:</td>
            	    <td><input type = "text" id= "new_email" name ="new_email"/></td>
          	    </tr>
          	    <tr>
          		    <td>Password:</td>
          		    <td><input type = "password" id= "new_password" name ="new_password"></td>
          	    </tr>
          	    <tr>
            	    <td>Re-type Password:</td>
            	    <td><input type = "password" id= "retyped_password" name ="retyped_password"></td>
          	    </tr>
        	</table><br />
        	<input type = "button" id="add_user_button" value = "REGISTER"> <input id="reset" type="reset" value="reset" />
      	</fieldset>
        <br /><br /><br />
    </form><!-- registration_form -->

    <br /><br />
    <p id = "log_in_p">Already registered?&nbsp;<br /><a href = "log_in.php" id = "registration_link">&raquo;Click here to SIGN IN&laquo;</a></p>
    <br /><br /><br />
    <a href = "main_page.php" id = "left"> << back to Jobsters Online Main Page</a>
	 </div><!-- container -->
	 <div id = "confirmation_div" title = "Registration Confirmed !!">
	 	Congratulations! You're already registered! You may now log in as <span id = "email_span"></span>.
	 </div><!-- confirmation_div-->
	 <div id = "registration_invalid" title = "Registration Failed !!">
	 	Registration Failed !! Please make sure you didn't leave a blank. Thank you.
	</div><!--registration_invalid -->
  <br /><br /><br />
	<footer>
        <p>&copy; ICOTP-ICT<br />IT-Data Center<br /> Campetic, Palo, Leyte Visayas Phillippines<br /> batch 2012-2013 &middot; <br />
        <a href="#">Privacy</a> &middot; <a href="#">Terms</a><br />Elle Espiel ..</p>
	</footer>
</body>
</html>