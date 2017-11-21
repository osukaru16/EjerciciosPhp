<?php

	try{

		$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'root', '', $opciones);
		//$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', 'abc123.', $opciones);
		//$dwes = new PDO('mysql:host=127.0.0.1;dbname=dwes', 'dwes', 'abc123.', $opciones);
	}
	catch (PDOException $p){

		echo "<h1> Error ".$p->getMessage()."</h1><br />";
	}


?>