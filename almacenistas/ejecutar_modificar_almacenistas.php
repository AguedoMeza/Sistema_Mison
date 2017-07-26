<?php
	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];


	$p_id = $_POST['id'];
	
	$p_nombre=$_POST['nombre'];
	$p_ap_paterno=$_POST['ap_paterno'];
	$p_ap_materno=$_POST['ap_materno'];
	$p_id_sucursal=$_POST['id_sucursal'];


	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');	
	
	$consulta = "UPDATE almacenistas
				 SET 
				 nombre =  '$p_nombre',
				 ap_paterno =  '$p_ap_paterno',
				 ap_materno =  '$p_ap_materno',
				 id_sucursal =  '$p_id_sucursal',
				 fecha = '$fecha',
				 hora = '$hora',
				 usuario = '$s_idUsuario',
				 activo = 1, usuario = 1
			     WHERE id = '$p_id'";
	$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_errno());
	echo "<script language='javascript'> window.location='index.php' </script>";
?>