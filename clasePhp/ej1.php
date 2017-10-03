<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

/*

$var = null


$array = new Array()

isset($var)

empty($var)

(bool)$var

*/
$lista = array('$var = null;', '$var = 0;', '$var = true;', '$var = false;', '$var = 0;', '$var = "";', '$var  = "foo";', '$var = array();','unset($var);');
echo "<table>";
echo "<tr><td>Contenido de \$var </td></tr>";



$listaVar = array( $var = null, $var = 0,  $var = true, $var = false, $var = "0", $var = "", $var  = "foo", $var = array());


function miIsset($var){
	return isset($var);
}


function miEmpty($var){
	return empty($var);
}

function varBool($var){
	return (bool)$var;
}

/*
function miUnset($var){
	
	return unset($var);
}
*/



/*
function varNull(){
	$var = Null;
	return $var;

}

function varCero(){
	$var = 0;
	return $var;
}

function varFalse(){
	$var = false;
	return $var;
}

function varCeroString(){
	$var = "0";
	return $var;
}

function varStringVacio(){
	$var = "0";
	return $var;
}
*/



for ($i=0; $i < count($lista); $i++) { 
//foreach ($lista as $contenido) {
	

	echo "<tr>";
	//echo "<td>Contenido de $var</td>";
	//echo "<td>Contenido de \$var </td>";
	echo "<td>".$lista[$i]."</td>";
	/*for ($j=0; $j <= 2; $j++) { 
		echo "<td>".$j."</td>";
		
	}*/
	echo "<td>".miIsset($listVar[$i])."</td>";
	echo "<td>".miEmpty($listaVar[$i])."</td>";
	echo "<td>".varBool($listaVar[$i])."</td>";





	echo "</tr>";
	//echo "<tr><td>".$i."</td></tr>";
	//echo "<tr><td>".$i."</td></tr>";
	
}
echo "</table>";


?>


</body>
</html>