<?php 
		
include "../global_seguridad/verificar_sesion.php";

	
	$s_idUsuario = $_SESSION["s_IdUser"];
	$p_id=$_POST["id"];
    $p_Contrasena = $_POST['pass'];
	$pContrasenados=$_POST["repassword"];

	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');

	if ($p_Contrasena == $pContrasenados)
	 {
	 	$pass = md5($p_Contrasena);
		$qry = "UPDATE usuarios 
			SET 
			pass = '$pass', 
			fecha = '$fecha', 
			hora = '$hora',
		    activo = '1',
			usuario = '$s_idUsuario'
			WHERE id = '$s_IdUser'";
			$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());

					echo"<script language=\"javascript\">window.location=\"../cambiar_password/index.php\" </script>";
	}
	else 
	{
		echo "<script type=\"text/javascript\">alert(\"Contraseña no coincide \"); </script>";
		echo"<script language=\"javascript\">window.location=\"index.php\" </script>";
	
	}
	
?>