<?php
session_start(); 
$savedEmail =$_SESSION('session_email');
$user = $_SESSION('user');
print_r($user); 
echo $savedEmail;
//create a login form (Field => email and password)
//validate your input field
// Ensure the email provided by the user matches with the email in  the session 
//