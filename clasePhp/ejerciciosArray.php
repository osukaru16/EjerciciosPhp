<?php 
// array 34521

$array = array(3,4,5,2,1);

$nuevaArray = array();

$contador = 0;
$ordenado = false;
while (!$ordenado) {
	$numero = $array[$contador];
	echo "Valor de \$numero = ".$numero."<br/>";



	for ($i=0; $i < count($array); $i++) { 
		if ($numero > $array[$i]) {
			$array[0] = $array[$i];
			//$array[$i] = $numero;
			//$contador=0;

			
		}else {
			//$contador=0;
		}

	}

	$contador++;

	if ($contador == count($array)) {
		$ordenado = true;
	}



	
}

foreach ($array as $value) {
	

echo $value;

}


?>