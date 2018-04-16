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
    <title>Unit Converter</title>
    <script type="text/javascript">
        function CalcLength(val){
            var input = document.getElementById("fromLength").value;
            var from = document.getElementById("length_from_id").value;
            var to = document.getElementById("length_to_id").value;
              if (window.XMLHttpRequest){
              xmlhttp=new XMLHttpRequest();
              }
            else{
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function(){
              if (xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById("toLength").value = xmlhttp.responseText;
                }
              }
            xmlhttp.open("GET","unitconverter/length.php?a="+input+"&b="+from+"&c="+to,true);
            xmlhttp.send();
        }

        function CalcArea(val){
            var input = document.getElementById("fromArea").value;
            var from = document.getElementById("area_from_id").value;
            var to = document.getElementById("area_to_id").value;
              if (window.XMLHttpRequest){
              xmlhttp=new XMLHttpRequest();
              }
            else{
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function(){
              if (xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById("toArea").value = xmlhttp.responseText;
                }
              }
            xmlhttp.open("GET","unitconverter/area.php?a="+input+"&b="+from+"&c="+to,true);
            xmlhttp.send();
        }

        function CalcTemp(val){
            var input = document.getElementById("fromTemp").value;
            var from = document.getElementById("temp_from_id").value;
            var to = document.getElementById("temp_to_id").value;
              if (window.XMLHttpRequest){
              xmlhttp=new XMLHttpRequest();
              }
            else{
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function(){
              if (xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById("toTemp").value = xmlhttp.responseText;
                }
              }
            xmlhttp.open("GET","unitconverter/temp.php?a="+input+"&b="+from+"&c="+to,true);
            xmlhttp.send();
        }

        function CalcVol(val){
            var input = document.getElementById("fromVol").value;
            var from = document.getElementById("vol_from_id").value;
            var to = document.getElementById("vol_to_id").value;
              if (window.XMLHttpRequest){
              xmlhttp=new XMLHttpRequest();
              }
            else{
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function(){
              if (xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById("toVol").value = xmlhttp.responseText;
                }
              }
            xmlhttp.open("GET","unitconverter/volume.php?a="+input+"&b="+from+"&c="+to,true);
            xmlhttp.send();
        }

        function CalcWeight(val){
            var input = document.getElementById("fromWeight").value;
            var from = document.getElementById("weight_from_id").value;
            var to = document.getElementById("weight_to_id").value;
              if (window.XMLHttpRequest){
              xmlhttp=new XMLHttpRequest();
              }
            else{
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function(){
              if (xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById("toWeight").value = xmlhttp.responseText;
                }
              }
            xmlhttp.open("GET","unitconverter/weight.php?a="+input+"&b="+from+"&c="+to,true);
            xmlhttp.send();
        }
        
        function CalcCurrency(val){
            var input = document.getElementById("fromCur").value;
            var from = document.getElementById("cur_from_id").value;
            var to = document.getElementById("cur_to_id").value;
              if (window.XMLHttpRequest){
              xmlhttp=new XMLHttpRequest();
              }
            else{
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function(){
              if (xmlhttp.readyState==4 && xmlhttp.status==200){
                document.getElementById("toCur").value = xmlhttp.responseText;
                }
              }
            xmlhttp.open("GET","unitconverter/currency.php?a="+input+"&b="+from+"&c="+to,true);
            xmlhttp.send();
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
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Unit Converter</span>
            </div>

            <div class="row-fluid">
                <div class="span12" id="divMain">
               				
                    
            <h2>Unit Coverter :</h2>
            <hr>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#Length" data-toggle="tab">Length</a></li>
                <li><a href="#Area" data-toggle="tab">Area</a></li>
                <li><a href="#Temperature" data-toggle="tab">Temperature</a></li>
                <li><a href="#Volume" data-toggle="tab">Volume</a></li>
                <li><a href="#Weight" data-toggle="tab">Weight</a></li>
                <li><a href="#Currency" data-toggle="tab">Currency</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="Length">
                    <div class="alert alert-success" style="height: 300px;">
                    <br><br><br><br><br>
                    <table align="center">
                        <tr>
                            <td>
                                <select name="length_from" class="input-medium" id="length_from_id">
                                    <option value=1>Centimeter</option>
                                    <option value=2 selected="selected">Meter</option>
                                    <option value=3>Kilometer</option>
                                    <option value=4>Feet</option>
                                    <option value=5>Inch</option>
                                    <option value=6>Miles</option>
                                    <option value=7>Yards</option>
                                </select>
                            </td>
                            <td style="white-space: pre;">          >>>>          </td>
                            <td>
                                <select name="length_to" class="input-medium" id="length_to_id">
                                    <option value=1 selected="selected">Centimeter</option>
                                    <option value=2>Meter</option>
                                    <option value=3>Kilometer</option>
                                    <option value=4>Feet</option>
                                    <option value=5>Inch</option>
                                    <option value=6>Miles</option>
                                    <option value=7>Yards</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="from_length" id="fromLength" placeholder="From" class="input-medium" onkeyup="CalcLength(this.value)"></td>
                            <td style="white-space: pre;">                        </td>
                            <td><input type="text" name="to_length" id="toLength" placeholder="To" class="input-medium"></td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="Area">
                    <div class="alert alert-success" style="height: 300px;">
                    <br><br><br><br><br>
                    <table align="center">
                        <tr>
                            <td>
                                <select name="area_from" class="input-medium" id="area_from_id">
                                    <option value=1>cm square</option>
                                    <option value=2 selected="selected">m square</option>
                                    <option value=3>Acre</option>
                                    <option value=4>Feet square</option>
                                    <option value=5>Hectares</option>
                                    <option value=6>Miles square</option>
                                    <option value=7>Yards square</option>
                                    <option value=8>Ares</option>
                                </select>
                            </td>
                            <td style="white-space: pre;">          >>>>          </td>
                            <td>
                                <select name="area_to" class="input-medium" id="area_to_id">
                                    <option value=1 selected="selected">cm square</option>
                                    <option value=2>m square</option>
                                    <option value=3>Acre</option>
                                    <option value=4>Feet square</option>
                                    <option value=5>Hectares</option>
                                    <option value=6>Miles square</option>
                                    <option value=7>Yards square</option>
                                    <option value=8>Ares</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="from_area" id="fromArea" placeholder="From" class="input-medium" onkeyup="CalcArea(this.value)"></td>
                            <td style="white-space: pre;">                        </td>
                            <td><input type="text" name="to_length" id="toArea" placeholder="To" class="input-medium"></td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="Temperature">
                    <div class="alert alert-success" style="height: 300px;">
                    <br><br><br><br><br>
                    <table align="center">
                        <tr>
                            <td>
                                <select name="temp_from" class="input-medium" id="temp_from_id">
                                    <option value=1 selected="selected">Celcius</option>
                                    <option value=2>Fahrenheit</option>
                                    <option value=3>Kelvin</option>
                                </select>
                            </td>
                            <td style="white-space: pre;">          >>>>          </td>
                            <td>
                                <select name="temp_to" class="input-medium" id="temp_to_id">
                                    <option value=1>Celcius</option>
                                    <option value=2 selected="selected">Fahrenheit</option>
                                    <option value=3>Kelvin</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="from_temp" id="fromTemp" placeholder="From" class="input-medium" onkeyup="CalcTemp(this.value)"></td>
                            <td style="white-space: pre;">                        </td>
                            <td><input type="text" name="to_temp" id="toTemp" placeholder="To" class="input-medium"></td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="Volume">
                    <div class="alert alert-success" style="height: 300px;">
                    <br><br><br><br><br>
                    <table align="center">
                        <tr>
                            <td>
                                <select name="vol_from" class="input-medium" id="vol_from_id">
                                    <option value=1>cm cube</option>
                                    <option value=2 selected="selected">m cube</option>
                                    <option value=3>Feet cube</option>
                                    <option value=4>Gallons(UK)</option>
                                    <option value=5>Gallons(US)</option>
                                    <option value=6>Inches cube</option>
                                    <option value=7>Litres</option>
                                    <option value=8>Yards cube</option>
                                </select>
                            </td>
                            <td style="white-space: pre;">          >>>>          </td>
                            <td>
                                <select name="vol_to" class="input-medium" id="vol_to_id">
                                    <option value=1 selected="selected">cm cube</option>
                                    <option value=2>m cube</option>
                                    <option value=3>Feet cube</option>
                                    <option value=4>Gallons(UK)</option>
                                    <option value=5>Gallons(US)</option>
                                    <option value=6>Inches cube</option>
                                    <option value=7>Litres</option>
                                    <option value=8>Yards cube</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="from_vol" id="fromVol" placeholder="From" class="input-medium" onkeyup="CalcVol(this.value)"></td>
                            <td style="white-space: pre;">                        </td>
                            <td><input type="text" name="to_vol" id="toVol" placeholder="To" class="input-medium"></td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="Weight">
                    <div class="alert alert-success" style="height: 300px;">
                    <br><br><br><br><br>
                    <table align="center">
                        <tr>
                            <td>
                                <select name="weight_from" class="input-medium" id="weight_from_id">
                                    <option value=1>mg</option>
                                    <option value=2 selected="selected">g</option>
                                    <option value=3>kg</option>
                                    <option value=4>Tonne</option>
                                    <option value=5>Grains</option>
                                    <option value=6>Ounces</option>
                                    <option value=7>Ponds</option>
                                    <option value=8>Stones</option>
                                </select>
                            </td>
                            <td style="white-space: pre;">          >>>>          </td>
                            <td>
                                <select name="weight_to" class="input-medium" id="weight_to_id">
                                    <option value=1 selected="selected">mg</option>
                                    <option value=2>g</option>
                                    <option value=3>kg</option>
                                    <option value=4>Tonne</option>
                                    <option value=5>Grains</option>
                                    <option value=6>Ounces</option>
                                    <option value=7>Ponds</option>
                                    <option value=8>Stones</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="from_weight" id="fromWeight" placeholder="From" class="input-medium" onkeyup="CalcWeight(this.value)"></td>
                            <td style="white-space: pre;">                        </td>
                            <td><input type="text" name="to_weight" id="toWeight" placeholder="To" class="input-medium"></td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="Currency">
                    <div class="alert alert-success" style="height: 300px;">
                    <br><br><br><br><br>
                    <table align="center">
                        <tr>
                            <td>
                                <select name="cur_from" class="input-medium" id="currency_from_id">
                                    <option value=1>Indian Rupee(INR)</option>
                                    <option value=2 selected="selected">Euro(EUR)</option>
                                    <option value=3>Pound Sterling(GBP)</option>
                                    <option value=4>Japanese Yen(JPY)</option>
                                    <option value=5>US Dollar(USD)</option>
                                    <option value=6>Norwegian Krone(NOK)</option>
                                    <option value=7>Swedish Krona(SEK)</option>
                                    <option value=8>South Korean Won(KRW)</option>
                                </select>
                            </td>
                            <td style="white-space: pre;">          >>>>          </td>
                            <td>
                                <select name="cur_to" class="input-medium" id="currency_to_id">
                                    <option value=1>Indian Rupee(INR)</option>
                                    <option value=2>Euro(EUR)</option>
                                    <option value=3>Pound Sterling(GBP)</option>
                                    <option value=4 selected="selected">Japanese Yen(JPY)</option>
                                    <option value=5>US Dollar(USD)</option>
                                    <option value=6>Norwegian Krone(NOK)</option>
                                    <option value=7>Swedish Krona(SEK)</option>
                                    <option value=8>South Korean Won(KRW)</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="from_cur" id="fromCur" placeholder="From" class="input-medium" onkeyup="CalcCurrency(this.value)"></td>
                            <td style="white-space: pre;">                        </td>
                            <td><input type="text" name="to_cur" id="toCur" placeholder="To" class="input-medium"></td>
                        </tr>
                    </table>
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