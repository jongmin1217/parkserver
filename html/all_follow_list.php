<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";


$login_email = $_POST['login_email'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$sql = "SELECT folling from follow where follwer='$login_email'";

$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);


for($i=0; $i<$num; $i++){
  $row = mysqli_fetch_array($res);
  $sql_1 = "SELECT nickname,profileimage from userinfo WHERE userid='$row[0]'";
  $res_1 = mysqli_query($conn,$sql_1);
  $row_1 = mysqli_fetch_array($res_1);
  echo "$row[0]<next>$row_1[0]<next>$row_1[1]\n";
}

echo "팔로잉으로 넘어갑니다";

$sql0 = "SELECT follwer from follow where folling='$login_email'";

$res0 = mysqli_query($conn,$sql0);
$num0=mysqli_num_rows($res0);


for($i=0; $i<$num0; $i++){
  $row0 = mysqli_fetch_array($res0);
  $sql_10 = "SELECT nickname,profileimage from userinfo WHERE userid='$row0[0]'";
  $res_10 = mysqli_query($conn,$sql_10);
  $row_10 = mysqli_fetch_array($res_10);
  echo "$row0[0]<next>$row_10[0]<next>$row_10[1]\n";
}

?>
