<?php
session_start();
$con = mysql_connect("localhost","root","");
    if(!$con){
        die('Could not connect :'. mysql_error());
 }
mysql_select_db("my_db",$con);

$q=$_GET["q"];

$result = mysql_query("SELECT * FROM USER1 WHERE Username = '".$q."';");
$row = mysql_fetch_array($result);

if($row['Email'] != null){
	echo "<span style = 'color:red;' >  Username Already exist!!! </span>";
}else{
	echo '';
}

?>