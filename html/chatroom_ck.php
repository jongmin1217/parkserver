<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$user1 = $_POST['user1'];
$user2 = $_POST['user2'];

$search1 = $user1."  ".$user2."  ";
$search2 = $user2."  ".$user1."  ";
// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT num from chatroom where chatuser='$search1'";
$sql2 = "SELECT num from chatroom where chatuser='$search2'";

$res = mysqli_query($conn,$sql);
if(mysqli_num_rows($res)==0){
  $res2 = mysqli_query($conn,$sql2);
  if(mysqli_num_rows($res2)==0){
    echo "none";
  }else{
    $row2 = mysqli_fetch_array($res2);
    echo "$row2[0]";
  }

}else{
  $row = mysqli_fetch_array($res);
  echo "$row[0]";
}


?>
