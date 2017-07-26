
<?php 

	include ("../configuracion/conexion.php");
	

	$id=$_POST["id"];
	$id_proveedor = $_POST['id_proveedor'];
    $id_descuento = $_POST['id_descuento'];
     $descuento = $_POST['descuento'];
    $detalle = $_POST['detalle'];

    $id_usuario = $_POST['id_usuario'];

    date_default_timezone_set('America/Monterrey');

    $fecha = date('Y-m-d');
    $hora = date('H:m:s');


    $consulta = "UPDATE detalle_descuento
			SET id_proveedor =  '$id_proveedor', 
			id_descuento = '$id_descuento',
			descuento = '$descuento',
			detalle = '$detalle',
			 fecha = '$fecha',
			  hora = '$hora', 
			  activo = 1, usuario = 1
			WHERE id = '$id'";
		
	$actualizar = mysqli_query($conexion,$consulta);
	
	
	echo"<script language=\"javascript\">window.location=\"index.php\" </script>";

?>