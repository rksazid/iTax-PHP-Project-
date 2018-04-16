<?php
session_start();
if(isset($_COOKIE['id'])){
	$_SESSION['user'] = $_COOKIE['id'];
}
$con = mysql_connect("localhost","root","");
    mysql_select_db("my_db",$con);
    if(!isset($_COOKIE['id']) && isset($_COOKIE['security']) && !isset($_SESSION['user'])){
    	$uname = $_COOKIE['security'];
    	$sql = "UPDATE USER_STATUS SET Status = 'offline',dateposted = CURRENT_TIMESTAMP WHERE Username ='$uname'";
	    mysql_query($sql,$con);
	    if(isset($_COOKIE['security']))
	    	setcookie('security','',time()- 86400);
    }
    $sql = "SELECT COUNT(*) as total FROM USER_STATUS WHERE Status = 'Active'";
    $result = mysql_query($sql,$con);
    $row = mysql_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>iTax & All types of Converter 4 u - Welcome</title>
    
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
                                <li class="dropdown active">
                                    <a href="home.php" class="dropdown-toggle">Home </a>
                                </li>								
								<li class="dropdown">
                                    <a href="iTax.php" class="dropdown-toggle">iTax Calculator </a>
                                </li>
								<li class="dropdown"><a href="unitconverter.php">Unit Converter</a></li>
                                
                                <li><a href="contact.php">Contact</a></li>

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

                <div id="headerSeparator"></div>
                
                <div class="camera_full_width">
                    <div id="camera_wrap" class="shadow">
                        <div data-src="slider-images/desert.jpg" >
						<div class="camera_caption fadeFromBottom cap1">Calculate Income Tax & Many Other thing in a single website!!</div>
						</div>
						<div data-src="slider-images/dancer.jpeg" >						
						</div>
						<div data-src="slider-images/currency.jpg" >						
						</div>
						<div data-src="slider-images/bannerunit.jpg" >						
						</div>
						<div data-src="slider-images/sunset.png" >						
						</div>
                    </div>
                    <br style="clear:both"/><div style="margin-bottom:40px"></div>
                </div>
				

                <div id="divHeaderText" class="page-content">
                    <div id="divHeaderLine1">Welcome to Calculation world!!<img src="images\smiley1.jpeg" style="height: 60px;width: 60px;"></div>
					</br>
                    <div id="divHeaderLine2">Here you can find Income tax Calculator & Unit Converter.</div><br />                    
                </div>
				<hr>

                <div id="headerSeparator2"></div>						
				
            </div>
        </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content"> 
         
            <div class="row-fluid">
                <div class="span12" id="divMain">
                
                    <div class="row-fluid">
    <div class="span4">
			<div class="box">
				<i class="general foundicon-website icon"></i>
				<h4 class="title">Income Tax</h4> 
				<p>
					<b>An income tax is a tax imposed on individuals or entities (taxpayers) that varies with the income or profits (taxable income) of the taxpayer</b>. Details vary widely by jurisdiction. Many jurisdictions refer to income tax on business entities as companies tax or corporate tax.Tax may be imposed by both a country and subdivisions.
				</p>
			</div>
	</div> 
		
	<div class="span4">
			<div class="box">
				<i class="general foundicon-checkmark icon"></i>
				<h4 class="title">Number of User Online :</h4> 
				<div class="alert alert-success">                           
                   <h1><strong><?php echo $row['total']; ?></strong></h1>
                </div>
			</div>
	</div> 
		
	<div class="span4">
			<div class="box">
				<i class="general foundicon-monitor icon"></i>
				<h4 class="title">Conversion of Unit</h4> 
				<p>
					Conversion of units is the conversion between different units of measurement for the same quantity, typically through multiplicative conversion factors.The process of conversion depends on the specific situation and the intended purpose. This may be governed by regulation, contract, technical specifications or other published standards.
				</p>
			</div>
	</div> 
	</div>
            </div>
            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <?php include'footer.php';  ?>

</div>
<br /><br /><br />

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

<script src="scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'simpleFade, mosaicSpiralReverse', time: 2000, loader: 'none', playPause: false, navigation: true, height: '38%', pagination: true });}$(function(){startCamera()});</script>

<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>

</body>
</html>