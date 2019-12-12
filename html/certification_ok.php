<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$useremail = $_POST['useremail'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$query = "UPDATE userinfo SET userstatus=1,usersingnum=NULL WHERE userid='$useremail' LIMIT 1";
if(mysqli_query($conn,$query)){
  echo "succes";
}else{
  echo "failed";
}

?>
