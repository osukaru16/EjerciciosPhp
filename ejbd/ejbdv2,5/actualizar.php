<?php

	//$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	//$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'root', '', $opciones);
	include 'conexion.php';





	$codID= $_POST["codID"];

	$nombreCorto= $_POST["nombreCorto"];

	$nombreProducto = $_POST["nombre"];

	$descripcion = $_POST["descripcion"];

	$precio = $_POST["precio"];

/*
	echo $codID."<br/><br/>";
	echo $nombreCorto."<br/><br/>";
	echo $nombreProducto."<br/><br/>";
	echo $descripcion."<br/><br/>";
	echo $precio."<br/>";
*/



	if($dwes->exec("UPDATE producto SET nombre_corto='".$nombreCorto."', nombre='".$nombreProducto."', descripcion='".$descripcion."', PVP =".$precio." WHERE cod='".$codID."'") == 0){

		echo "error";

	}else{

		//echo "ok";
		//echo "<button type='submit' name='continuar' formaction='listado.php'>Continuar</button>";
		//echo "<title> Se han actualizado los datos </title> <META HTTP-EQUIV='REFRESH' CONTENT='1'; URL='listado.php'>"; 

		echo"<form method='post' action='listado.php'>Se han actualizado los datos<br/><button type='submit' name='continuar'>Continuar</button></form>";


	}



	


	//print "<p>Se han modificado $registros registro.</p>";

//UPDATE tabla SET campo_idioma='español' WHERE campo_idioma='ingles'



/*
		if(isset($_POST["actualizar"])){


			$datos = $_POST["nombre"];

			echo $datos;


		}*/







?>