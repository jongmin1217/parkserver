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

$select = "SELECT inserttime FROM chatuser WHERE user='$user' and chatnum='$num'";
$select_res = mysqli_query($conn,$select);
$select_row = mysqli_fetch_array($select_res);

$sql = "SELECT chatcontent,writer,messagetime,cnt,msgtype from chatmessage where chatnum='$num' and unixtime>=$select_row[0] order by num asc";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);


for($i=0; $i<$num; $i++){
  $row = mysqli_fetch_array($res);

  $sql_1 = "SELECT nickname,profileimage from userinfo WHERE userid='$row[1]'";
  $res_1 = mysqli_query($conn,$sql_1);
  $row_1 = mysqli_fetch_array($res_1);
  echo "$row[0]<next>$row[1]<next>$row_1[0]<next>$row_1[1]<next>$row[2]<next>$row[3]<next>$row[4]\n";

}
?>
