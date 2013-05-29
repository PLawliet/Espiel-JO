<?php

	include 'db_con.php';

	class home_functions extends database_connection{

		function add_user($firstname, $middlename, $lastname, $username, $address, $age, $gender, $new_email, $new_password, $retyped_password){
			$this -> open_connection();

			$log = "out";
            $money = "0";

            $stmt = $this->dbh->prepare("INSERT INTO users (firstname, middlename, lastname, username, address, age, gender, email, password, log, money) VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, password(?), ?, ?, ?)");
            $stmt->bindParam (1, $firstname);
            $stmt->bindParam (2, $middlename);
            $stmt->bindParam (3, $lastname);
            $stmt->bindParam (4, $username);
            $stmt->bindParam (5, $address);
            $stmt->bindParam (6, $age);
            $stmt->bindParam (7, $gender);
            $stmt->bindParam (8, $new_email);
            $stmt->bindParam (9, $new_password);
            $stmt->bindParam (10, $retyped_password);
            $stmt->bindParam (11, $log);
            $stmt->bindParam (12, $money);
            $stmt->execute();

			$this -> close_connection();

		}

        function check_email($email_entered) {
            $this->open_connection();

            $select_statement = $this->dbh->prepare("SELECT email FROM users;");
            $select_statement->execute();

            $email_array = array();

            while($emails = $select_statement->fetch()) {
                foreach($emails as $email) {
                    array_push($email_array, $email);
                }
            }

            foreach($email_array as $email) {
                if($email_entered == $email) {
                    return true;
                }
            }

            $this->close_connection();
        }

        function check_password($email_entered, $password_entered) {
            $this->open_connection();

            $select_statement = $this->dbh->prepare("SELECT password FROM users WHERE email = ?;");
            $select_statement->bindParam(1, $email_entered);
            $select_statement->execute();

            $password = $select_statement->fetch();

            if($password_entered == $password[0]) {
                return true;
            }

            $this->close_connection();
        }

		function check_user($email_entered, $password_entered){
			$this -> open_connection();

			$select_statement = $this ->dbh -> prepare("SELECT username, password FROM users WHERE email = ? AND password = ?");
			$select_statement -> bindParam(1, $email_entered);
			$select_statement -> bindParam(2, $password_entered);
			$select_statement -> execute();

			if($select_statement -> fetch()){
				$_SESSION['email_entered'] = $email_entered;
					header("Location: home_page.php");
			} else{
				$error_message = "Username / Password didn't match!";
			}


			$this -> close_connection();

		}

		function determine_current_user($email_entered){
			$this -> open_connection();

			$select_statement = $this ->dbh -> prepare("SELECT * FROM users WHERE email = ?");
			$select_statement -> bindParam(1, $email_entered);
			$select_statement -> execute();

			$in = "in";

			$update_statement = $this ->dbh -> prepare("UPDATE users SET log = ? WHERE email = ?");
			$update_statement -> bindParam(1, $in);
			$update_statement -> bindParam(2, $email_entered);
			$update_statement -> execute();

			$content = $select_statement -> fetch();

			$data_array = array("current_user_id" => $content[0], "current_user_fullname" => $content[1]." ".$content[2]." ".$content[3]);
			$encoded_data = json_encode($data_array);

			echo $encoded_data;

			$this -> close_connection();

		}

		function log_out_user(){
			$this -> open_connection();

			$out = "out";

			$update_statement = $this ->dbh -> prepare("UPDATE users SET log = ? WHERE email = ?");
			$update_statement ->bindParam(1, $out);
			$update_statement ->bindParam(2, $_SESSION['email_entered']);
			$update_statement ->execute();

			$this -> close_connection();
		}

		//------------------------------- job_posted -------------------------------//
		
		function add_job($poster, $job_to_post, $current_time){
			$this->open_connection();
			
			$nonspace_job = trim($job_to_post);
			
			if(!empty($nonspace_job)) {
				$job = nl2br($job_to_post);
				
				$insert_statement = $this->dbh->prepare("INSERT INTO job_posted VALUES (null, ?, ?, ?);");
				$insert_statement->execute(array($poster, $job, $current_time));
			
				$job_id = $this->dbh->lastInsertId();

				echo "<p id='".$job_id."'class = 'job_to_add_class'>".$job."<br /><br /><span class = 'font_size_10'>Posted by: <span class = 'for_user_class'>".$poster."</span>&nbsp;Posted:&nbsp;<span id = 'job_posted_time' class = 'for_current_time'> ".$current_time."</span></span></p>";
	
			}
			$this->close_connection();
		}

		function post_job(){
		    $this->open_connection();
		    
		    $select_statement = $this->dbh->query("SELECT * FROM job_posted ORDER BY job_id DESC");

		    while($content = $select_statement->fetch()){
		        echo "<p id='".$content[0]."'class = 'job_to_add_class'>".$content[2]."<br /><br /><span class = 'font_size_10'>Posted by: <span class = 'for_user_class'>".$content[1]."</span>&nbsp;Posted:&nbsp;<span id = 'job_posted_time' class = 'for_current_time'> ".$content[3]."</span></span></p>";
		    }
		    
			$this->close_connection();
		}

		function delete_job($id){
		    $this->open_connection();
		    
		    $stmt = $this->dbh->prepare("DELETE FROM job_posted WHERE id=?");
		    $stmt->bindparam(1, $id);
		    $stmt->execute();
		    
		    $this->close_connection();
		}

		function getting_job_to_edit($id){
			$this->open_connection();

			$stmt = $this->dbh->prepare("SELECT * FROM job_posted WHERE id= ?");
			$stmt->bindParam(1, $id);
			$stmt->execute();
			
			$content = $stmt->fetch();
			$dataArray = array("id"=>$content[0], "job"=>$content[1]);
			$encodedData = json_encode($dataArray);

			echo $encodedData;			

			$this->closeConnection();
		}

		function save_edited_job($id, $job){
			$this->openConnection();

			$stmt = $this->dbh->prepare("UPDATE job_posted SET job = ? WHERE id = ?");
			$stmt->bindParam(1, $job);
			$stmt->bindParam(2, $id);
			$stmt->execute();
	
			echo "<p id='".$id."' class = 'q'>".$job."
					<input type='button' id='delete' onclick = 'delete_job(".$id.")' value='delete' />
					<input type='button' id='edit' onclick = 'getting_job_to_edit(".$id.")' value='edit'></p>";

			$this->close_connection();
		}

		//------------------------------- for group_message -------------------------------//

		function add_group_message($sender, $group_message_to_post){
			$this -> open_connection();

			$nonspace_group_message = trim($group_message_to_post);

			if(!empty($nonspace_group_message)){
				$group_message = nl2br($group_message_to_post);

				$insert_statement = $this ->dbh-> prepare("INSERT INTO group_message VALUES (null, ?, ?)");
				$insert_statement ->bindParam(1, $sender);
				$insert_statement ->bindParam(2, $group_message_to_post);
				$insert_statement ->execute();

				echo "<p id = 'message_to_append'><span class = 'email_span'>".$sender."</span>&nbsp;&nbsp;&nbsp;".$group_message_to_post."</p>";
			}

			$this -> close_connection();
		}

		function post_group_message(){
			$this->open_connection();
			
			$select_statement = $this->dbh->query("SELECT * FROM group_message ORDER BY group_message_id ASC;");
			
			while($content = $select_statement->fetch()) {
				echo "<p id = 'message_to_append'><span class = 'email_span'>".$content[1]."</span>&nbsp;&nbsp;&nbsp;".$content[2]."</p>";
			}
			
			$this->close_connection();
		}

		function get_recipient($id) {
			$this->open_connection();
			
			$select_statement = $this->dbh->prepare("SELECT * FROM users WHERE user_id = ?");
			$select_statement->bindParam(1, $id);
			$select_statement->execute();
			
			$recipient = $select_statement->fetch();
			
			echo $recipient[1]." ".$recipient[2]." ".$recipient[3];
			
			$this->close_connection();
		}

		function get_users_on_line($current_user_id) {
			$this->open_connection();
			
			$select_statement = $this->dbh->prepare("SELECT * FROM users WHERE user_id != ?");	
			$select_statement->bindParam(1, $current_user_id);
			$select_statement->execute();
			
			while($content = $select_statement->fetch()) {
				if($content[10] != "in") {
					echo "<tr class = 'user_online_class' id = '".$content[0]."' onclick = 'send_message(".$content[0].")'><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$content[1]." ".$content[2]." ".$content[3]."</td></tr>";
				} else {
						echo "<tr class = 'user_online_class' id = '".$content[0]."' onclick = 'send_message(".$content[0].")'><td>^_^&nbsp;&nbsp;".$content[1]." ".$content[2]." ".$content[3]."</td></tr>";
				}
			}
			
			$this->close_connection();
		}
		
		//------------------------------- for message_centre -------------------------------
		function add_message($current_user_fullname, $recipient, $message_to_send, $time_sent){
			$this ->open_connection();

			$display_as_received = "yes";
			$display_as_sent = "yes";

			$insert_statement = $this->dbh->prepare("INSERT INTO message_centre VALUES (null, ?, ?, ?, ?, ?, ?);");
			$insert_statement->bindParam(1, $current_user_fullname);
			$insert_statement->bindParam(2, $recipient);
			$insert_statement->bindParam(3, $message_to_send);
			$insert_statement->bindParam(4, $time_sent);
			$insert_statement->bindParam(5, $display_as_received);
			$insert_statement->bindParam(6, $display_as_sent);
			$insert_statement->execute();

			$this ->close_connection();
		}

		function display_message($current_user_id){
			$this ->open_connection();

			$select_statement = $this->dbh->prepare("SELECT * FROM message_centre WHERE recipient = ? AND display_as_received = 'yes' ORDER BY message_centre DESC;");
			$select_statement->bindParam(1, $current_user_id);
			$select_statement->execute();
		
			while($content = $select_statement->fetch()) {
				echo "<div class = 'received_message' id = 'received_message_div".$content[0]."'>
						Message from: <span class = 'for_current_time' id = 'sender_fullname'>".$content[1]."</span>
						<p id = 'message_p'>".$content[3]."</p>
						Received: <span id = 'sent_time' class = 'for_current_time'>".$content[4]."</span><br /><button onclick = 'reply(".$content[0].")'>reply</button><button onclick = 'delete_received_message(".$content[0].")'>delete</buttton>
					</div>";
			}

			$this ->close_connection();
		}

		function display_sent_message($current_user_fullname){
			$this ->open_connection();

			$select_statement = $this->dbh->prepare("SELECT mc.message_id, u.firstname, u.middlename, u.lastname, mc.message, mc.time_sent FROM message_centre AS mc, users AS u WHERE u.user_id = mc.recipient AND mc.sender = ? AND display_as_sent = 'yes' ORDER BY mc.message_id DESC");
			$select_statement->bindParam(1, $current_user_fullname);
			$select_statement->execute();
			
			while($content = $select_statement->fetch()) {
				echo "<div class = 'sent_message' id = 'sent_message_".$content[0]."'>
						Sent to: <span class = 'for_current_time' id = 'receiver_fullname'>".$content[1]. " ".$content[2]." ".$content[3]." </span>
						<p id = 'message_p'>".$content[4]."</p>
						Sent: <span id = 'sent_time' class = 'for_current_time'>".$content[5]."</span><br /><button onclick = 'delete_sent_message(".$content[0].")'>delete</buttton>
					</div>";
			}

			$this ->close_connection();
		}

		function delete_received_message($id) {
		   $this->open_connection();
		   
		   $delete_statement = $this->dbh->prepare("UPDATE message_centre SET display_as_received = 'no' WHERE message_id = ?");
		   $delete_statement->bindParam(1, $id);
		   $delete_statement->execute();
		   
		   $delete_statement = $this->dbh->exe("DELETE FROM message_centre WHERE display_as_sent = 'no' && display_as_recieved = 'no';");
		   
		   $this->close_connection();
		}

		function delete_sent_message($id) {
			$this->open_connection();
			
			$delete_statement = $this->dbh->prepare("UPDATE message_centre SET display_as_sent = 'no' WHERE message_id = ?;");
			$delete_statement->bindParam(1, $id);
			$delete_statement->execute();
			
			$delete_statement = $this->dbh->exe("DELETE FROM message_centre WHERE display_as_sent = 'no' && display_as_recieved = 'no';");
			
			$this->close_connection();
		}
	}

?>