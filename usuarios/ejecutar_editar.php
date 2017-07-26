
<?php 

	include ("../configuracion/conexion.php");
	

	$p_id=$_POST["id"];
	$p_nombre_usuario = $_POST['nombre_usuario'];
	$p_nombre_completo = $_POST['nombre_completo'];
	$p_pass = $_POST['pass'];
	$p_perfil = $_POST['perfil'];




	$qry = "UPDATE usuarios
			SET id = '$p_id', nombre_usuario = '$p_nombre_usuario', nombre_completo = '$p_nombre_completo', pass = '$p_pass', perfil = '$p_perfil'
			WHERE id = '$p_id'";
	




		
	$actualizar = mysqli_query($conexion,$qry) or die (mysql_error());
	
	echo"<script language=\"javascript\">window.location=\"../usuarios/index.php\" </script>";

?>