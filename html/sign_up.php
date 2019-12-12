<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$username = $_POST['username'];
$userphone = $_POST['userphone'];
$userid = $_POST['userid'];
$userpw = $_POST['userpw'];
$userstatus = $_POST['userstatus'];
$usersingnum = $_POST['usersingnum'];

$succes = "회원가입을 완료하였습니다. 이메일 인증코드를 입력해주세요.";
$failed = "이미 회원가입한 회원입니다.";

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$query = "INSERT INTO userinfo (username,userphone,userid,userpw,userstatus,usersingnum) VALUES ('$username','$userphone','$userid','$userpw',$userstatus,'$usersingnum')";
if(mysqli_query($conn,$query)){
  echo "succes";
}else{
  echo "failed";
}



?>
