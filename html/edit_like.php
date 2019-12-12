<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";


$post_num = $_POST['post_num'];
$user = $_POST['user'];
$con = $_POST['con'];
$num = $_POST['postlike'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

if($con=="true"){
  $query = "INSERT INTO postlike (postnum,user) VALUES ('$post_num','$user')";
  $qwe = "qwe";
}else if($con=="false"){
  $qwe = "asd";
  $query = "DELETE FROM postlike WHERE postnum=$post_num AND user='$user'";
}

$post_query = "UPDATE postinfo SET postlike='$num' WHERE num=$post_num LIMIT 1";

if(mysqli_query($conn,$query)&&mysqli_query($conn,$post_query)){
  echo "succes  $qwe";
}else{
  echo "failed $num  $con";
}




?>
