<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$nickname = $_POST['nickname'];
$hobby = $_POST['hobby'];

$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "INSERT INTO hobby (nickname,hobbyname) VALUES ('$nickname','$hobby')";

if(mysqli_query($conn,$sql)){
  echo "succes";
}else{
  echo "failed";
}


 ?>
