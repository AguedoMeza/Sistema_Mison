<?php
include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];
$Vid_proveedor = $_POST['id_proveedor'];
$Vid_sucursal = $_POST['id_sucursal'];
$Vcantidad = $_POST['id_cantidad'];
$Vfecha_llegada = $_POST['fecha_llegada'];
$Vusuario = $_POST['id_usuario'];

date_default_timezone_set('America/Monterrey');

$fecha = date('Y-m-d');
$hora = date('H:m:s');

$result = mysqli_query($conexion, "INSERT INTO orden_compra (cantidad,fecha,hora,id_proveedor,id_sucursal,fecha_llegada,activo,usuario,recibido,completo)
                                   VALUES ('$Vcantidad', '$fecha', '$hora','$Vid_proveedor','$Vid_sucursal','$Vfecha_llegada','1','$s_idUsuario',0,0)");


echo"<script language=\"javascript\">window.location=\"index.php\"</script>";
  
?>