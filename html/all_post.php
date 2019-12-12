<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$post_num = $_POST['post_num'];

// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$sql = "SELECT name,thema,day,location,image,tip,writetime,writer,postlike from postinfo WHERE num=$post_num";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);

$sql_1 = "SELECT nickname,profileimage from userinfo WHERE userid='$row[7]'";
$res_1 = mysqli_query($conn,$sql_1);
$row_1 = mysqli_fetch_array($res_1);

echo "$row[0]<next>$row[1]<next>$row[2]<next>$row[3]<next>$row[4]<next>$row[5]<next>$row[6]<next>$row_1[0]<next>$row_1[1]<next>$row[8]<next>$row[7]";

?>
