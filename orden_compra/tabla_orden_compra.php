<script>
	$(document).ready(function() {			   
		$('#example').dataTable( {			
				 "language":
				 	{"url": "../assets/js/Spanish.json" }
		    });
		});
</script>
<?php 

include '../configuracion/conexion.php';
	
	$qry = "SELECT  id,numero_proveedor, proveedor, nombre_vendedor, cel_vendedor, correo_vendedor FROM proveedores WHERE activo='1'";
	

	$consulta = mysqli_query($conexion, $qry);
 ?>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>

	                
	                <th>No. Proveedor</th>
	                <th>Proveedor</th>
	                <th>Nombre Vendedor</th>
	                <th>Tel&eacute;fono Vendedor</th>
	                <th>E-mail Vendedor</th>
	                <th width="10%">Pedido</th>
	            </tr>s
	        </thead>
	        <tbody>
	        <?php 
	        	while($row = mysqli_fetch_array($consulta))
				{	?>
					
					<tr>
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
							<?php echo $row[4]; ?>
						</td>
						<td>
							<?php echo $row[5]; ?>
						</td>
						
						
						<td align="center">
							<a href="detalle_orden_compra.php?id=<?php echo $row[0] ?>">
							  <i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true">
								
							  </i>
							</a>
						</td>
					</tr>

				<?php 
				}
				 ?>
				
	        </tbody>  
		</table>

		