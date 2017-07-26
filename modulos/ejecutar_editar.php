
<?php 

		include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];

	

	$p_id=$_POST["id"];
    $p_nombre = $_POST['nombre'];
	$p_nombre_carpeta = $_POST['nombre_carpeta'];
	$p_descripcion = $_POST['descripcion'];

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');


   


	$qry = "UPDATE modulos 
			SET id =  '$p_id', nombre = '$p_nombre', nombre_carpeta = '$p_nombre_carpeta', descripcion = '$p_descripcion', fecha = '$fecha', hora = '$hora', activo = '1', usuario = '$s_idUsuario'
			WHERE id = '$p_id'";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"../modulos/index.php\" </script>";

?>