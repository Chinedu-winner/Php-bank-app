<?php

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
    <?php include "components/navbar.html"?>
    <form class="w-50 m-auto mt-4 p-3 rounded shadow" action="auth/processForm.php" method="post">
        <?php
            if(isset($_GET['anything'])){
                echo "<div class='alert alert-danger'>$_GET[anything]</div>";
            }
        ?>
        <h2>Register User</h2>
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
            <label class="text-dark" for="">Confirm password</label>
            <input class="form-control" name="c_password" id="">
        </div>
        <div>
            <label class="text-dark" for="">DOB</label>
            <input class="form-control" name="date" types="date" id="">
        </div>
        <div>   
            <label class="text-dark" for="">Address</label>
            <input class="form-control" name="text" id="">
        </div>
        <div>
            <button class="btn mt-2 btn-dark w-100">Register</button>
        </div>
    </form>
</body>
</html>