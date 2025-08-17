<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
    $str = "hello world";
    $n = strlen($str);
    echo $str. "<br>";
    echo "length is: ".$n;

    echo "<br>total word is: ".str_word_count($str);
    $newstr = chunk_split($str,2,'.');
    echo "<br>".$newstr;
    $newarr = str_split($str,4);
    print_r ($newarr);

    echo "<br>".strtoupper($str);
    $strnew = "hello yes no yes hello yes";
    $m = substr_count($strnew,"yes");
    echo "<br>".$m;
    echo "<br>".ucwords($strnew);
    ?>

    
</body>
</html>