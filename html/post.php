<?php
$servername = "localhost";
$username = "syj40886";
$password = "whdals.1217";
$database = "yami";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
mysqli_query("set names utf8");

$postnum=$_GET['num'];

$coment_check = "SELECT * from postinfo WHERE num='{$postnum}'";
$coment_res = mysqli_query($conn,$coment_check);
$row = mysqli_fetch_array($coment_res);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>축억들</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./bcss/bootstrap.css" rel="stylesheet">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


    <div class="container">
      <div class="page-header">
        <h1><?php echo "$row[0]"; ?></h1>
      </div>
      <p class="lead"><?php echo "데이트 날짜 : ".$row[3]; ?></p>
      <p class="lead"><?php echo "작성 시간 : ".$row[2]; ?>

      <div class="page-header"></div>
      <p class="lead"><?php echo $row[1]; ?></p>
      <br><br>









    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
