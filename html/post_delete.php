<?php
$servername = "localhost";
$name = "syj40886";
$password = "whdals.1217";
$database = "travel";

$num = $_POST['num'];


// Create connection
$conn = new mysqli($servername, $name, $password, $database);
mysqli_query("set names utf8");


$query = "DELETE FROM postinfo WHERE num=$num";
$like_query = "DELETE FROM postlike WHERE postnum=$num";
$coment_query = "DELETE FROM coment WHERE postnum=$num";
if(mysqli_query($conn,$query)&&mysqli_query($conn,$like_query)&&mysqli_query($conn,$coment_query)){

    echo "succes";


}else{
  echo "failed";
}

?>
