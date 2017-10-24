<?php


function crearArrayAzar(){

	$min = 100;
	$max = 1000;
	$longitudArray = rand($min,$max);


	$minNumero = -1000;
	$maxNumero = 1000;

	//$numeroAzar = rand($minNumero,$maxNumero);

	$arrayNumeros = array();

	//echo $min."  ".$max."  Azar: ".$longitudArray;

	for ($i=0; $i < $longitudArray; $i++) { 
		
		 $arrayNumeros[$i] = rand($minNumero,$maxNumero);

	}

	return $arrayNumeros;

}

$array = crearArrayAzar();


foreach ($array as $numero) {
	echo $numero."/ ";
}
















?>