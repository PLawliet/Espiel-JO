<?php
session_start();

if(!isset($_SESSION['email_entered'])){
    header("Location: log_in.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>JOBSTER'S ONLINE !!</title>
	<script src="JS/jquery-1.8.2.min.js"></script>
    <script src = "JS/jquery-ui-1.9.0.custom.min.js"></script>
   	<script src = "JS/page_functionality.js"></script>
	<script src = "JS/page_script.js"></script>
	<link rel = "shortcut icon" href = "CSS/IMAGES/logo.jpg" />
	<link href = "CSS/home_page_stylesheet.css" rel = "stylesheet" />
	<link rel = "stylesheet" href = "CSS/jquery-ui-1.9.0.custom.min.css" />
	<script>
		$(function() {
		$( "#main_tabs" ).tabs();
		});
	</script>
    <script>
        $(function() {
            $( "#vTabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
            $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
        });
    </script>
    <style>
        .ui-tabs-vertical { width: 55em; }
        .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
        .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
        .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
        .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
        .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
    </style>
</head>
<body>
	<div id = "container_div">
		<img src = "CSS/IMAGES/head.jpg" id = "head">
		<div id = "main_tabs">
			<ul>
				<li><a class = "main_tabs" href = "#home_tab">HOME</a></li>
				<li><a href = "#post_find_job_tab" class = "main_tabs">POST / FIND JOB</a></li>
				<li><a href = "#messages_tab" class = "main_tabs">MESSAGES</a></li>
				<a href = "log_out.php" class = "main_tabs">LOG OUT</a>
			</ul>

			<div id = "home_tab">
				<p>still in process . . .</p>
			</div><!-- home_tab -->

			<div id = "post_find_job_tab">
				<h2 id = "h2_job_posted"><marquee behavior="alternate"><span>POST / FIND JOB   </span></marquee></h2>
					<form id = "job_to_add_form" name = "job_to_add_form">
						<textarea name = "job_to_add" id = "job_to_add" placeholder = "TYPE YOUR JOBS TO BE POSTED HERE !" cols = "50" rows = "5"></textarea><br/>
					</form>
					<button id = "post_job_button">POST</button><br/>
					<span id="cancel_job_posting"> >>> Posting your job successfully canceled <<< </span>
					<span id="empty_job_posting_warning"> >>>   Nothing to display. Type job/s first.   <<< </span>
					 
					<h3><marquee behavior="alternate"><span>JOB POSTED BY YOU !!</span></marquee></h3>
					<div id = "added_job_div"></div><!-- added_job_div -->
					<h3><marquee behavior="alternate"><span>JOB POSTERD BY YOUR FIRENDS</span></marquee></h3>
					<div id = "added_job_div"></div><!-- added_job_div -->
			</div><!-- post_find_job_tab -->

			<div id = "messages_tab">
                <h2 id = "h2_messages"><marquee behavior="alternate"><span>MESSAGE CENTRE </span></marquee></h2>
                <div id="vTabs">
                    <ul>
                        <li><a href="#send_message_div">SEND MESSAGE</a></li>
                        <li><a href="#received_messages_div">INBOX</a></li>
                        <li><a href="#sent_messages_div">SENT MESSAGES</a></li>
                        <li><a href="#group_messages_div">GROUP MESSAGES</a></li>
                    </ul>
                    <div id = "send_message_div">
                        <h3><marquee behavior="alternate"><span>SEND MESSAGE </span></marquee></h3>
                        <center><form id = "message_to_send_form" name = "message_to_send_form">
                                <textarea name = "message_to_send" id = "message_to_send" placeholder = "TYPE YOUR MESSAGE HERE !" cols = "30" rows = "15"></textarea><br/>
                            </form>
                            <button id = "send_message_button">SEND</button><br/></center>
                        <span id="cancel_sending_message"> >>> Sending message successfully canceled <<< </span>
                        <span id="send_successful"> >>> Message successfully send !! <<< </span>
                    </div><!-- send_message_div -->

                    <div class = "overlay_class" id = "received_messages_div">
                        <h3><marquee behavior="alternate"><span>RECEIVE MESSAGES </span></marquee></h3>
                        <div id = "received_messages_append">
                        </div><!-- received messages append -->
                    </div><!-- recieved_message_div -->

                    <div class = "overlay_class" id = "sent_messages_div">
                        <h3><marquee behavior="alternate"><span>SENT MESSAGES</span></marquee></h3>
                        <div id = "sent_messages_append">
                        </div><!-- sent messages append -->
                    </div><!-- sent_messages_div -->

                    <div id = "group_messages_div">
                        <center><form id = "group_message_form" name = "group_message_form">
                                <textarea name = "group_message_to_post" id = "group_message_to_post" placeholder = "TYPE YOUR MESSAGE HERE !!" cols = "30" rows = "15"></textarea><br />
                            </form>
                            <button id = "post_group_message_button">POST</button><br /></center>
                        <span id = "cancel_posting_group_message"> >>> Posting group message successfully canceled <<< </span>
                        <span id = "successfully_posted"> >>> Group message successfully posted <<< </span>
                    </div><!-- group_messages_div -->
                    <div id = "group_message_area">
                    </div><!-- group_message_area -->

                </div><!-- vTabs -->

			</div><!-- messages_tab -->

		</div><!--main_tabs -->
	</div><!-- container_div -->
	<footer>
        <p>&copy; ICOTP-ICT<br />IT-Data Center<br /> Campetic, Palo, Leyte Visayas Phillippines<br /> batch 2012-2013 &middot; <br />
        <a href="#">Privacy</a> &middot; <a href="#">Terms</a><br />Elle Espiel ..</p>	
	</footer>
</body>
</html>