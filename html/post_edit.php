<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$num = $_POST['num'];
$postname = $_POST['name'];
$thema = $_POST['thema'];
$day = $_POST['day'];
$location = $_POST['location'];
$image = $_POST['image'];
$tip = $_POST['tip'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$query = "UPDATE postinfo SET name='$postname',thema='$thema',day='$day',location='$location',image='$image',tip='$tip' WHERE num=$num LIMIT 1";
if(mysqli_query($conn,$query)){
  echo "succes";
}else{
  echo "failed";
}

?>
