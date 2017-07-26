<?php 
include("../global_seguridad/verificar_sesion.php");

$variable=$_SESSION["s_IdNameUser"];
//echo $variable;
$nombre=$_SESSION["s_IdPersona"];
//echo $nombre;
$Vid_orden = $_GET["id"];


$consulta_campos = mysqli_query($conexion, "SELECT id,cantidad,fecha_llegada,id_sucursal,id_proveedor
                                            FROM orden_compra
                                            WHERE id = '$Vid_orden'");
$columna = mysqli_fetch_array($consulta_campos);
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="charset=utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>SISTEMA</title>
	
	<link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css"  />
	<link rel="stylesheet" href="../assets/css/font-awesome.css"  />
	<link rel="stylesheet" href="../assets/css/custom.css"  />
	<link rel="stylesheet" href="../assets/css/responsiveslides.css">
	<link rel="stylesheet" href="../assets/css/demo.css">
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/plugins/select2/select2.css" />

	<link href='../iconos/logo.png' rel='shortcut icon' type='image/png'/>
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="../assets/css/personal.css"/>
	
	
	<script src="../assets/js/custom.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.metisMenu.js"></script>
    
	<script src="../assets/js/responsiveslides.min.js"></script>
	<script src="../assets/plugins/select2/select2.full.min.js"></script>
</head>
<body>


	
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">S.C.S.</a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">  &nbsp; <a href="../login/cerrarsesion.php" class="btn btn-danger square-btn-adjust">Cerrar Sesion</a></div>
		</nav>   
           <!-- /. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
		<!--<?php include ("menu.php"); ?>-->
		</nav>  
		
		
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper" >
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h5 align="right">Bienvenido(a): <b><!--<?php echo "$nombre" ;?> --></b></h5><br>
						<!--A partir de aqui construyo mi formulario -->
						<h2>Actualización de la orden de compra</h2>
						<hr>
						<form  method="POST" id="formulario" action="actualizar_orden.php ?>">
                        
							<div class="form-group col-md-4">
								<label for="nombre">Proveedor: </label>
								<?php 
                                    $result = mysqli_query($conexion, "SELECT id,nombre
                                            FROM proveedores");
								?>
								 <select  class="form-control" id="id_proveedor" name="id_proveedor" id="proveedor" >
                  					<option value="" disabled selected>Selecciona el proveedor</option>
                  					<?php
                     				  while ($row=mysqli_fetch_array($result))
				                       {
				                         if ($row[0] == $columna[4]) 
				                       	 {
				                       	 	echo"<option value=\"$columna[4]\" selected>$row[1]</option>";
				                       	 }
				                       	 else
				                       	 {
				                       	 	echo "<option value=\"$row[0]\">$row[1]</option>";
				                       	 }
				                       }
                                    ?>
                                  </select>
                            </div>
                            
							<div class="form-group col-md-4">
								<label for="sucursal">Sucursal: </label>
								<?php 
                                             $result = mysqli_query($conexion, "SELECT id,nombre
                                            FROM sucursales");
                                ?>
								 <select  class="form-control" id="id_sucursal" name="id_sucursal" id="sucursal" >
                  					<option value="" disabled selected>Selecciona la sucursal</option>
                  					<?php
                     				  while ($row=mysqli_fetch_array($result))
				                       {
				                       	 if ($row[0] == $columna[3]) 
				                       	 {
				                       	 	echo"<option value=\"$columna[3]\" selected>$row[1]</option>";
				                       	 }
				                       	 else
				                       	 {
				                       	 	echo "<option value=\"$row[0]\">$row[1]</option>";
				                       	 }
				                         
				                       }
                                    ?>
                                  </select>
							</div>

							<div class="form-group col-md-4">
								<label for="cantidad">Cantidad: </label>
								<input type="number" class="form-control" id="cantidad" name="id_cantidad" value="<?php echo $columna[1];?>">
							</div>
							<div class="form-group col-md-4">
								<label for="fecha_llegada">Fecha llegada: </label>
								<input type="date" class="form-control" id="fecha_llegada" name="fecha_llegada" value="<?php echo $columna[2];?>">
								 <input style="visibility:hidden" type="text" name="id_orden_compra" value="<?php echo $Vid_ordenC = $_GET["id"];?>">
							</div>
                             
							 <div  align="right" class="form-group col-md-12">
								<input type="submit" value="Editar" class="btn btn-danger">
						     </div>
						     	     <div class="row">
					<div class="col-lg-12">
						<br><hr>
						<?php include'tabla_orden_compra.php' ?>
					</div> 
				
				</div>
					
					
		
	</form>
						 
						 
						<script type="text/javascript">
        function OnChangeCheckbox (checkbox) {
            ajax = function(url){
                var xhr = window.XMLHttpRequest ? 
                          new XMLHttpRequest() : 
                          new ActiveXObject("Microsoft.XMLHTTP") || 
                          new ActiveXObject("Msxml2.XMLHTTP");
         
                xhr.open("GET", url, true);
                xhr.send(null);
            };
        var estado = checkbox.checked ? 1 : 0, //Si está marcado, asigno 1 a 'estado', si no, 0
        id = checkbox.getAttribute("data-id"), //El valor del pseudo-atributo 'data-id'
        url = "editar_estado.php?estado=" + estado + "&id=" + id;
        ajax(url); 

        if (estado==0) {
            alert("El registro se ha desactivado");
        };
        if (estado==1) {
            alert("El registro ha sido activado");
        };
        }
    </script>
     </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#id_proveedor").select2();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#id_sucursal").select2();
        });
    </script>



	<?php 
if(isset($_POST['confirmar'])) 
{ 
date_default_timezone_set('America/Monterrey');

$fecha = date('Y-m-d');
$result = mysqli_query($conexion, "INSERT INTO orden_compra (fecha_recibo,recibido,completo)
    VALUES ('$fecha', '1','1')
		WHERE id = '$Vid_orden '");
} 
?>


					
						
						