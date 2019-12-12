<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$useremail = $_POST['useremail'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT * from userinfo WHERE userid='{$useremail}'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);

echo "$row[0]  $row[1]  $row[2]  $row[3]  $row[6]  $row[7]  $row[8]";
?>
