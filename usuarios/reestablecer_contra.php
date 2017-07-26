<?php 
include '../configuracion/conexion.php';
$g_id = $_GET['id'];

$contra = md5("123456789");

$consulta = "UPDATE usuarios SET pass='$contra' WHERE id = '$g_id'";

$actualizar = mysqli_query($conexion,$consulta) or die (mysql_error());
echo"<script language='javascript'>window.location='index.php'</script>";
 ?>
