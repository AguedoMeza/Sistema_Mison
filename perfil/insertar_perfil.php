<?php
include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];
$Vnombre = $_POST['nombre'];
$Vdescripcion = $_POST['descripcion'];


date_default_timezone_set('America/Monterrey');

$fecha = date('Y-m-d');
$hora = date('H:m:s');

$result = mysqli_query($conexion, "INSERT INTO perfil (nombre,descripcion,fecha,hora,activo,usuario)
                                   VALUES ('$Vnombre', '$Vdescripcion', '$fecha','$hora','1','$s_idUsuario')");


echo"<script language=\"javascript\">window.location=\"index.php\"</script>";
  
?>