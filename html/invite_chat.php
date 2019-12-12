<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$num = $_POST['num'];
$user = $_POST['user'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$query = "SELECT chatuser FROM chatroom WHERE num='$num'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$invite_user = $row[0].$user;
$sql = "UPDATE chatroom SET chatuser='$invite_user' WHERE num='$num'";
if(mysqli_query($conn,$sql)){
  echo "succes";
}else{
  echo "failed";
}

?>
