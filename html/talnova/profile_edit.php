<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$useremail = $_POST['email'];
$nickname = $_POST['nickname'];
$profile = $_POST['profile'];
$path = "http://18.188.143.37/talnova/profileimage/";
$profile = $path.$profile;

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$query = "UPDATE userinfo SET nickname='$nickname',profile='$profile' WHERE email='$useremail' LIMIT 1";
if(mysqli_query($conn,$query)){
  echo "succes";
}else{
  echo "$useremail  ";
  echo "$nickname  ";
  echo "$profile";
}

?>
