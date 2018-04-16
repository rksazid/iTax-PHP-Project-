<?php
session_start();
$con = mysql_connect("localhost","root","");

    /***** Create Database *****/
    $query = "CREATE DATABASE my_db";
    if(mysql_query("$query",$con)){
        echo "Database Created! <br/>";
    }
    mysql_select_db("my_db",$con);
    $sql = "CREATE TABLE USER1(
        Fname varchar(20),
        Lname varchar(20),
        Email varchar(20),
        Age varchar(15),
        City varchar(10),
        Nationality varchar(15),
        Gender varchar(7),
        Username varchar(15),
        Password varchar(20),
        path varchar(50),
        dateposted DATETIME
    )";
    if(mysql_query($sql,$con)){

    }
    $sql = "CREATE TABLE USER_STATUS(
            Username varchar(15),
            Status varchar(10)default 'offline',
            dateposted DATETIME
    )";
    if(mysql_query($sql,$con)){
    }
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Create Account</title>
    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">


    <link href="scripts/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

    <link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" /> <link href="scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css" />

    <link href="styles/custom.css" rel="stylesheet" type="text/css" /> 

<script type="text/javascript">

function usernameCheckEveryTime(str)
{
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("usernameCheck").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkusername.php?q="+str,true);
xmlhttp.send();
}

function emailCheckEveryTime(str)
{
if (str.length==0)
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("emailCheck").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","checkEmail.php?q="+str,true);
xmlhttp.send();
}
</script>
    
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">                    

                    <div id="divLogo">
                    <img src="icons\siteicon.ico" style="height: 100px;width: 100px;">
                        <a href="home.php" id="divSiteTitle">Calculate All</a><br />
                        <a href="home.php" id="divTagLine">All types of converter & calculator including Income tax</a>
                    </div>
                </div>
            </div>   
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
                                <li class="dropdown "><a href="unitconverter.php">Unit Converter</a></li>
                                
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
                <a href="home.php">Home</a> &nbsp;/&nbsp; <a href="login.php">Login</a> &nbsp;/&nbsp; <span>Create account</span>
            </div>

            <div class="row-fluid">           
                <div class="span12" id="divMain">
                <h1 align="center">Create New Account</h1>
                <hr>
                
 
<form enctype="multipart/form-data" method="POST" action="create-accountaction.php">

	<table align="center">
		<tr>
			<td>Firstname<span style="color: red">*</span> : </td>
			<td><input type="text" name="fname" required="1" value="<?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'];unset($_SESSION['fname']);}?>"/></td>
		</tr>
		<tr>
			<td>Lastname<span style="color: red">*</span> : </td>
			<td><input type="text" name="lname" required="1" value="<?php if(isset($_SESSION['lname'])){echo $_SESSION['lname'];unset($_SESSION['lname']);}?>" /></td>
		</tr>
		<tr>
			<td>E-mail<span style="color: red">*</span> : </td>
			<td><input type="email" name="eMail" required="1" onkeyup="emailCheckEveryTime(this.value)" size="20" placeholder="Ex : info@yourdomain.com" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];unset($_SESSION['email']);}?>" /></td>
            <td><span id="emailCheck" style="white-space: pre;"></span></td>
		</tr>
		<tr>
			<td>Birthday : </td>
			<td>
            <select name="date" class="input-mini">
              <?php
              for ($i=1; $i <= 31; $i++) { 
                  print('<option value="'.$i.'" >'.$i.'</option> <br\>');
              }
              ?>
            </select>
            <select name="month" class="input-mini" >
              <option value="January" >January</option>
              <option value="February" >February</option>
              <option value="March" >March</option>
              <option value="April" >April</option>
              <option value="May" >May</option>
              <option value="June" >June</option>
              <option value="July" >July</option>
              <option value="August" >August</option>
              <option value="September" >September</option>
              <option value="October" >October</option>
              <option value="November" >November</option>
              <option value="December" >December</option>
              
            </select>
            <select name="year" class="input-small">
              <?php
              for ($i=1950; $i < 2001; $i++) { 
                  if($i == 1995){
                    print('<option value="'.$i.'" selected = "selected"  >'.$i.'</option> <br\>');
                    continue;
                  }
                  print('<option value="'.$i.'" >'.$i.'</option> <br\>');
              }
              ?>
            </select>
			</td>
		</tr>
		<tr>
			<td>Current city : </td>
			<td><input type="text" name="city" value="<?php if(isset($_SESSION['city'])){echo $_SESSION['city'];unset($_SESSION['city']);}?>" /></td>
		</tr>
		<tr>
			<td>Nationality : </td>
			<td><input type="text" name="nationality" value="<?php if(isset($_SESSION['nationality'])){echo $_SESSION['nationality'];unset($_SESSION['nationality']);}?>" /></td>
		</tr>
		<tr>
			<td>Gender<span style="color: red">*</span> : </td>
			<td>
			<select name="gender">
			  <option value="Male" selected="selected">Male</option>
			  <option value="Female">Female</option>
			  <option value="Other">Other</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Profile Photo : </td>
			<td><input name="image" accept="image/jpeg" type="file"></td>
		</tr>
		<tr>
			<td>Username<span style="color: red">*</span> : </td>
			<td><input type="text" name="uname" required="1" onkeyup="usernameCheckEveryTime(this.value)" value="<?php if(isset($_SESSION['uname'])){echo $_SESSION['uname'];unset($_SESSION['uname']);}?>" /></td>
            <td><span id="usernameCheck" style="white-space: pre;"></span></td>
		</tr>
		<tr>
			<td>Password<span style="color: red">*</span> : </td>
			<td><input type="password" name="pword" required="1" placeholder="Password" /></td>
            <td ><h5><?php if(isset($_SESSION['password_not_match'])){
                        echo "<span style='color:red;white-space: pre;'>   Password does'nt match!!!</span>";
                        unset($_SESSION['password_not_match']);}?></h5> </td>
		</tr>
		<tr>
			<td>Re-type Password<span style="color: red">*</span> : &nbsp &nbsp</td>
			<td><input type="password" name="rpword" required="1" placeholder="Re-type Password" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Create Account" name="submit" id="submitButton" class="btn btn-info " title="Click here to Create Account!" /></td>
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