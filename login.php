<?php
session_start();
if(isset($_SESSION['user']) || isset($_COOKIE['id'])){
    if(isset($_COOKIE['id'])){
        $_SESSION['user'] = $_COOKIE['id'];
    }
    header("Location:user.php");
    exit();
}
    $con = mysql_connect("localhost","root","");
    if(!$con){
        die('Could not connect :'. mysql_error());
    }
    mysql_select_db("my_db",$con);
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
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
                                    <a href="login.php" class="dropdown-toggle">Login</a>
                                    
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
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Login</span>
            </div>

            <div class="row-fluid">    
             <?php
                if(isset($_SESSION['uname'])){
                    echo '<div class="alert alert-success">                           
                    <strong>Congratulation '.$_SESSION['uname'].'!</strong> Your account created succesfully!!
                </div> ';
                }
             ?>      
                <div class="span12" id="divMain">
                <h1  align="center"> Login</h1>
                <hr>
                
 <form action="loginaction.php" method="POST">
 
    <table align="center">
        <tr>

            <td ><input type="text" name="username" required="1" placeholder="Username" value="<?php if(isset($_SESSION['password_not_match'])){echo $_SESSION['password_not_match'];}elseif (isset($_SESSION['uname'])) {
                echo $_SESSION['uname'];
                unset($_SESSION['uname']);
            }?>"><br></td>
            <td style="white-space: pre;"><h5><?php
                    if(isset($_SESSION['username_not_match'])){
                        echo "<span style='color:red;white-space: pre;'>   Username does'nt exist!!!</span>";
                        unset($_SESSION['username_not_match']);
                    }
                ?></h5></td>
        </tr>
        <tr>
            <td ><input type="password" name="passWord" required="1" placeholder="Password"><br></td>
            <td ><h5><?php if(isset($_SESSION['password_not_match'])){
                        echo "<span style='color:red;white-space: pre;'>   Password does'nt match!!!</span>";
                        unset($_SESSION['password_not_match']);}?></h5> </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Login" name="submit" id="submitButton" class="btn btn-info " title="Click here to Login!" />
                &nbsp &nbsp<a href="create-account.php">Create new account</a>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>
            <label class="checkbox">
                 <input type="checkbox" name="remind" > Remeber me
            </label>
            </td>
        </tr>

     </table>
</form>


                
            
            
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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="directionaware/js/jquery.hoverdir.js"></script> 
<script type="text/javascript">
            $(function() {
            
                $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

            });
</script>

</body>
</html>