<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$chatname = $_POST['chatname'];
$click = $_POST['click'];
// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$sql = "SELECT * from aichat where chatname='$chatname' and click ='$click' order by num asc";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);

$arr=[];
for($i=0; $i<$num; $i++){
  $row = mysqli_fetch_array($res);

  array_push($arr,
    array("user"=>$row[1],
    "message"=>$row[2]
  ));


}

//echo json_encode($arr);
header('Content-Type: application/json; charset=utf8');
$json = json_encode(array("infor"=>$arr), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
echo $json;



?>
