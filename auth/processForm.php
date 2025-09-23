<?php
$fn = $_POST['first_name'];
$ln = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$role = $_POST['role'];

function displayError($message){
    header("Location: ../register.php?anything= $message");
    exit();
}
if(empty($fn)){
  displayError('First name is required');
}
if(empty($ln)){
    displayError("Last name is required");
}
if(empty($email)){
    header("Location: ../register.php?anything= Email is required");
    exit();  
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../register.php?anything= Your email is invalid");
    exit();
}; 
if(!preg_match("/[a-z]/", $password)){ 
    header("Location: ../register.php?anything= Your password must contain lowercase");
    exit();
}
if(!preg_match("/[A-Z]/", $password)){ 
    header("Location: ../register.php?anything= Your password must contain uppercase");
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    exit();
}
if(!preg_match("/[0-9]/", $password)){ 
    header("Location: ../register.php?anything= Your password must contain at least one number");
    exit();
}
if(!preg_match("/[@_$$*!+{}()]/", $password)){ 
    header("Location: ../register.php?anything= Your password must contain at least one special character");
    exit();
}
if ($password != $c_password){
    header("Location: ../register.php?anything= Your password does not match");
    exit();
}
if ($role =="admin"){
    header("Location: admin.php"); 
    exit(); 
}
if($role == "user"){
    header("Location: dashboard.php");
    exit(); 
}

session_start();
$userDetails = ["email" => $email, "user"=>$user, 'password' =>$hased, "fn"=>$fn, "ln"=>$ln];
$_SESSION['userDetails'] = $userDetails;
header("Location: ../newFF/dashboard.php");

session_start();
$userDetails = ["email"=> $email, "admin"=>$admin, 'password' =>$hased, "fn"=>$fn, "ln"=>$ln];
$_SESSION["userDetails"] = $userDetails;
header("Location: ../newFF/admin.php"); 

// echo $fn;
//Email_filter_var 
//password-hash => Hash your password
// confirm your password
 