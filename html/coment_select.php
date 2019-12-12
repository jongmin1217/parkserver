<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$postnum = $_POST['postnum'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT writer,comentvar,coment_time,num from coment where postnum='$postnum' order by num DESC";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);


for($i=0; $i<$num; $i++){
  $row = mysqli_fetch_array($res);

  $sql_1 = "SELECT nickname,profileimage from userinfo WHERE userid='$row[0]'";
  $res_1 = mysqli_query($conn,$sql_1);
  $num_1=mysqli_num_rows($res_1);
  $row_1 = mysqli_fetch_array($res_1);
  echo "$row_1[0]<next>$row_1[1]<next>$row[1]<next>$row[0]<next>$row[2]<next>$row[3]<next>coment\n";


  $sql_12 = "SELECT writer,comentvar,coment_time,num from coment WHERE recomentnum='$row[3]' order by num DESC";
  $res_12 = mysqli_query($conn,$sql_12);
  $num_12=mysqli_num_rows($res_12);
  for($j=0; $j<$num_12; $j++){
    $row_12 = mysqli_fetch_array($res_12);

    $sql_13 = "SELECT nickname,profileimage from userinfo WHERE userid='$row_12[0]'";
    $res_13 = mysqli_query($conn,$sql_13);
    $num_13=mysqli_num_rows($res_13);
    $row_13 = mysqli_fetch_array($res_13);

    echo "$row_13[0]<next>$row_13[1]<next>$row_12[1]<next>$row_12[0]<next>$row_12[2]<next>$row_12[3]<next>recoment\n";
  }

}
?>
