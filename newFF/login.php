<?php
if (!isset($_SESSION['userData'])){
    echo 'How did you get here? Please register';
    exit();
}
$userData = $_SESSION['userData'];
$savemail = $userData['email'];
$hasedPassword = $userData['password'];

$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Check it and Please fill out all the fields.";
    } elseif ($email !== $savedEmail) {
        $error = "Invalid Email, check well for mistakes.";
    } elseif (!password_verify($password, $hashedPassword)) {
        $error = "Your Password is incorrect.";
    } else {
        header("Location: dashboard.php");
        exit;
    }
}
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
            <h2 class="text-center mb-4 fw-bold text-primary">Login</h2>

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
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
              </div>
            </form>

          </div>
        </div>
      </div>