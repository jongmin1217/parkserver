<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$eamil = $_POST['nickname'];
$hobby = $_POST['hobby'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT num,chatname,chatuser from chatroom WHERE category='$hobby'";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num==0){
  echo "";
}else{
  for($i=0; $i<$num; $i++){
    $config = true;
    $row = mysqli_fetch_array($res);

    $user_num = explode('  ' , $row[2]);
    $number = count($user_num)-1;

    $sql_1 = "SELECT chatnum from chatuser WHERE user='$eamil'";
    $res_1 = mysqli_query($conn,$sql_1);
    $num_1=mysqli_num_rows($res_1);
    for($j=0; $j<$num_1; $j++){
      $row_1 = mysqli_fetch_array($res_1);
      if($row[0]==$row_1[0]){
        $config = false;
      }
    }

    if($config){
      echo "$row[0]<next>$row[1]<next>$number\n";
    }



  }
}


?>
