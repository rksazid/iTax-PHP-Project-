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
    <title>About Us</title>
    <?php
        include 'header.php';
    ?>     
            <div class="row-fluid">
                <div class="span12">				
                    <div class="centered_menu">                      
                    <!--Edit Navigation Menu here-->
					<div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown">
                                    <a href="home.php" class="dropdown-toggle">Home </a>
                                </li>                               
                                <li class="dropdown active">
                                    <a href="iTax.php" class="dropdown-toggle">iTax Calculator </a>
                                </li>
                                <li class="dropdown"><a href="unitconverter.php">Unit Converter</a></li>
                                
                                <li class="dropdown"><a href="contact.php">Contact</a></li>

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
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>About Us</span>
            </div>

        <div class="row-fluid">		        
            <div class="span8" id="divMain">
            <!--Edit Main Content Area here-->        
                    <h1>About Us</h1>				
                                             
					<p>Content on this page is for presentation purposes only. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>		
                    <img src="images/turbines.jpg" class="img-polaroid" style="margin:12px 0px;">                                                       
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum est at luctus tincidunt. Fusce pretium quam vel velit fringilla fringilla. Fusce sollicitudin, ligula vel tempus congue, ligula nisi facilisis lacus, et adipiscing justo arcu nec justo.  </p>
					<p>Proin ipsum nulla, cursus vitae mollis iaculis, malesuada a dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla eu augue eu mauris sodales viverra at sed libero. Vivamus rhoncus volutpat hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<p>Quisque eu aliquam felis. Nam elementum dui eget fringilla vulputate. Suspendisse augue turpis, eleifend ac diam id, condimentum fermentum elit. Nunc laoreet turpis a risus luctus imperdiet. Suspendisse metus tellus, sodales nec elementum eu, facilisis at ante. Sed pharetra cursus metus, eget tempor dui. Nulla facilisi. Quisque congue justo odio, vitae fringilla sem sollicitudin sed.</p>
					<p>Maecenas dapibus mauris et lectus iaculis tristique quis in metus. Praesent vitae neque vel lectus mattis hendrerit. Curabitur aliquam, sapien eget scelerisque tincidunt, velit ante dapibus eros, eu consectetur magna libero sed eros. Quisque nibh purus, posuere vitae lacus a, placerat vulputate nisl. Aliquam semper vel risus sed venenatis. Morbi consectetur viverra aliquet. Suspendisse vitae justo nulla.</p>

            </div>
		<!--Edit Sidebar Content Area here-->
        <div class="span4 sidebar">

                <div class="sidebox">
                    <h3 class="sidebox-title">Sample Sidebar Content</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and <a href="#">typesetting industry</a>.  Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
		</br>				
		    
		<ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Products</a></li>
                <li><a href="#profile" data-toggle="tab">History</a></li>
                <li><a href="#settings" data-toggle="tab">Clients</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
            
        <!--Edit Tab 1 Content here-->			
		<div class="row-fluid">		
		        <div class="span4">                           
                    <img src="images/placeholder.gif" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span8">            
                    <p>Aliquam ut ullamcorper lacus, eu posuere neque. Duis a euismod mi, ac tincidunt metus. Nunc egestas elit eget. <a href="#">Read More</a> </p>
                </div>		 
        </div>
		</br>

        <div class="row-fluid">		
		        <div class="span4">                           
                    <img src="images/placeholder.gif" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span8">            
                    <p>Aliquam ut ullamcorper lacus, eu posuere neque. Duis a euismod mi, ac tincidunt metus. Nunc egestas elit eget. <a href="#">Read More</a> </p>
                </div>		 
        </div>
		</br>

        <div class="row-fluid">		
		        <div class="span4">                           
                    <img src="images/placeholder.gif" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span8">            
                    <p>Aliquam ut ullamcorper lacus, eu posuere neque. Duis a euismod mi, ac tincidunt metus. Nunc egestas elit eget. <a href="#">Read More</a> </p>
                </div>		 
        </div>
		</br>

        <div class="row-fluid">		
		        <div class="span4">                           
                    <img src="images/placeholder.gif" class="img-polaroid" style="margin:5px 0px 15px;" alt="">   </div>          
                <div class="span8">            
                    <p>Aliquam ut ullamcorper lacus, eu posuere neque. Duis a euismod mi, ac tincidunt metus. Nunc egestas elit eget. <a href="#">Read More</a> </p>
                </div>		 
        </div>
                </div>
			
			<!--Edit Tab 2 Content here-->
                <div class="tab-pane fade" id="profile">
                    <img src="images/speed.jpg" class="img-polaroid pull-left" style="margin:0px 15px 0px 0px;" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p>Nulla condimentum lacus in dapibus fermentum. Maecenas convallis pretium felis, vitae tempor lorem scelerisque nec. Sed aliquam iaculis tellus, ac suscipit nisl malesuada sed. Maecenas sit amet risus tellus. Nam convallis non dui vel tincidunt. Aliquam vestibulum laoreet orci non rutrum. Nam consectetur commodo ligula nec rhoncus.</p>
				</div>
				
			<!--Edit Tab 3 Content here-->	
                <div class="tab-pane fade" id="settings">
				    <img src="images/business-team.jpg" class="img-polaroid" alt="">  
					<h4>Lorem Ipsum</h4>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla eu fringilla metus. Pellentesque ac gravida augue, consequat congue nisl. Integer aliquet scelerisque metus, id molestie quam vehicula in.</p>

					<p>Nam facilisis urna mi, eu rhoncus nisl iaculis quis. Suspendisse vehicula vitae sem vitae euismod. Phasellus at accumsan turpis. Maecenas sed velit rutrum, facilisis quam vitae, fermentum erat. Duis in consectetur erat, non molestie enim.</p>
									
                    <p>Sed vitae ante dolor. Ut egestas magna sit amet scelerisque ultrices. Pellentesque congue erat sed leo eleifend venenatis. Quisque bibendum et erat nec tempus.</p>
				</div>
            </div>
        
		</br>
	
                </div>
                    
        </div>
			<!--End Sidebar Area here-->
        </div>
			<!--End Main Content Area here-->

            <!--Edit Footer here-->
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