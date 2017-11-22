<!DOCTYPE html>
<html>
<head>
	<title>Editar productos</title>
</head>


<style type="text/css">
	
.contenedor{

	margin-left: 1%;
	padding-left: 1%;
	background-color: #EEEEEE; 


}

.contenedor textarea{
	width: 500px;
	height: 200px;
}


</style>


<body>


<?php

//$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
//$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'root', '', $opciones);
include 'conexion.php';




$nombreProductos = $_POST["nombreProducto"];

$longitudNombreProductos = count($nombreProductos);

$nombreCorto = "";

$nombreProducto = "";

$descripcion = "";

$precio = "";
//$num = 1;


for ($i=0; $i < $longitudNombreProductos ; $i++) { 
	
	if(isset($_POST["boton_$i"])){

		$nombreCorto= $nombreProductos[$i];

		$buscaProducto = $dwes->query("SELECT nombre, descripcion, PVP, cod FROM producto WHERE nombre_corto = '".$nombreCorto."'");
		$informacionProducto = $buscaProducto->fetchAll();
		$longitudProductos = count($informacionProducto);

/*
		$nombreProducto = $informacionProducto[$i][0];

		$descripcion = $informacionProducto[$i][1];

		$precio = $informacionProducto[$i][2];
*/

/*
		echo $nombreProducto;
		echo $descripcion;
		echo $precio;*/




		for ($j=0; $j < $longitudProductos; $j++) {

			$nombreProducto = $informacionProducto[$j][0];

			$descripcion = $informacionProducto[$j][1];

			$precio = $informacionProducto[$j][2];

			$codID = $informacionProducto[$j][3];

/*
			echo $nombreProducto;
			echo $descripcion;
			echo $precio;
*/

		}


	}

}






?>

<div class="contenedor">
	<h1>Producto:</h1><br/>
	<form method="post" action="actualizar.php">

		<input type="hidden" name="codID" value="<?php echo $codID;  ?>">
			
		Nombre corto:
		<input type="text" name="nombreCorto" value="<?php echo $nombreCorto;  ?>" ><br/><br/>

		Nombre: <br/>
		<textarea name="nombre" cols="20" rows="5"> <?php echo $nombreProducto;  ?></textarea><br/><br/>

		Descripción: <br/>
		<textarea name="descripcion" cols="20" rows="5"> <?php echo $descripcion;  ?></textarea><br/><br/>


		PVP:
		<input type="number" name="precio" value="<?php echo $precio;  ?>"><br/><br/>
		<!--<input type="submit" name="actualizar" value="Actualizar">-->

		<!--<input type="submit" name="cancelar" value="Cancelar"><br/><br/>-->
		<button type="submit" name="actualizar">Actualizar</button>
		<button type="submit" name="cancelar" formaction="listado.php">Cancelar</button>
		


	</form>
	

	


</div>







</body>
</html>














