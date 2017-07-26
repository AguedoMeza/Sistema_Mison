
<?php 

		include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];

	$p_id=$_POST["id"];
    $p_clave_depto = $_POST['clave_depto'];
	$p_departamento = $_POST['departamento'];
	





	$qry = "UPDATE departamentos 
			SET id =  '$p_id', clave_depto = '$p_clave_depto', departamento = '$p_departamento', fecha = '$fecha', hora = '$hora', activo = '1', usuario = '$s_idUsuario'
			WHERE id = '$p_id'";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"../departamentos/index.php\" </script>";

?>