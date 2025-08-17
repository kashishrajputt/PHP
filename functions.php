<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>

</head>
<body>
     <?php
     function sum($a,$b){
        $c = $a+$b;
        echo $c;
     }
     sum(10,60);

     //varargs
     function sums(...$a){
        $sum = 0;
        foreach($a as $m){
            echo "<br>".$m."<br>";
            $sum = $sum + $m;

        }
        echo "sum is: ".$sum;
     }

     sums(10,20,30,40,900);

     function factorial($n){
        $f = 1;
        while($n!=0){
            $f = $f* $n;
            $n--;      
        }
        return $f;
     }
     $m = factorial(5);
     echo "<br>Factorial is: ".$m;
     
     ?>
</body>
</html>