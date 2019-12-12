<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$user = $_POST['user'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT * from follow where folling='$user'";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);

$sql2 = "SELECT * from follow where follwer='$user'";
$res2 = mysqli_query($conn,$sql2);
$num2=mysqli_num_rows($res2);


echo "$num  $num2";
?>
