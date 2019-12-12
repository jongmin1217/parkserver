<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$postname = $_POST['name'];
$thema = $_POST['thema'];
$day = $_POST['day'];
$location = $_POST['location'];
$image = $_POST['image'];
$tip = $_POST['tip'];
$writetime = $_POST['writetime'];
$writer = $_POST['writer'];



// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$query = "INSERT INTO postinfo (name,thema,day,location,image,tip,writetime,writer) VALUES ('$postname','$thema','$day','$location','$image','$tip','$writetime','$writer')";
if(mysqli_query($conn,$query)){
  $numquery = "SELECT num FROM postinfo order by num DESC LIMIT 1";
  $res = mysqli_query($conn,$numquery);
  $row = mysqli_fetch_array($res);
  echo "$row[0]";
}else{
  echo "failed";
}



?>
