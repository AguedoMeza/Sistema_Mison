
<?php 

	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];
	

	$Vid=$_POST["id_orden_compra"];
	$Vid_proveedor = $_POST["id_proveedor"];
	$Vid_sucursal = $_POST["id_sucursal"];
	$Vcantidad = $_POST["id_cantidad"];
	$Vfecha_llegada = $_POST["fecha_llegada"];

	

	date_default_timezone_set('America/Monterrey');

    $fecha = date('Y-m-d');
    $hora = date('H:m:s');
    

    $consulta = "UPDATE orden_compra
			SET id_proveedor =  '$Vid_proveedor', id_sucursal = '$Vid_sucursal', cantidad = '$Vcantidad', fecha_llegada ='$Vfecha_llegada', fecha = '$fecha', hora = '$hora', activo = 1, usuario = '$s_idUsuario'
			WHERE id = '$Vid'";
		
	$actualizar = mysqli_query($conexion,$consulta);
	
	
	echo"<script language=\"javascript\">window.location=\"index.php\" </script>";

?>