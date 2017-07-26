
<?php 

		include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
    $p_descuentos = $_POST['descuentos'];
	$p_detalle = $_POST['detalle'];

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');


   


	$qry = "UPDATE descuentos 
			SET id =  '$p_id', descuentos = '$p_descuentos', detalle = '$p_detalle', fecha = '$fecha', hora = '$hora', activo = '1', usuario = '$s_idUsuario'
			WHERE id = '$p_id'";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"../descuentos/index.php\" </script>";

?>