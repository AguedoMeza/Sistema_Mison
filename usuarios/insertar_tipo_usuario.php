<?php
	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];

$p_nombre_usuario = $_POST['nombre_usuario'];
$p_nombre_completo = $_POST['nombre_completo'];
$p_cadena = $_POST['cadena'];
$p_pass = $_POST['pass'];
$p_perfil = $_POST['perfil'];

$cadena_final = md5($p_cadena);
echo $cadena_final;


date_default_timezone_set('America/Monterrey');

$fecha = date('Y-m-d');
$hora = date('h:i:s');


 $consulta = "INSERT INTO usuarios (nombre_usuario, nombre_completo, pass, perfil, fecha, hora, activo, usuario) VALUES ('$p_nombre_usuario', '$p_nombre_completo', '$cadena_final', '$p_perfil', '$fecha', '$hora', '1', '$s_idUsuario')"; 
$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_errno());




echo "<script languaje='javascript'> window.location = 'index.php' </script>";
?>



