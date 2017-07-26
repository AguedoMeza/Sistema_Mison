<?php 
include '../configuracion/conexion.php';

//Extraigo el ID de Usuario
$s_idUsuario = $_SESSION["sTipoUsuario"];



//Extraigo el perfil del usuario 
$cadena = "SELECT perfil FROM Usuarios WHERE id = $s_idUsuario";
$consulta = mysqli_query($conexion, $cadena) or die(mysqli_error());
$row = mysqli_fetch_array($consulta);

include 'obtener_carpeta.php';
//Compruebo si tiene acceso al módulo en cuestión
$cadena = "SELECT modulos.id, modulos.nombre FROM modulos INNER JOIN detalle_perfil ON modulos.id =detalle_perfil.id_modulo AND detalle_perfil.id_perfil = '$s_idUsuario' AND modulos.nombre_carpeta ='$nombre_modulo'";


$consulta = mysqli_query($conexion, $cadena) or die(mysqli_error());

$acceso_modulo =  mysqli_num_rows($consulta);

 ?>