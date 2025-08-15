<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>

</head>
<body>
     <?php
     $a = 80;
     $b = 80;
     if($a > $b)
        echo $a." is greater than ".$b;
     elseif($b>$a)
        echo $b." is greater than ".$a;
     else
        echo $b." is equal to ".$a;
     ?>
</body>
</html>