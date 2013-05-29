<?php
    include 'FUNCTIONS/home_functions.php';

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $new_email = $_POST['new_email'];
    $new_password = $_POST['new_password'];
    $retyped_password = $_POST['retyped_password'];

    $action = new home_functions();
    $action -> add_user($firstname, $middlename, $lastname, $username, $address, $age, $gender, $new_email, $new_password, $retyped_password);

?>
