<?php 
include("../global_seguridad/verificar_sesion.php");
include '../configuracion/conexion.php';

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

	<title>SupSys</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css"  />
	<link rel="stylesheet" href="../assets/css/font-awesome.css"  />
	<link rel="stylesheet" href="../assets/css/custom.css"  />
	<link rel="stylesheet" href="../assets/css/responsiveslides.css">
	<link rel="stylesheet" href="../assets/css/demo.css">
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">

	

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
						<h2>Editar Familia</h2>
						<hr>

						<?php
							include '../configuracion/conexion.php';
							$id = $_GET["id"];
							
							$id = $_GET["id"];

	$qry = "SELECT familia.id, familia.clave_familia, familia.familia, departamentos.departamento
	FROM familia 
	INNER JOIN departamentos ON familia.id_departamento=departamentos.id
	WHERE familia.id = '$id'";






														
	$consulta = mysqli_query($conexion,$qry);					
	$row=mysqli_fetch_row($consulta);
	$id=$row[0];
                            

						?>
						<form action="ejecutar_editar.php" method="POST" id="formulario">
							<div>
								<input type="text" class="form-control" id="id" name="id" value="<?php echo $row[0] ?>" style="visibility:hidden">
							</div>
							<div class="form-group col-md-6">

								<label for="clave_familia">Clave de Familia: </label>
								<input type="text" class="form-control" id="clave_familia" name="clave_familia" value="<?php echo $row[1] ?>" autofocus required/>
							</div>

							<div class="form-group col-md-6">
								<label for="familia">Familia: </label>
								<input type="text" class="form-control" id="familia" name="familia" value="<?php echo $row[2] ?>" required/>                                                                         
							</div>

								

                            <div class="form-group col-md-4">
								<label for="departamento">Selecciona el Departamento: </label>
								
								 <select  class="form-control" id="id_departamento" name="id_departamento" id="id_departamento" >
                  					<option value="" disabled selected>Selecciona el Departamento</option>
                  					<?php 
      						      
                                    $result = mysqli_query($conexion, "SELECT id, departamento
                                            FROM departamentos");

                                	?>

                  					<?php
                     				  while ($row=mysqli_fetch_array($result))
				                       {
				                         if ($row[0] == $otro[3]) 
				                       	 {
				                       	 	echo"<option value=\"$otro[3]\" selected>$row[1]</option>";
				                       	 }
				                       	 else
				                       	 {
				                       	 	echo "<option value=\"$row[0]\">$row[1]</option>";
				                       	 }
				                       }
                                    ?>
                                  </select>
                            </div>	
                            

							<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
								<input type="submit" value="Actualizar" class="btn btn-danger square-btn-adjust"></div>

							
						</form>
						<!--Aqui termina el espacio de mi formulario -->
					</div>           
				</div>
				<div class="row">
					<div class="col-lg-12">
						<br><hr>
						<?php include'tabla_familia.php' ?>
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
    
					
</body>
</html>
