<?php
session_reset();
if(isset($_SESSION ['userDetails'])){
   header("location: login.php?error=Please login");
   return;
}
$user = $_SESSION['loggenin'];
if (!$user['token'] || $user['token_exp'] <  time()) {
    header("Location: login.php?error=token expired, Please login");
    return; 
}
print_r($user); 

if (isset($_SESSION['logout'])){
   session_unset();
   session_destroy();
   header("Location: login.php");
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include 'components/navbar.html'?>
    <form action="">
        <div class="container py-5 text-center">
        <h1 class=" fw-bold text-bold">Welcome to the dashboard <?php echo "$user[fn] $user[ln]"?></h1>
    </form>

    </div>
</body>
</html>