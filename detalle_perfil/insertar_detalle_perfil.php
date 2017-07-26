<?php
include("../configuracion/conexion.php");
$id_modulo = $_POST['id_modulo'];
$id_perfil = $_POST['id_perfil'];

$id_usuario = $_POST['id_usuario'];

date_default_timezone_set('America/Monterrey');

$fecha = date('Y-m-d');
$hora = date('H:m:s');

$result = mysqli_query($conexion, "INSERT INTO detalle_perfil (id_modulo,id_perfil,fecha,hora,activo,usuario)
                                   VALUES ( '$id_modulo','$id_perfil','$fecha', '$hora','1','1')");


echo"<script language=\"javascript\">window.location=\"index.php\"</script>";
  
?>