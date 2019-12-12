<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$search = $_POST['search'];
$login_email = $_POST['login_eamil'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT userid,nickname,profileimage FROM userinfo WHERE nickname LIKE '%$search%'";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);

for($i=0; $i<$num; $i++){
  $row = mysqli_fetch_array($res);

  $sql2 = "SELECT * from follow where folling='$login_email' and follwer='$row[0]'";
  $res2 = mysqli_query($conn,$sql2);
  $num2=mysqli_num_rows($res2);

  echo "$row[0]<next>$row[1]<next>$row[2]<next>$num2\n";
}
?>
