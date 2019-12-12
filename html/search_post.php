<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$search = $_POST['search'];

$followlist = "";

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");



$sql = "SELECT name,location,image,writer,num from postinfo where name like '%$search%' order by num DESC";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);


for($i=0; $i<$num; $i++){
  $row = mysqli_fetch_array($res);

  $sql_1 = "SELECT nickname,profileimage from userinfo WHERE userid='$row[3]'";
  $res_1 = mysqli_query($conn,$sql_1);
  $num_1=mysqli_num_rows($res_1);
  $row_1 = mysqli_fetch_array($res_1);
  echo "$row[0]<next>$row[1]<next>$row[2]<next>$row[4]<next>$row_1[0]<next>$row_1[1]<next>$row[3]\n";
}
echo "여행지 검색으로 넘어갑니다";

$sql2 = "SELECT name,location,image,writer,num from postinfo where location like '%$search%' order by num DESC";
$res2 = mysqli_query($conn,$sql2);
$num2=mysqli_num_rows($res2);


for($i=0; $i<$num2; $i++){
  $row2 = mysqli_fetch_array($res2);

  $sql_12 = "SELECT nickname,profileimage from userinfo WHERE userid='$row2[3]'";
  $res_12 = mysqli_query($conn,$sql_12);
  $num_12=mysqli_num_rows($res_12);
  $row_12 = mysqli_fetch_array($res_12);
  echo "$row2[0]<next>$row2[1]<next>$row2[2]<next>$row2[4]<next>$row_12[0]<next>$row_12[1]<next>$row2[3]\n";
}
?>
