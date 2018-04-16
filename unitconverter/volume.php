<?php

$val=$_GET['a'];
$from=$_GET['b'];
$to=$_GET['c'];
function assign($from,$val,$to){
		switch ($from){
			case 1:
			$fromu="cm<sup>3</sup>";$cm=1;$me=0.000001;$ft=0.00003532;$gk=0.00022;$gs=0.000264;$in=0.061024;$li=0.001;$ya=0.000001308;break;
			case 2:
			$fromu="m<sup>3</sup>";$cm=1000000;$me=1;$ft=35.32;$gk=220;$gs=264;$in=61024;$li=1000;$ya=1.308;break;
			case 3:
			$fromu="Feet<sup>3</sup>";$cm=28317;$me=0.028317;$ft=1;$gk=6.228835;$gs=7.48052;$in=28.317;$li=28.317;$ya=0.037037;break;
			case 4:
			$fromu="Gallons(UK)";$cm=4546;$me=0.004546;$ft=0.160544;$gk=1;$gs=1.20095;$in=277.4194;$li=4.546;$ya=0.005946;break;
			case 5:
			$fromu="Gallons(US)";$cm=3785;$me=0.003785;$ft=0.133681;$gk=0.832674;$gs=1;$in=231;$li=3.785;$ya=0.004951;break;
			case 6:
			$fromu="Inches<sup>3</sup>";$cm=16;$me=0.000016;$ft=0.000579;$gk=0.003605;$gs=0.004329;$in=1;$li=0.016;$ya=0.000021;break;
			case 7:
			$fromu="Litres<sup>3</sup>";$cm=1000;$me=0.001;$ft=0.03532;$gk=0.22;$gs=0.264;$in=61.024;$li=1;$ya=0.001308;break;
			case 8:
			$fromu="Yards";$cm=764555;$me=0.764555;$ft=27;$gk=168.178557;$gs=201.974026;$in=46656;$li=764.555;$ya=1;break;
		}
		switch ($to){
			case 1:
				echo (double)($val*$cm);
			break;
			case 2:
				echo (double)($val*$me);
			break;
			case 3:
				echo (double)($val*$ft);
			break;
			case 4:
				echo (double)($val*$gk);
			break;
			case 5:
				echo (double)($val*$gs);
			break;
			case 6:
				echo (double)($val*$in);
			break;
			case 7:
				echo (double)($val*$li);
			break;
			case 8:
				echo (double)($val*$ya);
			break;
		}
}
assign($from,$val,$to);

?>