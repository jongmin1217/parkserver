<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$user = $_POST['user'];

$followlist = "";

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$followsql = "SELECT follwer from follow where folling='$user'";
$followres = mysqli_query($conn,$followsql);
$follownum=mysqli_num_rows($followres);

for($i=0; $i<$follownum; $i++){
  $followrow = mysqli_fetch_array($followres);
  if($i==0){
    $followlist = "'".$followrow[0]."'";
  }else{
    $followlist = $followlist.",'".$followrow[0]."'";
  }


}

$sql = "SELECT name,location,image,writer,num from postinfo where writer in ($followlist) order by num DESC";
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
?>
