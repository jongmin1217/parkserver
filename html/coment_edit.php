<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$num = $_POST['num'];
$coment = $_POST['coment'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");

$query = "UPDATE coment SET comentvar='$coment' WHERE num=$num LIMIT 1";
if(mysqli_query($conn,$query)){
  echo "succes";
}else{
  echo "failed";
}

?>
