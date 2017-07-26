<?php
	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];

$p_clave_familia = $_POST['clave_familia'];
$p_familia = $_POST['familia'];

$p_id_departamento = $_POST['id_departamento'];


date_default_timezone_set('America/Monterrey');

$fecha = date('Y-m-d');
$hora = date('h:i:s');

$consulta = "INSERT INTO familia (clave_familia, familia, id_departamento, fecha, hora, activo, usuario) VALUES ('$p_clave_familia', '$p_familia', '$p_id_departamento', '$fecha', '$hora', '1', '$s_idUsuario')"; 


$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_errno());

echo "<script languaje='javascript'> window.location = 'index.php' </script>";
?>