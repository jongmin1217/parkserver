<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$user = $_POST['user'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT profile from userinfo WHERE nickname='$user'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);

echo "$row[0]";
?>
