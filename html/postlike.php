<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$post_num = $_POST['post_num'];
$user = $_POST['user'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT * from postlike WHERE postnum=$post_num and user='$user'";
$res = mysqli_query($conn,$sql);
$row_num = mysqli_num_rows($res);

if($row_num==0){
  echo "unlike";
}else{
  echo "like";
}

?>
