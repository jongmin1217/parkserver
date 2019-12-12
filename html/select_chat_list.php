<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$eamil = $_POST['email'];

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

    $sql_1 = "SELECT num,lastmessage,chatuser,lastmessagetime from chatroom WHERE num='$row[0]'";
    $res_1 = mysqli_query($conn,$sql_1);
    $num_1=mysqli_num_rows($res_1);
    $row_1 = mysqli_fetch_array($res_1);

    $row_1[2] = str_replace("$eamil  ","",$row_1[2]);
    $userlist = $row_1[2];
    $userlist_str = explode('  ',$userlist);
    $user_cnt = count($userlist_str);
    $nick="";
    $pro="";
    for($j=0; $j<$user_cnt-1; $j++){
      $sql_2 = "SELECT nickname,profileimage from userinfo WHERE userid='$userlist_str[$j]'";
      $res2 = mysqli_query($conn,$sql_2);
      $row2 = mysqli_fetch_array($res2);
      $nick = $nick.$row2[0]."  ";
      $pro = $pro.$row2[1]."  ";
    }
    $row_1[2] = str_replace("  ","",$row_1[2]);

    echo "$row_1[0]<next>$row_1[1]<next>$userlist<next>$row_1[3]<next>$nick<next>$pro\n";

  }
}


?>
