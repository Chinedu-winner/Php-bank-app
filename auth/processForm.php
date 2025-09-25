<?php
$fn = $_POST['first_name'];
$ln = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$role = $_POST['role'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];

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
// if ($role =="admin"){
//     header("Location: ../newFF/admin.php"); 
//     exit(); 
// }


session_start();
$userDetails = ["email" => $email, "user"=>$user, 'password' =>$hased, "fn"=>$fn, "ln"=>$ln];
$_SESSION['userDetails'] = $userDetails;
header("Location: ../newFF/dashboard.php");

// session_start();
// $userDetails = ["email"=> $email, "admin"=>$admin, 'password' =>$hased, "fn"=>$fn, "ln"=>$ln];
// $_SESSION["userDetails"] = $userDetails;
// header("Location: ../newFF/admin.php"); 

if($role == "user"){
    $_SESSION["token"] = $token;
    $token = bin2hex(random_bytes(16));
    header("Location: ../newFF/dashboard.php");
    exit(); 
}

$hased = password_hash($password, PASSWORD_DEFAULT);
// $database = mysqli_connect("host_name", "username", 'password', "");
$database = mysqli_connect('localhost', 'root', 'root', 'bank-app');

if($database){
    echo 'conected';
}else {
    echo 'Not connected';
    displayError("Database not connect"); 
}

$sql_query = "INSERT INTO users (first_name, last_name, email, password, phone_number, address, role, dob)
VALUES ('$fn','$ln', '$email', '$hased', '$phone', '$role', '$dob')";
$response = mysqli_query($database, $sql_query); 
if($response){
    session_start(); 
    $userDetails = ['email' =>$email, "password"=>$hased, "fn"=>$fn, "ln"=>$ln];
    $_SESSION['userDatails']; 
    echo "user created successfully";
    header("Location: ../login.php?success-user created"); 
}

// echo $fn;
//Email_filter_var 
//password-hash => Hash your password
// confirm your password
 