<?php 
//incluir conexion
	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];
//include '../global_seguridad/verificar_sesion.php';

//Se recuperan las variables GET
$g_id = $_GET['id'];
$g_estado = $_GET['estado'];

//se extrae de una funcion date 
date_default_timezone_set('America/Monterrey');
$p_fecha=date("Y-m-d"); 
$p_hora=date ("h:i:s");

//Se crea la consulta
$actualizar_estado= "UPDATE usuarios SET activo ='".$g_estado."', fecha = '".$p_fecha."', hora = '".$p_hora."', usuario = '".$s_idUsuario."' WHERE id ='".$g_id."'";

//Se ejecuta la sentencia en la clase
$result = mysqli_query($conexion, $actualizar_estado);


 ?>