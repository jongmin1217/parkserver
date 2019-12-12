<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$folling = $_POST['folling_id'];
$follwer = $_POST['follwer_id'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT * from follow where folling='$folling' and follwer='$follwer'";
$res = mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);


echo "$num";
?>
