<?php
$database = mysqli_connect('localhost', 'root', 'root', 'bank-app');

if (move_uploaded_file($_FILES['picture']['tmp_name'], $_image_path)){
        echo "Uploaded";
    }else{
        echo "Something went wrong";
    };