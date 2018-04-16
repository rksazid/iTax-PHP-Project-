<?php
session_start();
$con = mysql_connect("localhost","root","");
    if(!$con){
        die('Could not connect :'. mysql_error());
    }
    mysql_select_db("my_db",$con);

    if($_SERVER["REQUEST_METHOD"]=="POST"){
    	move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
        $file="images/".$_FILES["image"]["name"];

        $uname = $_SESSION['user'];
    	$sql = "UPDATE USER1 SET path = '$file' WHERE Username ='$uname'";
    	mysql_query($sql,$con);
    	$_SESSION['photo_change_successfull'] = 1;
    	header("Location:user.php");
    	exit();
    }



?>