<?php

$u1Chance = (rand ( 90 , 110 ))/100;
$u2Chance = (rand ( 90 , 110 ))/100;

$u1Pv = 20;
$u1Dp = 20*$u1Chance;
$u1Ds = 5*$u1Chance;
$u1Nb = 150;


$u2Pv = 30;
$u2Dp = 20*$u2Chance;
$u2Ds = 5*$u2Chance;
$u2Nb = 130;

$bataille = true;
$tour = 1;

while($bataille)
	{
		$u1DpTot = round(($u1Nb * $u1Dp) - ($u2Ds * $u1Nb));
		$u2DpTot = round(($u2Nb * $u2Dp) - ($u1Ds * $u2Nb));

		echo "<h1>Tour $tour</h1>";
		echo "Degat u1 : $u1DpTot<br>";
		echo "Degat u2 : $u2DpTot<br>";

		$u1Nb = round((($u1Pv * $u1Nb) - $u2DpTot)/$u1Pv);
		$u2Nb = round((($u2Pv * $u2Nb) - $u1DpTot)/$u2Pv);
		
		echo "$u1Nb<br>";
		echo "$u2Nb<br>";
		
		if($u1Nb <= 0 || $u2Nb <= 0)
			$bataille = false;	
		
		$tour++;		
	}




?>