<?php
session_start();
if(!isset($_SESSION['user']) && !isset($_COOKIE['id'])){
    header("Location:login.php");
session_destroy();
    exit();
}
if(!isset($_SESSION['user'] ))
    $_SESSION['user'] =  $_COOKIE['id'] ;
$con = mysql_connect("localhost","root","");
    if(!$con){
        die('Could not connect :'. mysql_error());
    }
    mysql_select_db("my_db",$con);
    $result = mysql_query("SELECT * FROM USER1 WHERE Username = '".$_SESSION['user']."';");
    $row = mysql_fetch_array($result);

    $result_status = mysql_query("SELECT * FROM USER_STATUS WHERE Username = '".$_SESSION['user']."';");
    $row_status = mysql_fetch_array($result_status);

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php print $_SESSION['user']; ?> </title>
    <script type="text/javascript">
        function changePhoto(){
            document.getElementById("change_photo").innerHTML = '<form enctype="multipart/form-data" method="POST" action="changephoto.php">&nbsp &nbsp &nbsp &nbsp<input name="image" accept="image/jpeg" type="file"><br><br>&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp<input type="submit" value="Update" name="submit" id="submitButton" class="btn btn-info " title="Click here to Create Account!" /></form>';
        }
    </script>

    <?php
        include 'header.php';
    ?>
            <div class="row-fluid">
                <div class="span12">                
                    <div class="centered_menu">                      
                    
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown">
                                    <a href="home.php" class="dropdown-toggle">Home </a>
                                </li>                               
                                <li class="dropdown">
                                    <a href="iTax.php" class="dropdown-toggle">iTax Calculator </a>
                                </li>
                                <li class="dropdown"><a href="unitconverter.php">Unit Converter</a></li>
                                
                                <li><a href="contact.php">Contact</a></li>

                                <li class="dropdown active">
                                    <a href="user.php" class="dropdown-toggle"><?php echo $_SESSION['user']; ?></a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>                     
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span><?php print $_SESSION['user']; ?></span>
            </div>

        <div class="row-fluid">             
            <div class="span8" id="divMain">
             
            <?php
                if(isset($_SESSION['onetimegreetinguser'])){
                    echo '<div class="alert alert-success">                           
                    <strong>Welcome '.$_SESSION['user'].'!</strong>
                </div> ';
                unset($_SESSION['onetimegreetinguser']);
                }
             ?>        
                    <h1>Hello ! <?php echo $row['Fname'].' '.$row['Lname'];?> <img src="images\smiley1.jpeg" style="height: 60px;width: 60px;"></h1> 
                    <hr>
                    <div class="alert alert-success">                           
                    <h5 align="center"><strong>Personal Information</strong></h5>
                </div>              
                    <div class="alert alert-info">                        
                    <strong>Name : </strong> <?php print($row['Fname'].' '.$row['Lname']) ?>
                    </div>
                    <div class="alert alert-info">                          
                    <strong>Email : </strong> <?php print($row['Email']) ?>
                    </div> 
                    <div class="alert alert-info">                          
                    <strong>Birthday : </strong> <?php print($row['Age']) ?>
                    </div>  
                    <div class="alert alert-info">                          
                    <strong>Current City : </strong> <?php print($row['City']) ?>
                    </div> 
                    <div class="alert alert-info">                          
                    <strong>Nationality : </strong> <?php print($row['Nationality']) ?>
                    </div> 
                    <div class="alert alert-info">                          
                    <strong>Gender : </strong> <?php print($row['Gender']) ?>
                    </div> 
                    <div class="alert alert-info">                          
                    <strong>Join Date : </strong> <?php print($row['dateposted']) ?>
                    </div> 


            </div>
        
        <div class="span4 sidebar">

                <div class="sidebox">
                    <h3 class="sidebox-title">Profile picture</h3>
                    <?php
                        if(isset($_SESSION['photo_change_successfull'])){
                            echo '<div class="alert alert-success">                          
                        <strong>Update Complete!</strong>
                    </div>';
                    unset($_SESSION['photo_change_successfull']);
                    }

                    ?>

                    <img src="<?php if($row['path'] == "images/")print('images/noimage.jpg'); else print($row['path']);  ?>" class="img-polaroid" style="margin:5px 0px 15px;" alt="">
                   <span id="change_photo">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <button class="btn btn-info" onclick="changePhoto()">Change photo</button></span>
                    <hr>
                    <div class="alert alert-info">                          
                    <strong>Last logged in : <?php echo $row_status['dateposted'];  ?></strong>
                    <strong>Status : <?php echo $row_status['Status'];  ?></strong>
                    </div>             
            
            </div>
    
                </div>
                    
        </div>
            
        </div>
            

            
            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <?php include 'footer.php'; ?>

</div>
<br /><br /><br />

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

</body>
</html>