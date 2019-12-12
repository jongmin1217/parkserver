<?php
$servername = "localhost";
$id = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$email = $_POST['email'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$phone = $_POST['phone'];
$profile = $_POST['profile'];

if($profile==null){
  $profile = "http://18.188.143.37/talnova/profileimage/profile.png";
}else{
  $path = "http://18.188.143.37/talnova/profileimage/";
  $profile = $path.$profile;
}


// Create connection
$conn = new mysqli($servername, $id, $password, $database);
mysqli_query("set names utf8");


$query = "INSERT INTO userinfo (email,pass,name,nickname,gender,birth,phone,profile) VALUES ('$email','$pass','$name','$nickname','$gender','$birth','$phone','$profile')";

if($email!=null){
  if(mysqli_query($conn,$query)){
    echo "succes";
  }else{
    echo "sadsd";
  }
}




?>
