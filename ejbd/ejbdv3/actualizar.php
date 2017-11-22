<?php

/**
*
*	@author: osukaru16 (OODO)
*
*	url de github
*	@link: https://github.com/osukaru16
*
*	@version:0.03
*
*	Recomendacion: Es recomendado que si este codigo se quiere usar seriamente que se revise las querys y refactorizar el codigo.
*/









	/**
	*	el include hace la conexion con la base de datos y puedes usar la variable $dwes que contioene el objeto PDO.
	*	con dwes se usa para hacer las query
	*/
	include 'conexion.php';



	/**
	*
	*	Se recuperan los datos enviado por editar php
	*
	*	El update se hace en el if por si devueve 0 es un error que significa que no se ha hecho ningun cambio. 
	*
	*
	*
	*/






	$codID= $_POST["codID"];

	$nombreCorto= $_POST["nombreCorto"];

	$nombreProducto = $_POST["nombre"];

	$descripcion = $_POST["descripcion"];

	$precio = $_POST["precio"];





	if($dwes->exec("UPDATE producto SET nombre_corto='".$nombreCorto."', nombre='".$nombreProducto."', descripcion='".$descripcion."', PVP =".$precio." WHERE cod='".$codID."'") == 0){

		echo"<form method='post' action='listado.php'>Error al realizar los cambios<br/><button type='submit' name='continuar'>Continuar</button></form>";

	}else{

		
		echo"<form method='post' action='listado.php'>Se han actualizado los datos<br/><button type='submit' name='continuar'>Continuar</button></form>";


	}



	

?>