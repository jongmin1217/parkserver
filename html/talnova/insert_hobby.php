<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$nickname = $_POST['nickname'];
$hobby = $_POST['hobby'];



// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$str =explode('  ' , $hobby);

$num = count($str);

for($i=0; $i<($num-1); $i++){
  $query = "INSERT INTO hobby (nickname,hobbyname) VALUES ('$nickname','$str[$i]')";
  if(mysqli_query($conn,$query)){
    echo "succes";
  }else{
    echo "failed";
  }
}




?>
