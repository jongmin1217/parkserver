<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$userid = $_GET['name'];
$userpw = $_GET['name2'];


// Create connection
if($userid!="19941217"&&$userpw!="20190105"){
  echo "<script>alert('이걸 틀리냐...'); history.back();</script>";
}else{
  Header("Location:home.php");
}

?>
