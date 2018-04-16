<?php

$val=$_GET['a'];
$from=$_GET['b'];
$to=$_GET['c'];
function assign($from,$val,$to){
		switch ($from){
			case 1:
			$fromu="Celcius";$c=1;$f=(double)(($val*9/5)+32);$k=(double)($val+273);break;
			case 2:
			$fromu="Fahrenheit";$c=(($val-32)*5/9);$f=1;$k=(double)((($val-32)*5/9)+273);break;
			case 3:
			$fromu="Kelvin";$c=(double)($val-273);$f=(double)((($val-273)*9/5)+32);$k=1;break;
		}
		switch ($to){
			case 1:
				echo $c;
			break;
			case 2:
				echo $f;
			break;
			case 3:
				echo $k;
			break;
		}
}
assign($from,$val,$to);

?>
