<?php

$val=$_GET['a'];
$from=$_GET['b'];
$to=$_GET['c'];
function assign($from,$val,$to){
		switch ($from){
			case 1:
			$fromu="INR";$inr=1;$eur=0.0171;$gbp=0.012;$jpy=2.3447;$usd=0.0222;$nok=0.1386;$sek=0.1533;$krw=24.0288;break;
			case 2:
			$fromu="EUR";$inr=58.479532;$eur=1;$gbp=0.689106;$jpy=135.9915;$usd=1.270297;$nok=8.069166;$sek=9.124832;$krw=1200.91;break;
			case 3:
			$fromu="GBP";$inr=84.862924;$eur=1.451156;$gbp=1;$jpy=197.344821;$usd=1.843399;$nok=11.709615;$sek=13.241551;$krw=1742.707752;break;
			case 4:
			$fromu="JPY";$inr=0.43;$eur=0.007353;$gbp=0.005067;$jpy=1;$usd=0.009341;$nok=0.059336;$sek=0.067099;$krw=8.830291;break;
			case 5:
			$fromu="USD";$inr=46.036082;$eur=0.787217;$gbp=0.542476;$jpy=107.054886;$usd=1;$nok=6.352189;$sek=7.183227;$krw=945.376767;break;
			case 6:
			$fromu="NOK";$inr=7.24731;$eur=0.123929;$gbp=0.0854;$jpy=16.853229;$usd=0.157426;$nok=1;$sek=1.130827;$krw=148.827575;break;
			case 7:
			$fromu="SEK";$inr=6.40883;$eur=0.109591;$gbp=0.07552;$jpy=14.903452;$usd=0.139213;$nok=0.884308;$sek=1;$krw=131.608928;break;
			case 8:
			$fromu="KRW";$inr=0.048655;$eur=0.000832;$gbp=0.000573;$jpy=0.114069;$usd=0.000959;$nok=0.006714;$sek=0.007592;$krw=1;break;
		}
		switch ($to){
			case 1:
				echo (double)($val*$inr);
			break;
			case 2:
				echo (double)($val*$eur);
			break;
			case 3:
				echo (double)($val*$gbp);
			break;
			case 4:
				echo (double)($val*$jpy);
			break;
			case 5:
				echo (double)($val*$usd);
			break;
			case 6:
				echo (double)($val*$nok);
			break;
			case 7:
				echo (double)($val*$sek);
			break;
			case 8:
				echo (double)($val*$krw);
			break;
		}
}
assign($from,$val,$to);

?>