<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$num = $_POST['num'];
$user = $_POST['user'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$query = "DELETE FROM chatuser WHERE chatnum=$num and user='$user'";
if(mysqli_query($conn,$query)){
  echo "susses";

}else{
  echo "failed";
}

?>
