
<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio Agenda</title>
</head>
<body>
<style type="text/css">

.contenedor{

	margin-left: 5%;
	width: 200px
}

table{

	border-style: solid;
	border-width: 1px;

}

td{

	border-style: solid;
	border-width: 1px;

}
	



</style>


  <?php

  $nombre = "Nombre";
  $telefono = "Telefono";
  $agenda = array();
  $agenda[$nombre] = $telefono;
  $nombre = "";
  $telefono = "";


  $errorVancio = "";



  $nombreVancio = "";
  $telefonoVancio = "";



    if(isset($_POST["enviar"])){
    	
    	$telefono = trim($_POST["telefono"]);

    	$nombre = trim($_POST["nombre"]);

    	$agenda = $_POST["agenda"];

    	//if (count($nombre) === 0) {
    	if (($nombre == "")||($telefono == "")) {
    		$errorVancio = "<br/> El nombre o el telefono no pueden estar vacios <br/>";
    	}


    	else{
    		$agenda[$nombre] = $telefono;
    	}



    }





  

  ?>
  <div class="contenedor">
 
     

        <form method="post">

        	<label> Agenda</label><br/>

        	<?php echo $errorVancio; ?>

			<label> Nombre: </label><br/>
			<input type="text" name="nombre" value="<?php echo $nombre; ?>"> <br/><br/>
            
         
          
			<label>Teléfono: </label><br/>
    		<input type="number" name="telefono" value="<?php echo $telefono; ?>"> <br/><br/>
    		



          <?php
          foreach ($agenda as $nombre => $telefono) {
            echo "<input name='agenda[".$nombre."]' value='".$telefono."' type='hidden'/>";
          }

          ?>

          <input  type="submit" name="enviar" value="Enviar">

        <div class="resultados">
          
          <table>
            <?php foreach ($agenda as $nombre => $telefono) {
              // echo "Nombre: " . $nombre . '- Teléfono: ' . $telefono . '<br>
              echo "<tr><td>".$nombre."</td> <td>".$telefono."</td></tr><br/>";
            } ?>
            	
          </table>
      </div>

    </div>
  




</body>
</html>





