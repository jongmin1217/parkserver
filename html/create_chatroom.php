<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$user1 = $_POST['user1'];
$user2 = $_POST['user2'];
$message = $_POST['message'];
$time = $_POST['time'];
$unix = $_POST['unix'];
$user_num = $_POST['user_num'];

$user_add = $user1."  ".$user2."  ";

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$query = "INSERT INTO chatroom (lastmessage,chatuser,lastmessagetime,unixtime) VALUES ('$message','$user_add','$time',$unix)";
if(mysqli_query($conn,$query)){
  $sql = "SELECT num FROM chatroom order by num DESC limit 1";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res);
  $query1 = "INSERT INTO chatmessage (chatnum,chatcontent,writer,messagetime,unixtime,cnt) VALUES ('$row[0]','$message','$user1','$time',$unix,'$user_num')";
  if(mysqli_query($conn,$query1)){
    $query2 = "INSERT INTO chatuser (user,chatnum,inserttime,lastmessagetime) VALUES ('$user1','$row[0]',$unix,$unix)";
    $query3 = "INSERT INTO chatuser (user,chatnum,inserttime,lastmessagetime) VALUES ('$user2','$row[0]',$unix,$unix)";
    if(mysqli_query($conn,$query2)&&mysqli_query($conn,$query3)){
      echo "$row[0]";
    }else{
      echo "failed";
    }
  }else{
    echo "failed";
  }
}else{
  echo "failed";
}

?>
