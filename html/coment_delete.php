<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$num = $_POST['num'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT num FROM coment WHERE recomentnum=$num";
$res = mysqli_query($conn,$sql);
$cnt = mysqli_num_rows($res);

for($i=0; $i<$cnt; $i++){
  $row = mysqli_fetch_array($res);

  echo "$row[0]  ";
}

$query = "DELETE FROM coment WHERE num=$num";
$like_query = "DELETE FROM coment WHERE recomentnum=$num";
if(mysqli_query($conn,$query)&&mysqli_query($conn,$like_query)){




}else{
  echo "failed";
}

?>
