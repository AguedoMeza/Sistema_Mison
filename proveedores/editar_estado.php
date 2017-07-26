<?php 
//incluir conexion
include'../configuracion/conexion.php';
//include '../global_seguridad/verificar_sesion.php';

//Se recuperan las variables GET
$g_id = $_GET['id'];
$g_estado = $_GET['estado'];

//se extrae de una funcion date 
date_default_timezone_set('America/Monterrey');
$p_fecha=date("Y-m-d"); 
$p_hora=date ("h:i:s");

//Se crea la consulta
$actualizar_estado= "UPDATE proveedores SET activo ='".$g_estado."', fecha = '".$p_fecha."', hora = '".$p_hora."', usuario = '".$id_usuario."' WHERE id ='".$g_id."'";

//Se ejecuta la sentencia en la clase
$result = mysqli_query($conexion, $actualizar_estado);


 ?>