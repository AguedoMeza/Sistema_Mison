<script>
	$(document).ready(function() {			   
		$('#example').dataTable( {			
				 "language":
				 	{"url": "../assets/js/Spanish.json" }
		    });
		});
</script>
<?php 

date_default_timezone_set('America/Monterrey');
$fecha = date('Y-m-d');

include '../configuracion/conexion.php';
	
	$qry = "SELECT orden_compra.id, proveedores.nombre, sucursales.nombre, orden_compra.cantidad, orden_compra.fecha_llegada, orden_compra.usuario 
        FROM orden_compra
	    INNER JOIN proveedores ON orden_compra.id_proveedor = proveedores.id
	    INNER JOIN sucursales ON orden_compra.id_sucursal = sucursales.id
        WHERE  fecha_llegada = '$fecha'
        AND orden_compra.activo = 1
        AND recibido = 0
        AND completo = 0";
	

	$consulta = mysqli_query($conexion, $qry);
 ?>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	               <th width="5%">#</th>
	                <th >Proveedor</th>
	                <th >Sucursal</th>
	                <th >Cantidad</th>
	                <th >Fecha llegada</th>
                    <th width="10%">Estado</th>
	                
	            </tr>
	        </thead>
	        <body>
	        <?php 
	        	while($row = mysqli_fetch_array($consulta))
				{	?>
					
					<tr>
						<td>
							<?php echo $row[0]; ?>
						</td>
						<td>
							<?php echo $row[1]; ?>
						</td>
						<td>
							<?php echo $row[2]; ?>
						</td>
						<td>
							<?php echo $row[3]; ?>
						</td>
						<td>
							<?php
						 echo $row[4]; 							
						    ?>
						</td>
						
						<td align="center" >
						 <?php
			              echo "
            			<a href='#' class='fa fa-truck fa-2x color-icono' data-toggle='modal' data-target='#miventana' data-id=$row[0]><span ></span> <br/></a>";
            		      ?>
						</td>
					</tr>
				<?php 
				}
				 ?>
				
	        </body>  
		</table>
		</div>

		<?php 
		include('modal.php');
	    ?>

		<link rel="stylesheet" href="assets/js/selectboxit/jquery.selectBoxIt.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/jquery-2.2.0.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script>
		$(document).ready(function (e) {

  			$('#miventana').on('show.bs.modal', function(e) {    
     		var id = $(e.relatedTarget).data().id;
     	 	$(e.currentTarget).find('#aula').val(id);
  			});
		});
	</script>
	<script>
		$(document).ready(function (e) {

  			$('#modal_cc').on('show.bs.modal', function(e) {    
     		var id = $(e.relatedTarget).data().id;
     	 	$(e.currentTarget).find('#lv').val(id);
  			});
		});
	</script>
	<script>
	$(function(){
		        $("#formulario").on("submit", function(e){
		            e.preventDefault();
		            var f = $(this);
		            var formData = new FormData(document.getElementById("formulario"));
		            //formData.append("dato", "valor");
		            //formData.append(f.attr("name"), $(this)[0].files[0]);
		            $.ajax({
		                url: "prueba.php",
		                type: "POST",
		                dataType: "html",
		                data: formData,
		                cache: false,
		                contentType: false,
			     processData: false
		            })
		                .done(function(res){
		                    //$("#mensaje").html("Respuesta: " + res);
		                    $('#miventana').modal('hide');
		                    alert("Cofirmación de compra guardada");
		                    window.location="orden_dia.php";
		                });
		        });
		    });
	</script>



		
