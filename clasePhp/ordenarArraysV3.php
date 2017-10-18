<?php


//$array = array(3,4,5,2,1);
//$array = array(1,3,4,5,2,1);
//$array = array(1,3,4,5,2,1,9,0,8,6,-1,4,-5,6,4,-7,3,7,-5);
$array = array(-100,12,150,35,42,4,5,1,0,-1,2.2, 0.1, -0.1, 100, 500);


$i = 1;

//while ($i < count($array)) {

function ordena(array &$array, $i){	
		
		if ($array[$i] < $array[$i-1]) {
			$numero = $array[$i-1];
			$array[$i-1] = $array[$i];
			$array[$i] = $numero;
			$i = 1;
			ordena($array, $i);
		}else{

		$i++;

		

		}

		if ($i < count($array)) {
			ordena($array, $i);
		}

}
	




//}
$start = microtime();
ordena($array, $i);
$end = microtime();

echo "<br>La ordenacion tardo".$end-$start."<br>";
foreach ($array as $value) {
	echo $value.",";
}










?>