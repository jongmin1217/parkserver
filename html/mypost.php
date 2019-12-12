<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$writer = $_POST['writer'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT name,location,image,num from postinfo where writer='$writer' order by num DESC";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);


for($i=0; $i<$num; $i++){
  $row = mysqli_fetch_array($res);

  echo "$row[0]<next>$row[1]<next>$row[2]<next>$row[3]\n";
}
?>
