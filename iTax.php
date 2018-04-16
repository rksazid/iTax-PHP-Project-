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
    <title>iTax Calculator</title>
    <script type="text/javascript">
        function totalIncome(){
            var a = document.getElementById("salary_").value;
            var b = document.getElementById("h_property_").value;
            var c = document.getElementById("agricultural_income_").value;
            var d = document.getElementById("income_from_other_source_").value;
            document.getElementById("total_income_").value = +a + +b + +c + +d;
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
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>iTax Calculator</span>
            </div>

        <div class="row-fluid">		        
            <div class="span8" id="divMain">
                  
                    <h1>Income Tax Calculator For Bangladesh</h1>
                    <hr>				
                                             
				<div class="alert alert-info" align="center">                          
                   <h5><strong>Only for salaried person</strong> </h5>
                </div>
                <div class="alert alert-block" style="color: black;">                          
                    <h5 ><b>Assenssee information :</b></h5>              
                     <table align="center">
                     <hr>
                         <tr>
                             <td>Gender :
                                
                             </td>
                             <td>
                                  <label class="radio">
                                     <input type="radio" name="gender" id="optionsRadios1" value="Male" checked>Male
                                 </label>
                                 <label class="radio">
                                     <input type="radio" name="gender" id="optionsRadios2" value="Female">Female
                                 </label>
                             </td>
                         </tr>
                         <tr>
                        <td style="white-space: pre;">Birthday :                 </td>
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
                             <td>
                                 <label class="checkbox inline">
                                        <input type="checkbox" name="person_with_disability">Person with disability
                                 </label>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <label class="checkbox inline">
                                        <input type="checkbox" name="parent_of_disability_person">Parent or legal gurdian of disability person
                                 </label>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <label class="checkbox inline">
                                        <input type="checkbox" name="freedom_fighter">Gazetted war-wounded freedom fighter
                                 </label>
                             </td>
                         </tr>
                     </table>           
                </div>
                <div class="alert alert-block" style="color: black;">                          
                      <table align="center" >
                          <tr>
                              <td style="white-space: pre;">      Select Location :                            </td>
                              <td>
                                  <select name="location" class="input-xlarge" >
                                  <option value="Dhaka_or_Chittagong_city_corporation" >Dhaka or Chittagong city corporation</option>
                                  <option value="Other_city_corporation" >Other city corporation</option>
                                  <option value="area_other_than_city_corporation" >Area other than city corporation</option>
                                  </select>
                              </td>
                          </tr>
                          <tr>
                              <td style="white-space: pre;">      Amount of Net Assets :                         </td>
                              <td>
                                  <select name="location" class="input-xlarge" >
                                  <option value="up_two_crore_twentyfive_lakh" >Upto 2 Crore 25 lakh</option>
                                  <option value="up_two_crore_twentyfive_lakh_to_five_crore" >More than 2 Crore 25 lakh to 5 crore</option>
                                  <option value="more_than_five_crore_to_ten_crore" >More than 5 crore to 10 crore</option>
                                  <option value="more_than_ten_crore_to_fifteen_crore" >More than 10 crore to 15 crore</option>
                                  <option value="more_than_fifteen_crore_to_twenty_crore" >More than 15 crore to 20 crore</option>
                                  <option value="more_than_twenty_crore" >Any amount more than 20 crore</option>
                                  </select>
                              </td>
                          </tr>
                      </table>        
                </div>
                <div class="alert alert-block" style="color: black;">                          
                     <h5 ><b>Heads of Income :</b></h5>
                     <table>
                     <hr>
                         <tr>
                             <td style="white-space: pre;">                     Salary Income                    :       </td>
                             <td>
                                 <input type="text" name="salary_income" required="1" placeholder="Amount" id="salary_">
                             </td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     House Property Income     :       </td>
                             <td>
                                 <input type="text" name="house_property_income" required="1" placeholder="Amount" id="h_property_">
                             </td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     Agricultural Income            :</td>
                             <td>
                                 <input type="text" name="agricultural_income" required="1" placeholder="Amount" id="agricultural_income_">
                             </td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     Income from other source  :       </td>
                             <td>
                                 <input type="text" name="income_from_other_source" required="1" placeholder="Amount" id="income_from_other_source_">
                             </td>
                         </tr>

                     </table>
                     <hr>
                     <table>
                         <tr>
                             <td style="white-space: pre;">                     <button class="btn btn-info" onclick="totalIncome()">TOTAL</button></td>
                             <td style="white-space: pre;">       <input type="text" name="total_income" value="" placeholder="0.0" id="total_income_"></td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     Tax leviable on total income:</td>
                             <td style="white-space: pre;">       <input type="text" name="tax_leviable" value="" placeholder="0.0"></td>
                         </tr>
                     </table>
                </div>
                <div class="alert alert-block" style="color: black;">                          
                     <h5 ><b>Rebate :</b></h5>
                     <table>
                     <hr>
                         <tr>
                             <td style="white-space: pre;">                     Total Allowable Investment :       </td>
                             <td>
                                 <input type="text" name="total_allowable_investment" required="1" placeholder="Amount">
                             </td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     <a class="btn btn-info" href="#">REBATE</a></td>
                             <td style="white-space: pre;"><input type="text" name="rebate" value="" placeholder="0.0"></td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     Tax payable            :</td>
                             <td style="white-space: pre;"><input type="text" name="tax_payable" required="1" placeholder="0.0"></td>
                         </tr>
                    </table>
                     <hr>
                     <table>
                         <tr>
                             <td style="white-space: pre;">                     Surcharge               :       </td>
                             <td style="white-space: pre;">            <input type="text" name="surcharge" value="" placeholder="0.0"></td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     Total tax payable 
                    (include surcharge)  :      </td>
                             <td style="white-space: pre;">            <input type="text" name="tax_payable_including_surcharge" value="" placeholder="0.0"></td>
                         </tr>
                     </table>
                </div>
                <div class="alert alert-block" style="color: black;">                          
                     <h5 ><b>Tax Payments :</b></h5>
                     <table>
                     <hr>
                         <tr>
                             <td style="white-space: pre;">                    Tax Deducted at Source :</td>
                             <td>
                                 <input type="text" name="tax_deducted_from_the_source" required="1" placeholder="Amount">
                             </td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     Advance Tax Paid :            </td>
                             <td>
                                 <input type="text" name="advance_tax_paid" required="1" placeholder="Amount">
                             </td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     Tax Adjustment with Refund :    </td>
                             <td>
                                 <input type="text" name="tax_adjustment" required="1" placeholder="Amount">
                             </td>
                         </tr>
                     </table>
                     <hr>
                     <table>
                         <tr>
                             <td style="white-space: pre;">                     <a class="btn btn-info" o>TOTAL</td>
                             <td style="white-space: pre;">                        <input type="text" name="total_payments" value="" placeholder="0.0"></td>
                         </tr>
                         <tr>
                             <td style="white-space: pre;">                     Net tax payable :</td>
                             <td style="white-space: pre;">                        <input type="text" name="net_tax_payable" value="" placeholder="0.0"></td>
                         </tr>
                     </table>
                     <hr>
                     <span style="white-space: pre;">                                                                         <a class="btn btn-info" href="" onclick="" >CALCULATE</a></span>
                </div>
            </div>
		<!--Edit Sidebar Content Area here-->
        <div class="span4 sidebar">

                <div class="sidebox">
                    <h3 class="sidebox-title">Information About Income Tax :</h3>
					<p>An income tax is a tax imposed on individuals or entities (taxpayers) that varies with the income or profits (taxable income) of the taxpayer. Details vary widely by jurisdiction. Many jurisdictions refer to income tax on business entities as companies tax or corporate tax. Partnerships generally are not taxed; rather, the partners are taxed on their share of partnership items. Tax may be imposed by both a country and subdivisions. Most jurisdictions exempt locally organized charitable organizations from tax.</p>
		</br>				
		    
		<ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Products</a></li>
                <li><a href="#profile" data-toggle="tab">History</a></li>
                <li><a href="#settings" data-toggle="tab">Clients</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
            
        <!--			
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
        </div> -->
                </div>
			
			
                <div class="tab-pane fade" id="profile">
                    The concept of taxing income is a modern innovation and presupposes several things: a money economy, reasonably accurate accounts, a common understanding of receipts, expenses and profits, and an orderly society with reliable records.

                    For most of the history of civilization, these preconditions did not exist, and taxes were based on other factors. Taxes on wealth, social position, and ownership of the means of production (typically land and slaves) were all common. Practices such as tithing, or an offering of first fruits, existed from ancient times, and can be regarded as a precursor of the income tax, but they lacked precision and certainly were not based on a concept of net increase.
				</div>
				
			<!--	
                <div class="tab-pane fade" id="settings">
				    <img src="images/business-team.jpg" class="img-polaroid" alt="">  
					<h4>Lorem Ipsum</h4>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla eu fringilla metus. Pellentesque ac gravida augue, consequat congue nisl. Integer aliquet scelerisque metus, id molestie quam vehicula in.</p>

					<p>Nam facilisis urna mi, eu rhoncus nisl iaculis quis. Suspendisse vehicula vitae sem vitae euismod. Phasellus at accumsan turpis. Maecenas sed velit rutrum, facilisis quam vitae, fermentum erat. Duis in consectetur erat, non molestie enim.</p>
									
                    <p>Sed vitae ante dolor. Ut egestas magna sit amet scelerisque ultrices. Pellentesque congue erat sed leo eleifend venenatis. Quisque bibendum et erat nec tempus.</p>
				</div>  
            </div> 
        
		</br>
	
                </div> -->
                    
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