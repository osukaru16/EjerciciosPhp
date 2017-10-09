<?php


//$array = array(3,4,5,2,1);
//$array = array(1,3,4,5,2,1);
$array = array(1,3,4,5,2,1,9,0,8,6,-1,4,-5,6,4,-7,3,7,-5);



$ordenada = false;
while (!$ordenada) {

	
	$ordenada = true;


	for ($i=1; $i < count($array); $i++) { 
		
		if ($array[$i] < $array[$i-1]) {

			$numero = $array[$i-1];
			$array[$i-1] = $array[$i];
			$array[$i] = $numero;
			$ordenada = false;
		}


	}



		
		
		
	










}


foreach ($array as $value) {
	echo $value;
}









?>