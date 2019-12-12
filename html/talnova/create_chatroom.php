<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$nickname = $_POST['nickname'];
$time = $_POST['time'];
$unix = $_POST['unix'];
$chatname = $_POST['chatname'];
$category = $_POST['category'];

$chatuser = $nickname."  ";

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");
$message = $nickname."님이 입장하였습니다";
$query = "INSERT INTO chatroom (lastmessage,chatuser,lastmessagetime,unixtime,chatname,category) VALUES ('$message','$chatuser','$time',$unix,'$chatname','$category')";
if(mysqli_query($conn,$query)){
  $sql = "SELECT num FROM chatroom order by num DESC limit 1";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res);
  $query1 = "INSERT INTO chatmessage (chatnum,chatcontent,writer,messagetime,unixtime,msgtype) VALUES ('$row[0]','$message','$nickname','$time',$unix,'notice')";
  if(mysqli_query($conn,$query1)){
    $query2 = "INSERT INTO chatuser (user,chatnum,inserttime,lastmessagetime) VALUES ('$nickname','$row[0]',$unix,$unix)";

    if(mysqli_query($conn,$query2)){
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
