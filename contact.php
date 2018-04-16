<?php
session_start();
if(isset($_COOKIE['id'])){
    $_SESSION['user'] = $_COOKIE['id'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
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
                                
                                <li class="dropdown active"><a href="contact.php">Contact</a></li>

                                <li class="dropdown">
                                    <?php 
                                    if (isset($_SESSION['user'])) {
                                        echo '<a href="user.php" class="dropdown-toggle">'.$_SESSION['user'].'</a>';
                                    }else{
                                        echo '<a href="login.php" class="dropdown-toggle">Login</a>';
                                        } ?>
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
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Contact Us</span>
            </div>
            
			
            <?php
                if (!isset($_GET['msg'])) {
                    $_GET['msg'] = ' ';
                }
            ?>
            <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Contact Us</h1>
                   	<h3 style="color:#FF6633;"><?php echo $_GET['msg'];?></h3>
					<hr>
					                                                
<form name="enq" method="post" action="email/" onsubmit="return validation();">
  <fieldset>
    
	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
    <div class="actions">
	<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	
	</fieldset>
</form>  				 
														 
                </div>
				
				
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Contact Information</h3>
                    <p>
                        <address><strong>MD.Rezaul Karim</strong><br />
                        8/5,West Tootpara,4<sup>th</sup> lane,<br />
                        Khulna, Bangladesh, Zip - 9100<br />
                        <abbr title="Phone">P:</abbr> +88 01521-453995</address> 
                        <address>  <strong>Email</strong><br />
                        <a href="mailto:#">rksazid@gmail.com</a></address>  
                    </p>     
                     
					 
        <h4 class="sidebox-title">Sidebar Categories</h4>
        <ul>
          <li><a href="#">Quisque diam lorem sectetuer adipiscing</a></li>
          <li><a href="#">Interdum vitae, adipiscing dapibus ac</a></li>
          <li><a href="#">Scelerisque ipsum auctor vitae, pede</a></li>
          <li><a href="#">Donec eget iaculis lacinia non erat</a></li>
          <li><a href="#">Lacinia dictum elementum velit fermentum</a></li>
          <li><a href="#">Donec in velit vel ipsum auctor pulvinar</a></li>
        </ul>
					
                    					
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