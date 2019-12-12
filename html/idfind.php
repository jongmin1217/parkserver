<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$username = $_POST['username'];
$userphone = $_POST['userphone'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT userid from userinfo WHERE username='$username' AND userphone='$userphone'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);

echo $row[0];
?>
