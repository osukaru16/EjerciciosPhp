<?php

/**
*
*	@author: osukaru16 (OODO)
*
*	url de github
*	@link: https://github.com/osukaru16
*
*	@version:0.03
*/



	/**
	* Este es la conexion con la base de datos usando PDO
	* las lines que estan comentadas son otras configuraciones de la conexion a base de datos.
	* 
	* En el caso que este no te funciona el problema esta en la configuracion de la base de datos.
	* Es recomendable que uses el siguiente SQL para dar los premisos necesarios al usuario dwes:
	* GRANT ALL PRIVILEGES ON *.* TO 'dwes'@'localhost' IDENTIFIED BY 'abc123.' WITH GRANT OPTION;
	*
	* asegurate que el usuario dwes en la base de datos tienes que tener dos  uno con % y otro con localhost.
	*
	* En caso de error usar el usuario root para hacer pruebas en localhost
	*
	*/





	try{

		$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		//$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'root', '', $opciones);
		$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', 'abc123.', $opciones);
		//$dwes = new PDO('mysql:host=127.0.0.1;dbname=dwes', 'dwes', 'abc123.', $opciones);
		//$dwes = new PDO('mysql:host=172.16.6.122;dbname=dwes', 'dwes', 'abc123.', $opciones);
		//$dwes = new PDO('mysql:host=172.16.209.4;dbname=dwes', 'dwes', 'abc123.', $opciones);
	}
	catch (PDOException $p){

		echo "<h1> Error ".$p->getMessage()."</h1><br />";
	}


?>