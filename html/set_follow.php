<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$folling = $_POST['folling_id'];
$follwer = $_POST['follwer_id'];
$follow_status = $_POST['follow_status'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

if($follow_status=="true"){
  $sql = "INSERT INTO follow (folling,follwer) VALUES ('$folling','$follwer')";
}else{
  $sql = "DELETE FROM follow WHERE folling='$folling' and follwer='$follwer'";
}
if(mysqli_query($conn,$sql)){
  echo "succes";
}else{
  echo "failed";
}
?>
