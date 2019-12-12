<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$num = $_POST['num'];
$email = $_POST['email'];
$message = $_POST['message'];
$time = $_POST['time'];
$unix = $_POST['unix'];
$cnt = $_POST['cnt'];
$rec_user = $_POST['rec_user'];
$type = $_POST['type'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


if($type!="invite"){
  $select2 = "SELECT * FROM chatuser WHERE chatnum=$num and user='$email'";
  $select_query2 = mysqli_query($conn,$select2);
  $select_num2 = mysqli_num_rows($select_query2);
}else{
  $select_num2 = 1;
}




$query = "UPDATE  chatuser SET lastmessagetime=$unix WHERE chatnum='$num'";
if(mysqli_query($conn,$query)){
  if($type=="img"){
    $sql = "UPDATE  chatroom SET lastmessage='사진', lastmessagetime='$time', unixtime=$unix WHERE num='$num' limit 1";
  }else{
    $sql = "UPDATE  chatroom SET lastmessage='$message', lastmessagetime='$time', unixtime=$unix WHERE num='$num' limit 1";
  }


  if(mysqli_query($conn,$sql)){
    $query2 = "INSERT INTO chatmessage (chatnum,chatcontent,writer,messagetime,unixtime,cnt,msgtype) VALUES ('$num','$message','$email','$time',$unix,'$cnt','$type')";

    $rec_users = explode("  ",$rec_user);
    $rec_cnt = count($rec_users);
    echo "$rec_user";
    for($i=0; $i<$rec_cnt; $i++){
      $select = "SELECT * FROM chatuser WHERE chatnum=$num and user='$rec_users[$i]'";
      $select_query = mysqli_query($conn,$select);
      $select_num = mysqli_num_rows($select_query);
      echo "$rec_users[$i]\n";
      if($select_num==0){
        $insert = "INSERT INTO chatuser (user,chatnum,inserttime,lastmessagetime) values ('$rec_users[$i]',$num,'$unix','$unix')";
        mysqli_query($conn,$insert);
      }
    }

    if($select_num2==0){
      $insert = "INSERT INTO chatuser (user,chatnum,inserttime,lastmessagetime) values ('$email',$num,'$unix','$unix')";
      mysqli_query($conn,$insert);
    }
    if(mysqli_query($conn,$query2)){
      echo "succes";
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
