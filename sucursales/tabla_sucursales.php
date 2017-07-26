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
	$qry = "SELECT id, nombre, direccion, activo FROM sucursales";
	$consulta = mysqli_query($conexion, $qry);
 ?>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th width="5%">#</th>
	                <th>Nombre</th>
	                <th>Dirección</th>
	          
	                <th width="10%">Editar</th>
	                <th width="10%">Activo</th>
	            </tr>
	        </thead>
	        <tbody>
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
						
						<td align="center">
							<a href="../sucursales/formulario_editar.php?id=<?php echo $row[0] ?>"><i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true" ></i></a>
						</td>
						<td align="center">

						<?php 
						if ($row[3]==1) {
							$valor = "checked";
						}
						if ($row[3]==0) {
							$valor="";
						}
						?>
							<?php echo "<input type='checkbox' id='status' $valor onclick='OnChangeCheckbox (this)' data-id='$row[0]'/>"; ?>
						</td>
					</tr>
				<?php 
				}
				 ?>				
	        </tbody>  
		</table>
	</div>