<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$num = $_POST['num'];
$email = $_POST['email'];
$message = $_POST['message'];
$time = $_POST['time'];
$unix = $_POST['unix'];
$type = $_POST['type'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");



$query = "UPDATE  chatuser SET lastmessagetime=$unix WHERE chatnum='$num'";
if(mysqli_query($conn,$query)){
  if($type=="img"){
    $sql = "UPDATE  chatroom SET lastmessage='사진', lastmessagetime='$time', unixtime=$unix WHERE num='$num' limit 1";
  }else{
    $sql = "UPDATE  chatroom SET lastmessage='$message', lastmessagetime='$time', unixtime=$unix WHERE num='$num' limit 1";
  }



    $query2 = "INSERT INTO chatmessage (chatnum,chatcontent,writer,messagetime,unixtime,msgtype) VALUES ('$num','$message','$email','$time',$unix,'$type')";


    if((mysqli_query($conn,$query2))&&(mysqli_query($conn,$sql))){
      echo "succes";
    }else{
      echo "failed";
    }

}else{
  echo "failed";
}

?>
