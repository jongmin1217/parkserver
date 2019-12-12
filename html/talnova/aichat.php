<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$chatname = $_POST['chatname'];
$user = $_POST['user'];
$message = $_POST['message'];
$click = $_POST['click'];
// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$sql = "INSERT INTO aichat (chatname,user,message,click) VALUES ('$chatname','$user','$message','$click')";

if(mysqli_query($conn,$sql)){
  echo "succes";
}else{
  echo "failed";
}


?>
