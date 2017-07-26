
<?php 

	include ("../configuracion/conexion.php");
	
	$Vid=$_POST["id_orden_compra"];
	$Var_nombre = $_POST["nombre"];
	$Var_direccion = $_POST["direccion"];
	
	date_default_timezone_set('America/Monterrey');
    $fecha = date('Y-m-d');
    $hora = date('H:m:s');
    
    $consulta = "UPDATE sucursales
			SET nombre =  '$Var_nombre', direccion = '$Var_direccion',  fecha = '$fecha', hora = '$hora', activo = 1, usuario = 1
			WHERE id = '$Vid'";
		
	$actualizar = mysqli_query($conexion,$consulta);
	echo"<script language=\"javascript\">window.location=\"index.php\" </script>";
?>