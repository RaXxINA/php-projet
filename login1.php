<?php
 // Start the session

// Check if the form is submitted
if( isset($_POST['submit']) ) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['emailname'];
    $password= $_POST['passname'];
    $confirmPassword =$_POST['confirm_password'];
    if( empty($email) ||empty($password) || empty($firstName) ||empty($lastName) || empty($confirmPassword)   ) {
    }else{
        if(preg_match('/^\w+@emsi\.ma$/',$email)!=0){
        if ($password === $confirmPassword) {
            // Store data in session variables
            $_SESSION['first_name'] = $firstName;
            $_SESSION['last_name'] = $lastName;
            $_SESSION['emailname'] = $email;
            $_SESSION['passname'] = $password;
            $_SESSION['confirm_password'] = $confirmPassword;}}}}
            ?>