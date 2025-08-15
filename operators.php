<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
    $a = 5;
    $b = ++$a;
    $c = $b--;
    $a = ++$b;
    $d = $a + ++$a + $a++;
    echo $a." ".$b." ".$c." ".$d;
    ?>
</body>
</html>