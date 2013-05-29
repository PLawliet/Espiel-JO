$(document).ready(function(){

	$("#add_user_button").click(function(){


		//if(firstname != "" && middlename != "" && lastname != "" && username != "" && address != "" && age != "" && gender != "" && new_email != "" && new_password != "" && new_password == retyped_password){
            alert('if');

            var objects = {
                "firstname":$("input[name='firstname']").val(),
                "middlename":$("input[name='middlename']").val(),
                "lastname":$("input[name='lastname']").val(),
                "username":$("input[name='username']").val(),
                "address":$("input[name='address']").val(),
                "age":$("input[name='age']").val(),
                "gender":$("input[name='gender']").val(),
                "new_email":$("input[name='new_email']").val(),
                "new_password":$("input[name='new_password']").val()
            };
        alert("bbb");
            $.ajax({
				type: "POST",
				url: "PHP/USERS/add_user.php",
				data: objects,
				success: function() {
                    alert('ooo');
					$("#email_span").html(new_email);
					$("#confirmation_div").dialog({
						show: "drop",
						hide: "drop",
						modal: true,
						buttons:{
							"OKAY": function(){
								$(this).dialog("close");
							}
						}
					});
				},
				error: function(data){
					console.log("error in adding new user" + JSON.stringify(data));
				}
			});

      //  }else {
			//$("#registration_invalid").show();
			//$("#registration_invalid").fadeOut(7000);
		//}
	});

	$.ajax({
		url: "PHP/USERS/determine_current_user.php",
		success: function(data) {
			console.log(data);
			var parsed_data = JSON.parse(data);
			$("#current_user_id").val(parsed_data.current_user_id);
			$("#current_user_fullname").val(parsed_data.current_user_fullname);
			$("#user_fullname_span").html(parsed_data.current_user_fullname);
			
			display_job_posted();
			post_group_message();
			display_message();
			display_online_users();
			display_sent_message();
			display_receive_message();
			get_current_time();
			
		},
		error: function(data) {
			console.log("error in determining current user = " + JSON.stringify(data));
		}
	});

	//------------------------------- job_posted -------------------------------//

	function post_job(){
	
		$.ajax({
			url: "PHP/JOB_POSTED/post_job.php",
			success: function(data){
				$("#added_job_div").html(data);
			},
			error: function(data){
				console.log("error in displaying job" + JSON.stringify(data));
			}
		});
		
		setTimeout(post_job, 1000);
	}

	$("#post_job_button").click(function(){
		if($("#job_to_add").val() != "") {
			get_current_time();
			$.ajax({
				type: "POST",
				url: "PHP/JOB_POSTED/add_job.php",
				data: {"poster": $("#current_user_fullname").val(), "job": $("#job_to_add").val(), "current_time": $("#current_time").val()},
				success: function(data){
					$("#added_job_div").prepend(data);
				},
				error: function(data){
					console.log("error in adding job" + JSON.stringify(data));
				}
			});
		
		} else {
			$("#empty_job_posting_warning").show();
			$("#empty_job_posting_warning").fadeOut(7000);
		}
	});

	//------------------------------- for group_message -------------------------------//

	$("#post_group_message_button").click(function(){
		if($("#message_field").val() != "") {
			$.ajax({
				type: "POST",
				url: "PHP/GROUP_MESSAGES/add_group_message.php",
				data: {"current_user_fullname": $("#current_user_fullname").val(), "group_message_to_post": $("#group_message_to_post").val()},
				success: function(data){
					$("#group_message_area").append(data);
				},
				error: function(data) {
					console.log("error in posting group message = " + JSON.stringify(data));
				}
			});
		}
	});
	
	$("#group_message_form").submit(function(){
		if($("#group_message_to_post").val() != "") {
			$.ajax({
				type: "POST",
				url: "PHP/GROUP_MESSAGES/add_group_message.php",
				data: {"current_user_fullname": $("#current_user_fullname").val(), "group_message_to_post": $("#group_message_to_post").val()},
				success: function(data){
					$("#group_message_area").append(data);
					$("#group_message_to_post").val("")
				},
				error: function(data) {
					console.log("error in posting group message = " + JSON.stringify(data));
				}
			});
		}
		return false;	
	});

});