<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$num = $_POST['num'];
$coment = $_POST['coment'];
$coment_time = $_POST['coment_time'];
$writer = $_POST['writer'];



// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$query = "INSERT INTO coment (writer,comentvar,coment_time,recomentnum) VALUES ('$writer','$coment','$coment_time','$num')";
if(mysqli_query($conn,$query)){
  $sql = "SELECT num FROM coment order by num DESC limit 1";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res);
  echo "$row[0]";
}else{
  echo "failed";
}



?>
