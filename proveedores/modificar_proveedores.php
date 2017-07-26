<?php

include("../global_seguridad/verificar_sesion.php");

$variable=$_SESSION["s_IdNameUser"];
//echo $variable;
$nombre=$_SESSION["s_IdPersona"];
//echo $nombre;

include("../configuracion/conexion.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="charset=utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>SupSys</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css"  />
	<link rel="stylesheet" href="../assets/css/font-awesome.css"  />
	<link rel="stylesheet" href="../assets/css/custom.css"  />
	<link rel="stylesheet" href="../assets/css/responsiveslides.css">
	<link rel="stylesheet" href="../assets/css/demo.css">
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/plugins/select2/select2.css" />


	

	<link href='../assets/img/logo.png' rel='shortcut icon' type='image/png'/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" />
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="../assets/css/personal.css">
	
	
	<script src="../assets/js/custom.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.metisMenu.js"></script>
    
	<script src="../assets/js/responsiveslides.min.js"></script>
	<script src="../assets/js/jqBootstrapValidation.js"></script>
	<script src="../assets/plugins/select2/select2.full.min.js"></script>
	<script>
  		$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
	</script>
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
			<?php include ("menu.php"); ?>
		</nav>  
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper" >
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h5 align="right">Bienvenido(a): <b><?php echo "$nombre" ;?> </b></h5><br>
						<!--A partir de aqui construyo mi formulario -->
						<h2>Modificar Proveedores</h2>
						<hr>

						<?php
							include '../configuracion/conexion.php';
							$id = $_GET["id"];

							$qry = "SELECT proveedores.id, proveedores.numero_proveedor, proveedores.proveedor , proveedores.nombre_vendedor, proveedores.nombre_supervisor, proveedores.tel_empresa, proveedores.cel_vendedor, proveedores.cel_supervisor, proveedores.correo_vendedor, proveedores.correo_supervisor,
								 proveedores.plazo_pago, proveedores.cambios, proveedores.promociones, proveedores.promotoria, proveedores.periodo_visita, proveedores.flete
								FROM proveedores
							   		WHERE proveedores.id = '$id'";
									
							$consulta = mysqli_query($conexion,$qry);				
							$otro=mysqli_fetch_row($consulta);
							$id=$otro[0];

						?>
						<form action="ejecutar_modificar_proveedores.php" method="POST" id="formulario">
								<input type="hidden" class="form-control" id="id" value="<?php echo $otro[0];?>" name="id">
							<div class="form-group col-md-4">
								<label for="numero_proveedor">Número de Proveedor: </label>
								<input type="text" class="form-control" id="numero_proveedor" value="<?php echo $otro[1];?>" name="numero_proveedor">
							</div>
							<div class="form-group col-md-4">
								<label for="proveedor">Proveedor: </label>
								<input type="text" class="form-control" id="proveedor" value="<?php echo $otro[2];?>" name="proveedor">
							</div>
							<div class="form-group col-md-4">
								<label for="nombre_vendedor">Nombre del Vendedor: </label>
								<input type="text" class="form-control" id="nombre_vendedor" value="<?php echo $otro[3];?>" name="nombre_vendedor">
							</div>
							
							<div class="form-group col-md-4">
								<label for="nombre_supervisor">Nombre del Coordinador: </label>
								<input type="text" class="form-control" id="nombre_supervisor" value="<?php echo $otro[4];?>" name="nombre_supervisor">
							</div>
							<div class="form-group col-md-4">
								<label for="tel_empresa">Teléfono de la Empresa: </label>
								<input type="text" class="form-control" id="tel_empresa" value="<?php echo $otro[5];?>" name="tel_empresa">
							</div>
							<div class="form-group col-md-4">
								<label for="cel_vendedor">Celular del Vendedor: </label>
								<input type="text" class="form-control" id="cel_vendedor" value="<?php echo $otro[6];?>" name="cel_vendedor">
							</div>
							<div class="form-group col-md-4">
								<label for="cel_supervisor">Celular del Coordinador: </label>
								<input type="text" class="form-control" id="cel_supervisor" value="<?php echo $otro[7];?>" name="cel_supervisor">
							</div>
							<div class="form-group col-md-4">
								<label for="correo_vendedor">Correo del Vendedor: </label>
								<input type="email" class="form-control" id="correo_vendedor" value="<?php echo $otro[8];?>" name="correo_vendedor">
							</div>
							<div class="form-group col-md-4">
								<label for="correo_supervisor">Correo del Coordinador: </label>
								<input type="email" class="form-control" id="correo_supervisor" value="<?php echo $otro[9];?>" name="correo_supervisor">
							</div>
							<div class="form-group col-md-4">
								<label for="plazo_pago">Plazo de Pago: </label>
								<input type="text" class="form-control" id="plazo_pago" value="<?php echo $otro[10];?>" name="plazo_pago">
							</div>
							<div class="form-group col-md-4">
								<label for="cambios">Cambio o devolucion: </label>
								<select name="cambios" id="cambios" class="form-control">
									<!-- <option selected="true" disabled="true">Selecciona un cambio o devolucion</option>
									<option value="si">Si</option>
									<option value="no">No</option> -->
									<?php
									if ($otro[11]=="1")
									{
										echo"<option value =\"1\" selected = \"true\">Si acepta cambio</option>";
										echo"<option value =\"2\">Si acepta devolucion</option>";
										echo"<option value =\"3\">Acepta ambos</option>";
										echo"<option value =\"4\">No acepta ninguno</option>";
									}
									else if ($otro[11] =="2")
									{
										echo"<option value =\"1\">Si acepta cambio</option>";
										echo"<option value =\"2\" selected = \"true\">Si acepta devolucion</option>";
										echo"<option value =\"3\">Acepta ambos</option>";
										echo"<option value =\"4\">No acepta ninguno</option>";
									}
									else if ($otro[11] =="3")
									{
										echo"<option value =\"1\">Si acepta cambio</option>";
										echo"<option value =\"2\">Si acepta devolucion</option>";
										echo"<option value =\"3\" selected = \"true\">Acepta ambos</option>";
										echo"<option value =\"4\">No acepta ninguno</option>";
									}
									else
									{
										echo"<option value =\"1\">Si acepta cambio</option>";
										echo"<option value =\"2\">Si acepta devolucion</option>";
										echo"<option value =\"3\">Acepta ambos</option>";
										echo"<option value =\"4\"selected = \"true\">No acepta ninguno</option>";
									}

									?>									
								</select>							
							</div>
							<!--<div class="form-group col-md-4">
								<label for="desc_no_dev">Descuento por no devolucion: </label>
								<input type="text" class="form-control" id="desc_no_dev" value="<?php //echo $otro[12];?>" name="desc_no_dev">
							</div>

							<div class="form-group col-md-4">
								<label for="dec_pronto_pago">Descuento por pronto pago: </label>
								<input type="text" class="form-control" id="desc_pronto_pago" value="<?php //echo $otro[13];?>" name="desc_pronto_pago">
							</div>

							<div class="form-group col-md-4">
								<label for="desc_linea">Descuento de linea: </label>
								<input type="text" class="form-control" id="desc_linea" value="<?php //echo $otro[14];?>" name="desc_linea">
							</div> -->

							<div class="form-group col-md-4">
								<label for="promociones">Promociones: </label>
								 <select name="promociones" id="promociones" class="form-control">
									<!--<option selected="true" disabled="true">Selecciona una promoci&oacute;n</option>
									<option value="si">Si</option>
									<option value="no">No</option>
									<option value="se negocía">A negociar</option> -->

									<?php 
									if ($otro[12]== "si")
									{
										echo "
										<option value=\"si\" selected = \"true\">Si</option>
										<option value=\"no\">No<\option>
										<option value=\"se negocia\">A negociar</option>";
									}
									else if ($otro[12] =="no")
									{
										echo "
										<option value=\"si\">Si</option>
										<option value=\"no\" selected = \"true\">No</option>
										<option value=\"se negocia\">A negociar</option>";	
									}
									else
									{
										echo "
										<option value=\"si\">Si<\option>
										<option value=\"no\">No</option>
										<option value=\"se negocia\" selected = \"true\">A negociar</option>";
									}

									?>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="promotoria">Promotoria: </label>
								<select name="promotoria" id="promotoria" class="form-control" >
									<!-- <option selected="true" disabled="true">Selecciona una promoci&oacute;n</option>
									<option value="si">Si </option>
									<option value="no">No</option>-->
									<?php
									if ($otro[13]=="si")
									{
										echo "<option value = \"si\" selected = \"true\">Si</option>";
										echo "<option value = \"no\">No</option>";
									}
									else
									{
										echo "<option value = \"si\">Si</option>";
										echo "<option value = \"no\" selected = \"true\">No</option>";
									}
									?>
									
								</select>
							</div>
								<div class="form-group col-md-4">
								<label for="periodo_visita">Periodo de visita: </label>
								<input type="number" min="1" max="45" step="1" class="form-control" id="periodo_visita" value="<?php echo $otro[14];?>" name="periodo_visita" >
							</div>
							<div class="form-group col-md-4">
								<label for="flete">Flete: </label>
								<select name="flete" id="flete" class="form-control" required>
									<!--<option selected="true" disabled="true">Selecciona una opci&oacute;n</option>
									<option value="si">Si Incluye</option>
									<option value="no">No Incluye</option> -->
								<?php
									if ($otro[15]=="si")
									{
										echo "<option value = \"si\" selected = \"true\">Si Incluye</option>";
										echo "<option value = \"no\">No Incluye</option>";
									}
									else
									{
										echo "<option value = \"si\">Si Incluye</option>";
										echo "<option value = \"no\" selected = \"true\">No Incluye</option>";
									}
									?>	
									
								</select>
							</div>

							<!--<div class="form-group col-md-4">
								<label for="id_departamento">Departamento: </label>
								
								 <select  class="form-control" id="id_departamento" name="id_departamento" id="id_departamento" >
                  					<option value="" disabled selected>Selecciona en departamento</option>
                  					<?php 
      						      
                                   $result// = mysqli_query($conexion, "SELECT id, departamento
                                          // FROM departamentos");
                                	?>

                  					<?php
                     				//  while ($row=mysqli_fetch_array($result))
				                       {
				                      //   if ($row[0] == $otro[16]) 
				                       	 {
				                       //	 echo"<option value=\"$otro[16]\" selected>$row[1]</option>";
				                       	 }
				                       //	 else
				                       	 {
				                       	// 	echo "<option value=\"$row[0]\">$row[1]</option>";
				                       	 }
				                       }
                                    ?>
                                  </select>
                            </div> -->
						


							<div class="form-group col-md-4">
								<label for="id_comprador">Selecciona el comprador: </label>
								
								 <select  class="form-control" id="id_comprador" multiple="multiple"   name="id_comprador[]" id="id_comprador" >
                  					<!--<option  value="" disabled selected>Selecciona el comprador</option>-->
                  					<?php 
      						      
                                   
                                             $result = mysqli_query($conexion, "SELECT id, nombre_completo
                                            FROM usuarios WHERE activo=1 AND perfil=2");
                                	?>
                  					<?php
                     				  while ($row=mysqli_fetch_array($result))
				                       {
				                         if ($row[0] == $otro[17]) 
				                       	 {
				                       	 	echo"<option value=\"$otro[16]\" selected>$row[1]</option>";
				                       	 }
				                       	 else
				                       	 {
				                       	 	echo "<option value=\"$row[0]\">$row[1]</option>";
				                       	 }
				                       }
                                    ?>
                                  </select>
                            </div>
                            
                            <div class="form-group col-md-4" >
								<label for="id_departamento">Departamento que surten: </label>
								
								 <select class="form-control" name="id_departamento[]" id="id_departamento" multiple="multiple" required > <!-- multiple="multiple" -->
                  					<!--<option  value="" disabled selected>Selecciona el comprador</option>-->
                  					<?php 
                                             $result = mysqli_query($conexion, "SELECT id, departamento
                                            FROM departamentos WHERE activo=1");
                                ?>
                  					<?php
                     				  while ($row=mysqli_fetch_array($result))
				                       {
				                         echo "<option value='$row[0]'>$row[1]</option>";
				                       }
                                    ?>
                                  </select>
							</div>                               		
							<div  align="right" class="form-group col-md-12">
								<input type="submit" value="Editar" class="btn btn-danger">
						     </div>

					</form>
						<!--Aqui termina el espacio de mi formulario -->
					</div>
                 	<hr />            
				</div>			
				<div class="row">
					<div class="col-lg-12">
						<br><hr>
						<?php include'tabla_proveedores.php' ?>
					</div> 
				</div>
			</div>
		</div>
	</div>	
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
     <script type="text/javascript">
        $(document).ready(function(){
            $("#id_departamento").select2();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#id_comprador").select2();
        });
    </script>						
    <script src="../assets/js/custom.js"></script>
</body>
</html>