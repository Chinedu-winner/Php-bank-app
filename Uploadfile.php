<?php
if (isset($_POST['upload'])){
    //Select a directory folder qwhere you  want to save the image
    $target_file = "images//";
    //Select the file and create a path 
    $image_path = $target_folder . basename($_FILES['picture']['name']);

    include "database/database.php"; 

    $query = "UPDATE user SET profile_pix='$image-path'WHERE id=8";
    $response = mysqli_query($database, $query); 
    if ($response){
        move_uploaded_file($_FILES['picture']['tmp_name'], $_image_path);
        echo "Uploaded";
    }else{
        echo "Something went wrong" . mysqli_error($database);
    };
} 
 //composer


$uploadFile = $_FILE['picture'];
$acceptFile = ['jpg', "png", "svg", "bmp", "webp"];
$ext = $file_info['extension'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="Uploadfile.php" method="post" enctype="multipart/form-data">
            <h1>Select a picture</h1>  
            <input type="file" name="picture" accept="pdf">
            <button type="upload">Upload Picture</button>
        </form>
        <img src="<?php if ($image_path){
            echo $image_path;
        }
        ?>" alt="">
    <img src="image/IMG_20220717_135522_166.jpg" alt="">
    <img src="" alt="">
    </main>
</body>
</html>