<?php
$greetings = "Welcome to Winner banking app";
$services =[
    "front end"=>['price'=> 2000, 'language'=>"JS"],
    'back end'=>['price'=>5000, "language"=>"PHP"]
    ]
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $greetings?></h1>
    <!-- <h1><?php echo array_keys($services)[0] . $services["front end"]?></h1>
    <h1><?php echo array_keys($services)[1] . $services["back end"]?></h1> -->

    <?php
    foreach($services as $key =>$value){
        echo '<h1>$keys => $value</h1>' ;
    foreach($value as $el => $element){
        echo "
            <ul>
                 <li>$el => $element</li>
            </ul>
        ";
    }
    } 
    ?>
</body>
</html>