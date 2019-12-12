<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$eamil = $_POST['nickname'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT chatnum from chatuser where user='$eamil' order by lastmessagetime DESC";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num==0){
  echo "none";
}else{
  for($i=0; $i<$num; $i++){
    $row = mysqli_fetch_array($res);

    $sql_1 = "SELECT num,lastmessage,chatname,lastmessagetime,chatuser from chatroom WHERE num='$row[0]'";
    $res_1 = mysqli_query($conn,$sql_1);
    $num_1=mysqli_num_rows($res_1);
    $row_1 = mysqli_fetch_array($res_1);
    $user_num = explode('  ' , $row_1[4]);
    $number = count($user_num)-1;
    $row_1[4] = str_replace("$eamil  ","",$row_1[4]);
    if($row_1[4]==""){
      $row_1[4] = "null";
    }

    echo "$row_1[0]<next>$row_1[1]<next>$row_1[2]<next>$row_1[3]<next>$row_1[4]<next>$number\n";

  }
}


?>
