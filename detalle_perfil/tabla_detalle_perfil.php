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
	
	$qry = "SELECT detalle_perfil.id, modulos.nombre, perfil.nombre, detalle_perfil.activo  FROM detalle_perfil
	        INNER JOIN perfil ON detalle_perfil.id_perfil = perfil.id
					INNER JOIN modulos On detalle_perfil.id_modulo = modulos.id";
	        
	

	$consulta = mysqli_query($conexion, $qry);
 ?>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>

	                <th width="5%">#</th>
	                <th>Módulo</th>
	                <th>Perfil</th>
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
							<a href="editar_detalle_perfil.php?id=<?php echo $row[0] ?>">
							  <i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true">
								
							  </i>
							</a>
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
		

		
		