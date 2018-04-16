<?php

$val=$_GET['a'];
$from=$_GET['b'];
$to=$_GET['c'];
function assign($from,$val,$to){
		switch ($from){
			case 1:
			$fromu="cm<sup>2</sup>";$cm=1;$me=0.0001;$ac=0.000000024711;$ft=0.0010764;$he=0.00000001;$mi=0.000000000039;$ya=0.0001196;$ar=0.000001;break;
			case 2:
			$fromu="m<sup>2</sup>";$cm=10000;$me=1;$ac=0.00024711;$ft=10.764;$he=0.0001;$mi=0.00000039;$ya=1.196;$ar=0.01;break;
			case 3:
			$fromu="Acres";$cm=40468730;$me=4046.873;$ac=1;$ft=43560;$he=0.4046873;$mi=0.0015625;$ya=4840;$ar=40.46873;break;
			case 4:
			$fromu="Feet<sup>2</sup>";$cm=929.0304;$me=0.09290304;$ac=0.000022956806;$ft=1;$he=0.000009290304;$mi=0.00000003587;$ya=0.11111;$ar=0.00092903404;break;
			case 5:
			$fromu="Hectare";$cm=100000000;$me=10000;$ac=2.471054;$ft=107639.11;$he=1;$mi=0.0038610217;$ya=11959.9;$ar=100;break;
			case 6:
			$fromu="Miles<sup>2</sup>";$cm=2589988000;$me=2589988;$ac=640;$ft=27878400;$he=258.9988;$mi=1;$ya=3097600;$ar=25899.88;break;
			case 7:
			$fromu="Yards<sup>2</sup>";$cm=8361.2736;$me=0.83612736;$ac=0.000206611251;$ft=9;$he=0.000083612736;$mi=0.000000322831;$ya=1;$ar=0.0083612736;break;
			case 8:
			$fromu="Ares";$cm=1000000;$me=100;$ac=0.02471;$ft=1076.4;$he=0.01;$mi=0.000039;$ya=119.6;$ar=1;break;
		}
		switch ($to){
			case 1:
				echo (double)($val*$cm);
			break;
			case 2:
				echo (double)($val*$me);
			break;
			case 3:
				echo (double)($val*$ac);
			break;
			case 4:
				echo (double)($val*$ft);
			break;
			case 5:
				echo (double)($val*$he);
			break;
			case 6:
				echo (double)($val*$mi);
			break;
			case 7:
				echo (double)($val*$ya);
			break;
			case 8:
				echo (double)($val*$ar);
			break;
		}
}
assign($from,$val,$to);

?>