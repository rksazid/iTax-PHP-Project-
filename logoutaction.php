<?php
session_start();
$con = mysql_connect("localhost","root","");
    if(!$con){
        die('Could not connect :'. mysql_error());
    }
    $uname = $_SESSION['user'];
    mysql_select_db("my_db",$con);
    $sql = "UPDATE USER_STATUS SET Status = 'offline',dateposted = CURRENT_TIMESTAMP WHERE Username ='$uname'";
    mysql_query($sql,$con);
session_destroy();
setcookie('id','',time()-3600);
setcookie('pas','',time()-3600);
setcookie('security',$name,time()- 86400);
header('Location: login.php');
exit();
?>