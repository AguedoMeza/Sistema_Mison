
<?php 

	include ("../configuracion/conexion.php");
	

	$id=$_POST["id"];
	$id_modulo = $_POST['id_modulo'];
    $id_perfil = $_POST['id_perfil'];

    $id_usuario = $_POST['id_usuario'];

    date_default_timezone_set('America/Monterrey');

    $fecha = date('Y-m-d');
    $hora = date('H:m:s');


    $consulta = "UPDATE detalle_perfil
			SET id_modulo =  '$id_modulo', id_perfil = '$id_perfil', fecha = '$fecha', hora = '$hora', activo = 1, usuario = 1
			WHERE id = '$id'";
		
	$actualizar = mysqli_query($conexion,$consulta);
	
	
	echo"<script language=\"javascript\">window.location=\"index.php\" </script>";

?>