<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$user = $_POST['user'];
$num = $_POST['num'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT chatuser from chatroom where num='$num'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);

$chatuser = explode("  ",$row[0]);
$chat_cnt = count($chatuser);

$chat_room_name = "";
for($i=0; $i<$chat_cnt; $i++){
  $sql_2 = "SELECT nickname from userinfo WHERE userid='$chatuser[$i]'";
  $res_2 = mysqli_query($conn,$sql_2);
  $row_2 = mysqli_fetch_array($res_2);

  $str = strcmp($user, $chatuser[$i]);

  if($str){
  $chat_room_name = $chat_room_name.$row_2[0].", ";
  }


}

$result = substr($chat_room_name,0,-4);

echo "$result<next>$row[0]";




?>
