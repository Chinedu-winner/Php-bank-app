<?php 
session_start();
$loggedInUser = $_SESSION['loggenIn'];
if(!$_SESSION['token'] || time()<$_SESSION['token_exp']){
    header('Location: ../login.php?error=Your token has expired');
    exit();
}
$email = $loggedInUser['email'];
$datebase = mysqli_connect("localhost", "root", "", "bank-app");
if (!$datebase){
    echo "Database not connecting";
}

// File upload
// $query = "SELECT user FROM users WHERE email='$email'";
$query = "SELECT first_name, last_name, role FROM users WHERE email='$email'";
// $db_user = mysqli_fetch_assoc($database, $query);
$response = mysqli_query($database, $query);
$db_user = mysqli_fetch_assoc($response);
print_r($db_user);
if ($db_user['role'] !== "admin") {
    header("Location: ../dashboard.php");
    exit;   
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action=""></form>
    <form class="w-50 m-auto mt-4 p-3 rounded shadow" action="auth/processForm.php" method="post">
        <h2 class="text-center bg-success p-1">Register User</h2>
        <div>
            <label class="text-dark" for="">First name</label>
            <input class="form-control" name="first_name" id="">
        </div>
        <div>
            <label class="text-dark" for="">Last name</label>
            <input class="form-control" name="last_name" id="">
        </div>
        <div>
            <label class="text-dark" for="">Email</label>
            <input class="form-control" name="email" id="">
        </div>
        <div>
            <label class="text-dark" for="">Password</label>
            <input class="form-control" name="password" id="">
        </div>
        <div>
            <div class="mb-3">
           <label for="role" class="form-label">Select Role</label>
           <select class="form-select" name="role">
               <option value="user d-flex">User</option>
               <button>Delete</button>
               <button>Edit</button>
               <option value="admin">Admin</option>
               <button>Delete</button>
               <button>Edit</button>
           </select>
        </div>
        <div>
            <button class="btn mt-2 btn-info w-100">Register</button>
        </div>
    </form>
    </html>
</body>