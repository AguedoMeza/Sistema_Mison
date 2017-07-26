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
	
	$qry = "SELECT id, nombre, descripcion, usuario, activo FROM perfil";
	

	$consulta = mysqli_query($conexion, $qry);
 ?>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>
                    <th width="5%">#</th>
	                <th>Nombre</th>
	                <th>Descripcion</th>
	                <th>Usuario</th>
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
						<td>
							<?php echo $row[3]; ?>
						</td>
						
						
						<td align="center">
							<a href="editar_orden.php?id=<?php echo $row[0] ?>">
							  <i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true">
								
							  </i>
							</a>
						</td>
						<td align="center">

						<?php 
						if ($row[4]==1) {
							$valor = "checked";
						}
						if ($row[4]==0) {
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
      <label class="checkbox-inline"><input type="checkbox" value="">Si</label>
      <label class="checkbox-inline"><input type="checkbox" value="">No</label>
      <br>
      <br>

     Completo:
      <label class="checkbox-inline"><input type="checkbox" value="">Si</label>
      <label class="checkbox-inline"><input type="checkbox" value="">No</label>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
	</div>