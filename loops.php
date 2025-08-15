<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>

</head>
<body>
    <center>
     <?php
     $posts = ["Post 1", "Post 2", "Post 3"];
     for($x = 0; $x<count($posts); $x++){
        echo $posts[$x]."<br>";
     }
     echo"<br>";
     foreach($posts as $post){
        echo $post."<br>";
     }
     echo"<br>";
     foreach($posts as $index => $post){
        echo $index." - ".$post.'<br>';
     }
     ?>
     
    </center>
</body>
</html>