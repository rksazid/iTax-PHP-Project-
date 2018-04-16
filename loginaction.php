<?php
session_start();
    $con = mysql_connect("localhost","root","");
    if(!$con){
        die('Could not connect :'. mysql_error());
    }
    mysql_select_db("my_db",$con);
                $name = $_POST['username'];
                $pass = $_POST['passWord'];
                $_SESSION['nam'] = $name;
                if(isset($_POST['remind'])){
                    setcookie('id',$name,time()+3*60);
                    setcookie('pas',$pass,time()+3*60);
                }
                setcookie('security',$name,time() + 86400);
                $result = mysql_query("SELECT * FROM USER1 WHERE Username = '".$name."';");
                $row = mysql_fetch_array($result);
                if($row['Password'] == $pass){
                    $_SESSION['onetimegreetinguser'] = 1;
                    $_SESSION['user'] = $name;
                    $sql = "UPDATE USER_STATUS SET Status = 'Active',dateposted = CURRENT_TIMESTAMP WHERE Username ='$name'";
                    mysql_query($sql,$con);
                    header("Location:user.php");
                    exit;
                }else{
                    if($row['Username'] == null){
                        $_SESSION['username_not_match'] = 1;
                    }else{
                        $_SESSION['password_not_match'] = $name;
                    }
                    header("Location:login.php");
                    exit;
                }
?>