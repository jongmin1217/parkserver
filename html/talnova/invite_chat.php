<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$num = $_POST['num'];
$nickname = $_POST['nickname'];
$time = $_POST['time'];
$unix = $_POST['unix'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$message = $nickname."님이 입장하였습니다";
$query = "SELECT chatuser FROM chatroom WHERE num='$num'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
$invite_user = $row[0].$nickname."  ";
$sql = "UPDATE chatroom SET chatuser='$invite_user', lastmessage = '$message', lastmessagetime='$time', unixtime='$unix'  WHERE num='$num'";
if(mysqli_query($conn,$sql)){

  $query1 = "INSERT INTO chatmessage (chatnum,chatcontent,writer,messagetime,unixtime,msgtype) VALUES ('$num','$message','$nickname','$time',$unix,'notice')";
  $query2 = "INSERT INTO chatuser (user,chatnum,inserttime,lastmessagetime) VALUES ('$nickname','$num',$unix,$unix)";
  if((mysqli_query($conn,$query1))&&(mysqli_query($conn,$query2))){

    $query3 = "UPDATE  chatuser SET lastmessagetime=$unix WHERE chatnum='$num'";
    if(mysqli_query($conn,$query3)){
      echo "succes";
    }
  }else{
    echo "failed2";
  }
}else{
  echo "failed";
}

?>
