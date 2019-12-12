<?php

$servername = "localhost";
$id = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$email = $_POST['email'];

// Create connection
$conn = new mysqli($servername, $id, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT * from userinfo WHERE email='$email'";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num==0){
  echo "enable";
}else{
  echo "disable";
}


?>
