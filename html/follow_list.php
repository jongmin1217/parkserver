<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$user = $_POST['user'];
$status = $_POST['status'];
$login_email = $_POST['login_email'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

if($status=="follwer"){
  $sql = "SELECT folling from follow where follwer='$user'";
}else{
  $sql = "SELECT follwer from follow where folling='$user'";
}
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);


for($i=0; $i<$num; $i++){
  $row = mysqli_fetch_array($res);

  $sql2 = "SELECT * from follow where folling='$login_email' and follwer='$row[0]'";
  $res2 = mysqli_query($conn,$sql2);
  $num2=mysqli_num_rows($res2);

  $sql_1 = "SELECT nickname,profileimage from userinfo WHERE userid='$row[0]'";
  $res_1 = mysqli_query($conn,$sql_1);
  $num_1=mysqli_num_rows($res_1);
  $row_1 = mysqli_fetch_array($res_1);
  echo "$row[0]<next>$row_1[0]<next>$row_1[1]<next>$num2\n";
}
?>
