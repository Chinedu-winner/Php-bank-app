<?php
session_start();
$user = $_SESSION['userDetails'];
print_r($user);

$query = "SELECT * FROM users";
$database = mysqli_connect('localhost', 'root', 'root', 'bank-app');

if($response){
  echo 'Connected';
}else {
  echo "Not connected"; 
  displayError('Database not connected'); 
}

function displayError($message){
    header("Location:login.php?error=$message");
    exit();
};
// function ;

if (isset($_POST['login'])){
$email = $POST['email'];
$password= $_POST['password'];

if($email !== $user[0]['email']){
    echo "User email not correct";
    // die; 
}; 

if(!password_verify($password, $user['password'])){
    echo "User password not correct";
    return;
    header("Location: dashboard.php");
};
}

$text = "This is PHP class";
echo bin2hex($text). '<br/>';
echo random_bytes(16);

$token = bin2hex(random_bytes(16));
echo $token . "<br/>"; 
$token_exp = time() + 30;
echo time(); 
$loggeredInUser = ["fn"=>$user='fn', "ln"=>$user='ln', 'token' =>$token, "token_exp" =>$token_exp];
?>

<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 col-sm-12">
        <div class="card shadow-lg border-0 rounded-4">
          <div class="card-body p-5">
            <h1 class="text-center mb-4 fw-bold text-primary">Login</h1>

            <?php if (!empty($error)): ?>
              <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form action="" method="post" class="row g-3">
              <div class="col-12">
                <label class="form-label">Email Address</label>
                <input type="text" class="form-control" name="email">
              </div>

              <div class="col-12">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
              </div>

              <div class="col-12 d-grid mt-3">
                <button type="login" class="btn btn-primary btn-lg">Login</button>
              </div>
              <div>
                <p>Don't have an account</p>
              </div>
            </form>
          </div>
        </div>
      </div>

