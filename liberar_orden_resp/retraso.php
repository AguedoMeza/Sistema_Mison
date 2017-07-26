<?php
include("../configuracion/conexion.php");
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
						<h2>Ordenes de Retraso</h2>
		
						
						     <div class="row">
					<div class="col-lg-12">
						<br><hr>
						<?php include'tabla_orden_retraso.php' ?>
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
						
						
                    
						<br>
                        <br>
                        <br>
                        <br>
                        <table width="1500" height="1" border="0"> 
                        
                            <tr align="center" > 
                                <td  action="../orden_compra/retraso.php">
                                    <form action="../orden_compra/orden_dia.php">
                                      <td   height="100"><button name="btn" class="btn btn-danger">Orden de Compra</button></td>
                                    </form>
                                    </td> 
                                <td  action="../orden_compra/entregadas.php">
                                    <form  heigth="100"  method="get" action="../orden_compra/entregadas.php">
                            <input type="submit"  align="right" class="btn btn-danger" value="Ordenes de la Semana" />
                        </form>

                                </td> 
                                </tr> 
                        </table> 
                            


						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">


        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">confirmo de recibido o entrega completa </h4>

      <div class="modal-body">
      Recibido:
      <label class="checkbox-inline"><input type="radio" name = "recibido" value="1">Si</label>
      <label class="checkbox-inline"><input type="radio" name = "recibido" value="0">No</label>
      <br>
      <br>

     Completo:
      <label class="checkbox-inline"><input type="radio" name = "completo" value="1" checked = "true">Si</label>
      <label class="checkbox-inline"><input type="radio" name = "completo" value="0">No</label>

      </div>
          
          
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" name = "confirmar">Guardar</button>
      </div>
          
          
          </div>
            </div>
        </div>
    </div>
    </body>
</html>
    