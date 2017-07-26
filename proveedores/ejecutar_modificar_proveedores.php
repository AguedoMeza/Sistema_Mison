<?php
	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];


	$p_id = $_POST['id'];
	
	$p_numero_proveedor=$_POST['numero_proveedor'];
	$p_proveedor=$_POST['proveedor'];
	$p_nombre_vendedor=$_POST['nombre_vendedor'];
	$p_nombre_supervisor=$_POST['nombre_supervisor'];
	$p_tel_empresa=$_POST['tel_empresa'];
	$p_cel_vendedor=$_POST['cel_vendedor'];
	$p_cel_supervisor=$_POST['cel_supervisor'];
	$p_correo_vendedor=$_POST['correo_vendedor'];
	$p_correo_supervisor=$_POST['correo_supervisor'];
	$p_plazo_pago=$_POST['plazo_pago'];
	$p_cambios=$_POST['cambios'];
	$p_promociones=$_POST['promociones'];
	$p_promotoria=$_POST['promotoria'];
	$p_periodo_visita=$_POST['periodo_visita'];
	$p_flete=$_POST['flete'];
	$p_id_departemento=$_POST['id_departamento'];
	$p_comprador=$_POST['id_comprador'];


	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');	
	
	$consulta = "UPDATE proveedores
				 SET 
				 numero_proveedor =  '$p_numero_proveedor',
				 proveedor =  '$p_proveedor',
				 nombre_vendedor =  '$p_nombre_vendedor',
				 nombre_supervisor =  '$p_nombre_supervisor',
				 tel_empresa =  '$p_tel_empresa',
				 cel_vendedor = '$cel_vendedor',
				 cel_supervisor =  '$cel_supervisor',
				 correo_vendedor = '$p_correo_vendedor',
				 correo_supervisor = '$p_correo_supervisor',
				 plazo_pago = '$p_plazo_pago',
				 cambios = '$p_cambios',
				 promociones = '$p_promociones',
				 promotoria = '$p_promotoria',
				 periodo_visita = '$p_periodo_visita',
				 flete = '$p_flete',
				 id_departamento = '$p_id_departamento',
				 id_comprador = '$p_comprador',
				 fecha = '$fecha',
				 hora = '$hora',
				 usuario = '$s_idUsuario',
				 activo = 1, usuario = 1
			     WHERE id = '$p_id'";
	$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_errno());
	echo "<script language='javascript'> window.location='index.php' </script>";
?>