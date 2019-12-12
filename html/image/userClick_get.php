<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$userid = $_POST['userid'];

echo "zz";

// $res = mysqli_query($conn,$sql);
// $num = mysqli_num_rows($res);
//
// $arr=[];
// for($i=0; $i<$num; $i++){
//   $row = mysqli_fetch_array($res);
//
//   array_push($arr,
//     array("click"=>$row[0]
//   ));
//
// }
//
// //echo json_encode($arr);
// header('Content-Type: application/json; charset=utf8');
// $json = json_encode(array("infor"=>$arr), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
// echo $json;

 ?>
