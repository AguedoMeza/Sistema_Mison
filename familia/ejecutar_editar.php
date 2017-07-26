
<?php 

		include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];
	$p_id=$_POST["id"];
    $p_clave_familia = $_POST['clave_familia'];
	$p_familia = $_POST['familia'];
	$p_id_departamento = $_POST['id_departamento'];

	$qry = "UPDATE departamentos 
			SET 
			id =  '$p_id',
			 clave_familia = '$p_clave_familia',
			  familia = '$p_familia', 
			  id_departamento = '$p_id_departamento', 
			  fecha = '$fecha', 
			  hora = '$hora',
			   activo = '1', 
			   usuario = '$s_idUsuario'
			WHERE id = '$p_id'";
	
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"../familia/index.php\" </script>";

?>