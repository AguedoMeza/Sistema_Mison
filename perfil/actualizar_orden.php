
<?php 

	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];
	
    $Vid=$_POST["id_orden_compra"];
	$Vnombre=$_POST["nombre"];
	$Vdescripcion = $_POST["descripcion"];
	

	

	date_default_timezone_set('America/Monterrey');

    $fecha = date('Y-m-d');
    $hora = date('H:m:s');
    

    $consulta = "UPDATE perfil
			SET nombre =  '$Vnombre', descripcion = '$Vdescripcion', fecha = '$fecha', hora = '$hora', activo = 1, usuario = '$s_idUsuario'
			WHERE id = '$Vid'";
		
	$actualizar = mysqli_query($conexion,$consulta);
	
	
	echo"<script language=\"javascript\">window.location=\"index.php\" </script>";

?>