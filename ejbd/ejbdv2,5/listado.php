
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

	include 'conexion.php';



?>



<div class="contenedor">

	<div class="formulario">
		<form method="post">
		<!--<input type="text" name="busqueda">	-->
			<h1>Listado de productos de una familia</h1><br/>
			Familia:
			<select name="opciones">
				<?php
					//aqui escribe el codigo para que las opciones se creen usando la base de datos

					//usuario CREATE USER `dwes` IDENTIFIED BY 'abc123.';

					//$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', 'abc123.');

				//$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

					//$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'dwes', 'abc123.', $opciones);

				//$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'root', '', $opciones);

					//include 'conexion.php';




					//$dwes = new PDO('mysql:host=localhost;dbname=dwes', 'root', '');

					//$registros = $dwes->exec('SELECT nombre FROM familia');


					$resultado = $dwes->query("SELECT nombre FROM familia");
					$registros = $resultado->fetchAll();


					$logitudRegistros = count($registros);
					echo "<option value='x' selected>Elige familia</option>";



					for ($i=0; $i < count($registros); $i++) { 
						echo "<option value='".$i."'>".$registros[$i][0]."</option>";
					}



					//echo "<option>".$registros[2][0]."</option>";


					/*
					foreach ($registros as $value) {
						echo "<option>".$value."</option>";

					}*/













				?>




				



<!--
				<option selected>Elige familia</option>
				<option>Cámaras digitales</option>
				<option >Consolas</option>
				<option>Libros electrónicos</option>
				<option>Impresoras</option>
				<option>Memorias flash</option>
				<option>Reproductores MP3</option>
				<option>Equipos multifunción</option>
				<option>Netbooks</option>
				<option>Ordenadores</option>
				<option>Ordenadores portátiles</option>
				<option>Routers</option>
				<option>Sistemas de alimentación ininterrumpida</option>
				<option>Software</option>
				<option>Televisores</option>
				<option>Videocámaras</option>	

				-->


			</select>


			<input type="submit" name="productos" value="Mostrar productos">

		</form>

	</div>
	<div class="resultado">
		<h1>Productos de la familia</h1><br/>




		<?php


		if(isset($_POST["productos"])){

			$opcion = $_POST["opciones"];
			//$opcionElegida = "";



			if ($opcion != "x") {
				//echo  $registros[$opcion][0];
				//$opcionElegida = $registros[$opcion][0];


				$buscaCodigo = $dwes->query("SELECT cod FROM familia");
				$codigoFamilia = $buscaCodigo->fetchAll();
				$nombreCodigoFamilia = $codigoFamilia[$opcion][0];

				$buscaProducto = $dwes->query("SELECT nombre_corto, PVP FROM producto WHERE familia = '".$nombreCodigoFamilia."'");
				//$buscaProducto = $dwes->query("SELECT nombre_corto FROM producto WHERE familia = 'CONSOL'");
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





				//echo $informacionProducto[0];








				//echo $nombreCodigoFamilia;

				//$result = $buscaCodigo->fetch(PDO::FETCH_ASSOC);
				//print_r($result);





			}else{
				echo  "Error no has elegido familia";

			}

/*
			$buscaCodigo = $dwes->query("SELECT cod FROM familia WHERE nombre = ".$registros[$opcion][0]);
			$codigoFamilia = $buscaCodigo->fetch();
			echo $codigoFamilia;*/

			

			





		}












		?>
		
	</div>


</div>


</body>
</html>



