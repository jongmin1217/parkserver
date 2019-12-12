<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$userid = $_POST['userid'];
$userpw = $_POST['userpw'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT num,pass,nickname,profile from userinfo WHERE email='$userid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);
if($row[0]!=NULL){
  if($row[1]==$userpw){

    $arr = array('num' => $row[0], 'nickname' => $row[2], 'profile' => $row[3]);
    echo json_encode($arr);
  }else{
    echo "no pass";
  }
}else{
  echo "no email";
}

?>
