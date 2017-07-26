<?php 
	include ("../configuracion/conexion.php");
	$prueba = $_POST['aula'];
	$opcionRecibo = $_POST['recibo'];
	$opcionCompleto = $_POST['completo'];
		

    $consulta = "UPDATE orden_compra
			SET recibido =  '$opcionRecibo', completo = '$opcionCompleto', activo = 1, usuario = 1
			WHERE id = '$prueba'";
		
	$actualizar = mysqli_query($conexion,$consulta);
	
	
	echo"<script language=\"javascript\">window.location=\"index.php\" </script>";

?>