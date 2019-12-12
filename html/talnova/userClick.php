<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$click = $_POST['click'];
$userid = $_POST['userid'];

$query = "INSERT INTO click (click,userid)
VALUES ('$click','$userid')";
if (mysqli_query($conn,$query)) {
  echo "성공";
}else{
  echo "실패";
}





 ?>
