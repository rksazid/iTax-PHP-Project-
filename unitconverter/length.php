<?php

$val=$_GET['a'];
$from=$_GET['b'];
$to=$_GET['c'];
function assign($from,$val,$to){
		switch ($from){
			case 1:
			$cm=1;$me=0.01;$km=0.00001;$ft=0.3280839;$in=0.39370078;$mi=0.000006213;$ya=0.010936132;break;
			case 2:
			$cm=100;$me=1;$km=0.001;$ft=3.280839;$in=39.370078;$mi=0.00062137;$ya=1.0936132;break;
			case 3:
			$cm=100000;$me=1000;$km=1;$ft=3280.839;$in=39370.078;$mi=0.6213;$ya=1093.6132;break;
			case 4:
			$cm=30.48;$me=0.3048;$km=0.0003048;$ft=1;$in=12.0;$mi=0.00018939;$ya=0.33333;break;
			case 5:
			$cm=2.54;$me=0.0254;$km=0.0000254;$ft=0.083333;$in=1;$mi=0.0000157828;$ya=0.027778;break;
			case 6:
			$cm=160934.4;$me=1609.344;$km=1.609344;$ft=5280;$in=63360;$mi=1;$ya=1760;break;
			case 7:
			$cm=91.44;$me=0.9144;$km=0.0009144;$ft=3;$in=36;$mi=0.000568181;$ya=1;break;
		}
		switch ($to){
			case 1:
				echo (double)($val*$cm);
			break;
			case 2:
				echo (double)($val*$me);
			break;
			case 3:
				echo (double)($val*$km);
			break;
			case 4:
				echo (double)($val*$in);
			break;
			case 5:
				echo (double)($val*$ft);
			break;
			case 6:
				echo (double)($val*$mi);
			break;
			case 7:
				echo (double)($val*$ya);
			break;
		}
}
assign($from,$val,$to);

?>
