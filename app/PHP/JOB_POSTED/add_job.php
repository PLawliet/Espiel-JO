<?php
    include '../FUNCTIONS/home_functions.php';
    
    
    $poster = $_POST['current_user_fullname'];
    $job_to_post = $_POST['job_to_post'];
    $current_time = $_POST['current_time'];
  
    $execute_add = new home_functions();
    $execute_add->add_job($poster, $job_to_post, $current_time);

?>
