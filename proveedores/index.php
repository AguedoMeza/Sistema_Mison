<?php 
include("../global_seguridad/verificar_sesion.php");

$variable=$_SESSION["s_IdNameUser"];
//echo $variable;
$nombre=$_SESSION["s_IdPersona"];
//echo $nombre;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="charset=utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>Supsys</title>
	<link href='../assets/img/logo.png' rel='shortcut icon' type='image/png'/>

	<link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/plugins/select2/select2.css" />
	<link rel="stylesheet" href="../assets/css/bootstrap.css"  />
	<link rel="stylesheet" href="../assets/css/font-awesome.css"  />
	<link rel="stylesheet" href="../assets/css/custom.css"  />
	<link rel="stylesheet" href="../assets/css/responsiveslides.css">
	<link rel="stylesheet" href="../assets/css/demo.css">
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/personal.css">

	<link href='../assets/img/logo.png' rel='shortcut icon' type='image/png'/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" /> <!--ico-->
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	
	
	
	<script src="../assets/js/custom.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap.min.js"></script>
    
    <script src="../assets/js/jquery.metisMenu.js"></script>
    
	<script src="../assets/js/responsiveslides.min.js"></script>
	
	<script src="../assets/plugins/select2/select2.full.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>

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
                <a class="navbar-brand" href="index.php">SupSys</a> 
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
						<h2>Proveedores</h2>
						<hr>
						<form action="insertar_proveedores.php" method="POST" id="formulario">
							
							<div class="form-group col-md-4">
								<label for="numero_proveedor">Número de Proveedor: </label>
								<input type="text" class="form-control" id="numero_proveedor" name="numero_proveedor" placeholder="Ej. 0000" required autofocus>
							</div>
							<div class="form-group col-md-4">
								<label for="proveedor">Proveedor : </label>
								<input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="Ej. Lala" required>
							</div>
							<div class="form-group col-md-4">
								<label for="nombre_vendedor">Nombre del Vendedor : </label>
								<input type="text" class="form-control" id="nombre_vendedor" name="nombre_vendedor" placeholder="Ej. Juan Lopez Ibarra" required>
							</div>
							<div class="form-group col-md-4">
								<label for="nombre_supervisor">Nombre del Coordinador: </label>
								<input type="text" class="form-control" id="nombre_supervisor" name="nombre_supervisor" placeholder="Ej. Luis Martínez Segura" required>
							</div>
							<div class="form-group col-md-4">
								<label for="tel_empresa">Teléfono de la Empresa: </label>
								<input type="text" class="form-control" id="tel_empresa" name="tel_empresa" placeholder="Ej. 8218005000"required>
							</div>
							
							<div class="form-group col-md-4">
								<label for="cel_vendedor">Celular del Vendedor: </label>
								<input type="text" class="form-control" id="cel_vendedor" name="cel_vendedor" placeholder="Ej. 8218005000" required>
							</div>
							<div class="form-group col-md-4">
								<label for="cel_supervisor">Celular del Coordinador: </label>
								<input type="text" class="form-control" id="cel_supervisor" name="cel_supervisor" placeholder="Ej. 8218005000" required>
							</div>
							<div class="form-group col-md-4">
								<label for="correo_vendedor">Correo del Vendedor: </label>
								<input type="email" class="form-control" id="correo_vendedor" name="correo_vendedor" placeholder="Ej. mail@example.com" required>
							</div>
							<div class="form-group col-md-4">
								<label for="correo_supervisor">Correo del Coordinador: </label>
								<input type="email" class="form-control" id="correo_supervisor" name="correo_supervisor" placeholder="Ej. mail@example.com" required>
							</div>
							<div class="form-group col-md-4">
								<label for="plazo_pago">Plazo de Pago: </label>
								<input  type="number" min="1" max="45" step="1"  class="form-control" id="plazo_pago" name="plazo_pago" placeholder="Ej. 10 " required>
							
							</div>
							<div class="form-group col-md-4">
								<label for="cambios">Cambio o devolucion: </label>
								<select name="cambios" id="cambios" class="form-control" onchange="habilitar(this.value);"  required>
									<option selected="true" disabled="true">Selecciona un cambio o devolucion</option>
									<option value="1">Si acepta cambio</option>
									<option value="2">Si acepta devolucion</option>
									<option value="3">Acepta ambos</option>
									<option value="4">No acepta ninguno</option>
									
								</select>
							</div>
							
							<div class="form-group col-md-4">
								<label for="promociones">Promociones: </label>
								<select name="promociones" id="promociones" class="form-control">
									<option selected="true" disabled="true">Selecciona una promoci&oacute;n</option>
									<option value="si">Si</option>
									<option value="no">No</option>
									<option value="se negocía">A negociar</option>
								</select>
							</div>
							
							<div class="form-group col-md-4">
								<label for="promotoria">Promotoria: </label>
								<select name="promotoria" id="promotoria" class="form-control" required>
									<option selected="true" disabled="true">Selecciona una promoci&oacute;n</option>
									<option value="si">Si </option>
									<option value="no">No</option>
									
								</select>
							</div>
							

							<div class="form-group col-md-4">
								<label for="periodo_visita">Periodo de Visita: </label>
								<input type="number" min="1" max="45" step="1" class="form-control" id="periodo_visita" name="periodo_visita" placeholder="Ej. 10" required>
							</div>
							
							<div class="form-group col-md-4">
								<label for="flete">Flete: </label>
								<select name="flete" id="flete" class="form-control" required>
									<option selected="true" disabled="true">Selecciona una opci&oacute;n</option>
									<option value="si">Si Incluye</option>
									<option value="no">No Incluye</option>
									
								</select>
							</div>
							
						

							 <div class="form-group col-md-4" >
								<label for="id_comprador">Comprador: </label>
								
								 <select class="form-control" name="id_comprador[]" id="id_comprador" multiple="multiple" required > <!-- multiple="multiple" -->
                  					<!--<option  value="" disabled selected>Selecciona el comprador</option>-->
                  					<?php 
                                             $result = mysqli_query($conexion, "SELECT id, nombre_completo
                                            FROM usuarios WHERE activo=1 AND perfil=2");
                                ?>
                  					<?php
                     				  while ($row=mysqli_fetch_array($result))
				                       {
				                         echo "<option value='$row[0]'>$row[1]</option>";
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
								<input name=insertar"" type="submit" value="Registrar" class="btn btn-danger">
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
            $("#id_comprador").select2();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#id_proveedor").select2();
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#id_departamento").select2();
        });
    </script>
      </script>
     
<script>
		function habilitar(value)
		{
			if(value=="si" || value==true)
			{
				// habilitamos
				document.getElementById("desc_no_dev").disabled=false;
			}else if(value=="no" || value==false){
				// deshabilitamos
				document.getElementById("desc_no_dev").disabled=true;
			}
		}
	</script>

    <script src="../assets/js/custom.js"></script>
</body>
</html>