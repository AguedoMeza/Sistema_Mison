<?php
	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];

	$p_nombre=$_POST['nombre'];
	$p_ap_paterno=$_POST['ap_paterno'];
	$p_ap_materno=$_POST['ap_materno'];
	$p_id_sucursal=$_POST['id_sucursal'];
	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');

	$nombre_almacenista = $p_nombre." ".$p_ap_paterno." ".$p_ap_materno;
	$pass = "827ccb0eea8a706c4c34a16891f84e7b";

	 $nombre  = $p_nombre;
$cadena = explode(" ", $nombre);
$usuarioC = $cadena[0].$p_ap_paterno;

    
    

   $consulta="INSERT INTO almacenistas (nombre,ap_paterno,ap_materno, id_sucursal,  fecha,hora,activo,usuario)
	 VALUES('$p_nombre','$p_ap_paterno','$p_ap_materno','$p_id_sucursal','$fecha','$hora','1','$s_idUsuario')";
	$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());

	 $consulta2="INSERT INTO usuarios(nombre_usuario,nombre_completo,pass,fecha,hora,activo,usuario,perfil)
	 VALUES('$usuarioC','$nombre_almacenista','$pass','$fecha','$hora',1,'$s_idUsuario',3)";
	$qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());


	echo "<script language='javascript'> window.location='index.php' </script>"; 
?>