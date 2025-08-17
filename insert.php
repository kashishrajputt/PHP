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
     mysqli_connect("localhost", "root","","mynewdata");
     echo "connection success";
     $sql = "insert into emp values(?,?,?,?";
     $ps = $mycon->prepare($sql);
     $eid=501;
     $ename="john";
     
     ?>
     
    </center>
</body>
</html>