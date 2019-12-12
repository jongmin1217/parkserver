<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "talnova";

$num = $_POST['num'];
$user = $_POST['user'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$select = "SELECT chatuser FROM chatroom WHERE num='$num'";
$select_res = mysqli_query($conn,$select);
$select_row = mysqli_fetch_array($select_res);

$select_row[0] = str_replace("$user  ","",$select_row[0]);


echo "$select_row[0]";
?>
