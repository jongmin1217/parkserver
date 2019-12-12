<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$user = $_POST['user'];
$hobby = $_POST['hobby'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");



$sql = "DELETE FROM hobby WHERE nickname='$user' and hobbyname='$hobby'";
if(mysqli_query($conn,$sql)){
  echo "succes";
}else{
  echo "failed";
}
?>
