<?php
include("../configuracion/conexion.php");
$id_proveedor = $_POST['id_proveedor'];
$id_descuento = $_POST['id_descuento'];
$descuento = $_POST['descuento'];
$detalle = $_POST['detalle'];

$id_usuario = $_POST['id_usuario'];

date_default_timezone_set('America/Monterrey');

$fecha = date('Y-m-d');
$hora = date('H:m:s');

$result = mysqli_query($conexion, "INSERT INTO detalle_descuento (id_proveedor,id_descuento,descuento, detalle,fecha,hora,activo,usuario)
                                   VALUES ( '$id_proveedor','$id_descuento','$descuento','$detalle','$fecha', '$hora','1','1')");


echo"<script language=\"javascript\">window.location=\"index.php\"</script>";
  
?>