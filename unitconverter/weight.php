<?php

$val=$_GET['a'];
$from=$_GET['b'];
$to=$_GET['c'];
function assign($from,$val,$to){
		switch ($from){
			case 1:
			$fromu="mg";$mg=1;$g=0.001;$kg=0.000001;$to=0.000000001;$gr=0.015432358;$ou=0.000035273966;$po=0.000002204623;$st=0.000000157473;break;
			case 2:
			$fromu="g";$mg=1000;$g=1;$kg=0.001;$to=0.000001;$gr=15.432358;$ou=0.035273966;$po=0.002204623;$st=0.000157473;break;
			case 3:
			$fromu="kg";$mg=1000000;$g=1000;$kg=1;$to=0.001;$gr=15432.358;$ou=35.273966;$po=2.204623;$st=0.157473;break;
			case 4:
			$fromu="Tonne";$mg=1000000000;$g=1000000;$kg=1000;$to=1;$gr=15.432358;$ou=0.035273966;$po=0.002204623;$st=0.000157473;break;
			case 5:
			$fromu="Grains";$mg=64.891;$g=0.064891;$kg=0.000064891;$to=0.000000064891;$gr=1;$ou=0.002285714;$po=0.000142857;$st=0.0000102041;break;
			case 6:
			$fromu="Ounces";$mg=28349.52;$g=28.34952;$kg=0.02834952;$to=0.00002834952;$gr=437.5;$ou=1;$po=0.0625;$st=0.004464286;break;
			case 7:
			$fromu="Pounds";$mg=453592.37;$g=453.59237;$kg=0.45359237;$to=0.00045359237;$gr=7000;$ou=16;$po=1;$st=0.071428571;break;
			case 8:
			$fromu="Stones";$mg=6350293.18;$g=6350.29318;$kg=6.35029318;$to=0.00635029318;$gr=98000;$ou=224;$po=14;$st=1;break;
		}
		switch ($to){
			case 1:
				echo (double)($val*$mg);
			break;
			case 2:
				echo (double)($val*$g);
			break;
			case 3:
				echo (double)($val*$kg);
			break;
			case 4:
				echo (double)($val*$to);
			break;
			case 5:
				echo (double)($val*$gr);
			break;
			case 6:
				echo (double)($val*$ou);
			break;
			case 7:
				echo (double)($val*$po);
			break;
			case 8:
				echo (double)($val*$st);
			break;
		}
}
assign($from,$val,$to);

?>
