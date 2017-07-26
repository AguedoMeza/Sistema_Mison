<?php
include("../configuracion/conexion.php");

 $p_nombre= $_POST["nombre"];
$p_direccion= $_POST["direccion"];
 //date_default_timezone('America/Monterrey');
date_default_timezone_set('America/Monterrey');
$fecha = date("Y-m-d");
$hora = date('H:i:s');

/*$consulta = "INSERT INTO orden_compra (id_proveedor,id_sucursal,cantidad,fecha_llegada,fecha,hora,activo,usuario)
             VALUES ('$Vid_proveedor','Vid_sucursal','Vcantidad','$fecha','','$hora','1','Vusuario')"*/
$consulta = mysqli_query($conexion, "INSERT INTO sucursales ( nombre,direccion,fecha,hora,activo,usuario)
                VALUES ('$p_nombre','$p_direccion','$fecha','$hora','1','1')");
  
//echo"<script language=\"javascript\">window.location=\"index.php\"</script>";
//$insertar = mysqli_query($consulta,$conexion) or die (mysqli_connect_errno());
         echo"<script language=\"javascript\">window.location=\"index.php\"</script>";
?>