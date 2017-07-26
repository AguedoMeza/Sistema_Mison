<?php
	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];

$p_descuentos = $_POST['descuentos'];
$p_detalle = $_POST['detalle'];



date_default_timezone_set('America/Monterrey');

$fecha = date('Y-m-d');
$hora = date('h:i:s');


//<!--$consulta = "UPDATE tipo_proveedor
				//<!--SET id = '$pid' , nombre = '$p_nombre' , categoria = 'p_categoria' , descripcion = 'p_descripcion'
				//<!--WHERE id = '$pid'";




 $consulta = "INSERT INTO descuentos (descuentos, detalle,  fecha, hora, activo, usuario) VALUES ('$p_descuentos', '$p_detalle', '$fecha', '$hora', '1', '$s_idUsuario')"; 
$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_errno());

echo "<script languaje='javascript'> window.location = 'index.php' </script>";
?>



