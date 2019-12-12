<?php

        $servername = "localhost";
        $username = "syj40886";
        $password = "whdals.1217";
        $database = "yami";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        mysqli_query("set names utf8");


        // Check connection


        $find = "image/";
        $pic = 'jpeg';

        $postname=$_POST['postname'];
        $postcontents=$_POST['postcontents'];
        $dateday=$_POST['dateday'];

        $find_num = strpos("$postcontents", "$find").'<br>';

        $ck = strpos("$postcontents", "$pic").'<br>';

        if($ck!=-1){
          $title = substr($postcontents,$find_num+6,15);
        }else{
          $title = substr($postcontents,$find_num+6,14);
        }



        $host = "http://18.188.143.37/editor/image/";
        $titleimage = $host.$title;

        $post_name=str_replace("'", "\'", "$postname");
        $post_contents=str_replace("'", "\'", "$postcontents");
        // $post_contents=str_replace("<p>", "", "$post_contents");
        // $post_contents=str_replace("</p>", "", "$post_contents");
        $post_contents = str_replace("./", "http://18.188.143.37/editor/", "$post_contents");
        $posttime = date("Y-m-d H:i");



        mysqli_query($conn,"INSERT INTO postinfo (postname,postcontent,posttime,dateday,title) VALUES ('{$post_name}','{$post_contents}','{$posttime}','$dateday','$titleimage')");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
          Header("Location:home.php");
        }

        //Header("Location:home.php");
        mysqli_close($conn);
?>
