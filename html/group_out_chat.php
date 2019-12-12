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
$sql = "SELECT chatuser FROM chatroom WHERE num=$num";
$res = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

echo "$user\n";

echo "$row[0]\n";

$result = str_replace("$user  ","",$row[0]);

echo "$result";
$sql2 = "UPDATE chatroom SET chatuser='$result' WHERE num=$num";
if(mysqli_query($conn,$query)){
  if(mysqli_query($conn,$sql2)){
    echo "susses";
  }
  echo "failed";

}else{
  echo "failed";
}

?>
