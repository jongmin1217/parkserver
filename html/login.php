<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$userid = $_POST['userid'];
$userpw = $_POST['userpw'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT userpw,userstatus from userinfo WHERE userid='$userid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);
if($row[0]!=NULL){
  if($row[0]==$userpw){
    if($row[1]==0){
      echo "1";
    }else{
      echo "3";
    }
  }else{
    echo "2";
  }
}else{
  echo "0";
}

?>
