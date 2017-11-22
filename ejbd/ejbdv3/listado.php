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
	<title>Listado</title>
</head>
<style type="text/css">
	
.contenedor .formulario{
	margin-left: 1%;
	background-color: #DEF0A4;


}

.contenedor .resultado{
	margin-left: 1%;
	background-color: #EEEEEE;


}


</style>


<body>


<?php
/**
*	el include hace la conexion con la base de datos y puedes usar la variable $dwes que contioene el objeto PDO.
*	con dwes se usa para hacer las query
*/
	include 'conexion.php';

?>



<div class="contenedor">

	<div class="formulario">
		<form method="post">
			<h1>Listado de productos de una familia</h1><br/>
			Familia:
			<select name="opciones">
				<?php

					/**
					*
					*	Aqui se seleciona nombre de la tabla familia.
					*
					*	$registros es una matriz con los resultados del select.
					*
					*	El select html puede tener valores de x, 0 a la longitud de los archivos.
					*
					*
					*/




					
					$resultado = $dwes->query("SELECT nombre FROM familia");
					$registros = $resultado->fetchAll();

					$logitudRegistros = count($registros);
					echo "<option value='x' selected>Elige familia</option>";


					for ($i=0; $i < count($registros); $i++) { 
						echo "<option value='".$i."'>".$registros[$i][0]."</option>";
					}




				?>




				



			</select>


			<input type="submit" name="productos" value="Mostrar productos">

		</form>

	</div>
	<div class="resultado">
		<h1>Productos de la familia</h1><br/>




		<?php


		/**
		*
		*	Aqui controlas si el usuario ha elegido o no una familia cuando ha pulsado el submit productos.
		*	Como se usa el select html con el nombre opciones en el caso que valga x devuelve un error por no elegir familia.
		*	El resto de valores son numericos.
		*
		*	Si se eligio una familia se hace un select para cojer el cod que el identificador de la familia.  
		*	$opcion es igual al numero de la posicion en la base de datos.
		*
		*
		*	Cuando ya se tiene el producto en el array $informacionProducto se crean lineas con el nombre del producto, el precio
		*	y un input submit con un nombre boton_ con el numero que le da el for usando $i.
		*
		*
		*	Hacemos un input hidden con el nombre nombreProducto para poder crear un array en editar.php.
		*	
		*
		*
		*/






		if(isset($_POST["productos"])){

			$opcion = $_POST["opciones"];
			
			if ($opcion != "x") {
				
				$buscaCodigo = $dwes->query("SELECT cod FROM familia");
				$codigoFamilia = $buscaCodigo->fetchAll();
				$nombreCodigoFamilia = $codigoFamilia[$opcion][0];

				$buscaProducto = $dwes->query("SELECT nombre_corto, PVP FROM producto WHERE familia = '".$nombreCodigoFamilia."'");

				$informacionProducto = $buscaProducto->fetchAll();

				$longitudProductos = count($informacionProducto);

				echo "<form method='post' action='editar.php'>";

				for ($i=0; $i < $longitudProductos; $i++) { 
						echo "<input type='hidden' name='nombreProducto[".$i."]' value='".$informacionProducto[$i][0]."'>";
						echo "<p>";
						echo $informacionProducto[$i][0]." ".$informacionProducto[$i][1]." euros  <input type='submit' name='boton_".$i."' value='editar'>";
						echo "<p/>";
					}

				echo "</form>";	



			}else{
				echo  "Error no has elegido familia";

			}


		}





		?>
		
	</div>


</div>


</body>
</html>



