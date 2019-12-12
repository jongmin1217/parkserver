<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$useremail = $_POST['useremail'];
$nickname = $_POST['nickname'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$query = "UPDATE userinfo SET nickname='$nickname' WHERE userid='$useremail' LIMIT 1";
if(mysqli_query($conn,$query)){
  echo "succes";
}else{
  echo "failed";
}

?>
