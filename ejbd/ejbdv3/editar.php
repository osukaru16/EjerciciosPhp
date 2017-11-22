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
?>

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
/**
*	el include hace la conexion con la base de datos y puedes usar la variable $dwes que contioene el objeto PDO.
*	con dwes se usa para hacer las query
*/
include 'conexion.php';

/**
*
*	Usamos $_POST["nombreProducto"] para crear el array con todos los nombres de producto
*
*
*	Se hace un bucle para que recora todo el array $nombreProductos y con ello 
*	se comprueba a que boton_posicion submit se pulso y sabiendo en que posicion del array es.
*
*	Se hace un select para buscar los datos necesarios que se necsitan para rellenar los campos del formulario. 
*
*	El $codID contiene la clave primaria de la tabla producto. 
*
*	Todos los datos en envian a actualizar.php para hacer los cambios al pulsar actualizar y Cancelar te envia a listado.php  
*
*
*/




$nombreProductos = $_POST["nombreProducto"];

$longitudNombreProductos = count($nombreProductos);

$nombreCorto = "";

$nombreProducto = "";

$descripcion = "";

$precio = "";



for ($i=0; $i < $longitudNombreProductos ; $i++) { 
	
	if(isset($_POST["boton_$i"])){

		$nombreCorto= $nombreProductos[$i];

		$buscaProducto = $dwes->query("SELECT nombre, descripcion, PVP, cod FROM producto WHERE nombre_corto = '".$nombreCorto."'");
		$informacionProducto = $buscaProducto->fetchAll();
		$longitudProductos = count($informacionProducto);



		for ($j=0; $j < $longitudProductos; $j++) {

			$nombreProducto = $informacionProducto[$j][0];

			$descripcion = $informacionProducto[$j][1];

			$precio = $informacionProducto[$j][2];

			$codID = $informacionProducto[$j][3];



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














