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


$query = "DELETE FROM chatuser WHERE chatnum=$num and user='$nickname'";
$sql = "SELECT chatuser FROM chatroom WHERE num=$num";
$res = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
echo "$row[0]";


$result = str_replace("$nickname  ","",$row[0]);

$message = $nickname."님이 퇴장하였습니다";
$sql2 = "UPDATE chatroom SET chatuser='$result',lastmessagetime='$time',unixtime='$unix',lastmessage='$message' WHERE num=$num";
$sql3 = "INSERT INTO chatmessage (chatnum,chatcontent,writer,messagetime,unixtime,msgtype) VALUES ('$num','$message','$nickname','$time',$unix,'notice')";
if(mysqli_query($conn,$query)){
  if((mysqli_query($conn,$sql2))&&(mysqli_query($conn,$sql3))){
    echo "susses";
  }else{
    echo "failed";
  }

}else{
  echo "failed";
}

?>
