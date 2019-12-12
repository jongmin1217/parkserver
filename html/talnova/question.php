<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$key = $_POST['key'];
$userid = $_POST['userid'];

$query = "INSERT INTO question (keyy,userid)
VALUES ('$key','$userid')";
if (mysqli_query($conn,$query)) {
  echo "성공";
}else{
  echo "실패";
}


 ?>
