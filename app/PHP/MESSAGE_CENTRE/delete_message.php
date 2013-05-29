<?php
   include "FUNCTIONS/home_functions.php";
   
   $id = $_POST["id"];
   
   $execute_delete = new home_functions();
   $execute_delete->delete_received_message($id);
?>
