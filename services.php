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
    <title>Our Services</title>
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
                                <li class="dropdown">
                                    <a href="about.php" class="dropdown-toggle">About <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="about-alt.html" class="dropdown-toggle">About 2</a>                                            
                                        </li>                                        
                                    </ul>
                                </li>
                                <li class="dropdown active"><a href="unitconverter.php">Unit Converter</a></li>
                                
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
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Services</span>
            </div>

            <div class="row-fluid">
                <div class="span12" id="divMain">
                <!--Edit Main Content Area here-->				
                                          
                    <h3>We provide the best services</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                                 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, 
                    consectetur sit amet vulputate vel, dapibus sit amet lectus. 
                    Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. </p> 
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. 
					Aenean dignissim pellentesque felis.</p>
				
				   <hr>
                
            <div class="row-fluid">
                <div class="span6" >				
                                          
                <div class="media">
                    <a class="pull-left">
                        <img src="icons/ballicons/man.png" class="img-rounded" />
                    </a>
                    <div class="media-body">
                    <h4 class="media-heading">Cras pulvinar</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</br></br>
					<a class="btn btn-secondary pull-right" href="#">Read More</a>
                    </div>
                </div>
                               
                    <hr>
                </div>

				<div class="span6" >				
                                          
                <div class="media">
                    <a class="pull-left">
                        <img src="icons/ballicons/clock.png" class="img-rounded" />
                    </a>
                    <div class="media-body">
                    <h4 class="media-heading">Duis nec est</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</br></br>
					<a class="btn btn-secondary pull-right" href="#">Read More</a>
                    </div>
                </div>
                               
                    <hr>
                </div>
                          
            </div>
			
			<div class="row-fluid">
                <div class="span6" >				
                                          
                <div class="media">
                    <a class="pull-left">
                        <img src="icons/ballicons/target.png" class="img-rounded" />
                    </a>
                    <div class="media-body">
                    <h4 class="media-heading">Etiam ac elit</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</br></br>
					<a class="btn btn-secondary pull-right" href="#">Read More</a>
                    </div>
                </div>
                               
                    <hr>
                </div>

				<div class="span6" >				
                                          
                <div class="media">
                    <a class="pull-left">
                        <img src="icons/ballicons/graph.png" class="img-rounded" />
                    </a>
                    <div class="media-body">
                    <h4 class="media-heading">Morbi blandit</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</br></br>
					<a class="btn btn-secondary pull-right" href="#">Read More</a>
                    </div>
                </div>
                               
                    <hr>
                </div>
                          
            </div>
			
			<div class="row-fluid">
                <div class="span6" >				
                                          
                <div class="media">
                    <a class="pull-left">
                        <img src="icons/ballicons/imac.png" class="img-rounded" />
                    </a>
                    <div class="media-body">
                    <h4 class="media-heading">Cras posuere</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</br></br>
					<a class="btn btn-secondary pull-right" href="#">Read More</a>
                    </div>
                </div>
                               
                    <hr>
                </div>

				<div class="span6" >				
                                          
                <div class="media">
                    <a class="pull-left">
                        <img src="icons/ballicons/bubbles.png" class="img-rounded" />
                    </a>
                    <div class="media-body">
                    <h4 class="media-heading">Vivamus cursus</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</br></br>
					<a class="btn btn-secondary pull-right" href="#">Read More</a>
                    </div>
                </div>
                               
                    <hr>
                </div>
                          
            </div>
			
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				
                </div>             
            </div>                 					
                         
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