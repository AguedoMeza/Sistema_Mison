<?php
	include "../global_seguridad/verificar_sesion.php";
	$s_idUsuario = $_SESSION["s_IdUser"];

	$p_numero_proveedor=$_POST['numero_proveedor'];
	$p_proveeedor=$_POST['proveedor'];
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
	$p_id_departamento=$_POST['id_departamento'];
	$p_id_comprador=$_POST['id_comprador'];
	date_default_timezone_set('America/Monterrey');
	$fecha=date('Y-m-d');
	$hora=date('h:m:s');
	
	$consulta="INSERT INTO proveedores (numero_proveedor,proveedor,nombre_vendedor,nombre_supervisor,tel_empresa,cel_vendedor,cel_supervisor, correo_vendedor, correo_supervisor, plazo_pago, cambios, promociones, promotoria, periodo_visita,flete,   fecha,hora,activo,usuario)
	 VALUES('$p_numero_proveedor','$p_proveeedor','$p_nombre_vendedor','$p_nombre_supervisor','$p_tel_empresa','$p_cel_vendedor', '$p_cel_supervisor','$p_correo_vendedor','$p_correo_supervisor','$p_plazo_pago', '$p_cambios','$p_promociones','$p_promotoria', '$p_periodo_visita','$p_flete','$fecha','$hora','1','$s_idUsuario')";
	$qry=mysqli_query($conexion,$consulta) or die (mysqli_connect_error());


		$qry3= "SELECT MAX(id) from proveedores";

		$relacion = mysqli_query($conexion,$qry3);
		$otros=mysqli_fetch_row($relacion);
		$id=$otros[0];

    for ($i=0; $i<count($id_comprador);$i++)
	{

    $consulta2="INSERT INTO  proveedor_comprador (proveedor,id_comprador,fecha,hora,activo,usuario) VALUES  ('$id','$p_id_comprador[$i]','$fecha','$hora','1','$s_idUsuario')";

	// echo $consulta2;
    $qry2=mysqli_query($conexion,$consulta2) or die (mysqli_connect_error());
	//echo $consulta;
	//echo $consulta2;
	}


	// for ($i=0; $i<count($id_comprador);$i++)
	//{

    //$consulta3="INSERT INTO  proveedor_departamento (proveedor,id_departamento,fecha,hora,activo,usuario) VALUES  ('$id','$p_id_departamento[$i]','$fecha','$hora','1','$s_idUsuario')";

	
   // $qry4=mysqli_query($conexion,$consulta3) or die (mysqli_connect_error());
	
	//}
	echo "<script language='javascript'> window.location='index.php' </script>"; 
?>