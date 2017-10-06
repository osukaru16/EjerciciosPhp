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
$lista = array('$var = null;', '$var = 0;', '$var = true;', '$var = false;', '$var = 0;', '$var = "";', '$var  = "foo";', '$var = array();');
echo "<table>";
echo "<tr><td>Contenido de \$var </td><td>isset(\$var)</td><td>empty(\$var)</td><td>(bool)\$var</td></tr>";
//,'unset($var);'


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
	/*
	echo "<td>".miIsset($listaVar[$i])."</td>";
	echo "<td>".miEmpty($listaVar[$i])."</td>";
	echo "<td>".varBool($listaVar[$i])."</td>";
	*/

	$miIsset = (miIsset($listaVar[$i]) == 1) ? "true" : "false";
	$miEmpty = (miEmpty($listaVar[$i]) == 1) ? "true" : "false";
	$varBool = (varBool($listaVar[$i]) == 1) ? "true" : "false";

	echo "<td>".$miIsset."</td>";
	echo "<td>".$miEmpty."</td>";
	echo "<td>".$varBool." </td>";


	/*

	echo "<td> a </td>";
	echo "<td> b </td>";
	echo "<td> c </td>";

	*/



	echo "</tr>";
	//echo "<tr><td>".$i."</td></tr>";
	//echo "<tr><td>".$i."</td></tr>";
	
}
echo "</table>";


?>


</body>
</html>