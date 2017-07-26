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
	
	$qry = "SELECT orden_compra.id, proveedores.nombre, sucursales.nombre, orden_compra.cantidad, orden_compra.fecha_llegada, orden_compra.activo, orden_compra.usuario FROM orden_compra
	        INNER JOIN proveedores ON orden_compra.id_proveedor = proveedores.id
	        INNER JOIN sucursales ON orden_compra.id_sucursal = sucursales.id";
	

	$consulta = mysqli_query($conexion, $qry);
 ?>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>

	                <th width="5%">#</th>
	                <th>Proveedor</th>
	                <th>Sucursal</th>
	                <th>Cantidad</th>
	                <th>Fecha llegada</th>
	                 
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
						<td>
							<?php echo $row[4]; ?>
						</td>
						
						<td align="center">
							<a href="editar_orden.php?id=<?php echo $row[0] ?>">
							  <i class="fa fa-pencil-square-o fa-2x color-icono" aria-hidden="true">
								
							  </i>
							</a>
						</td>
						<td align="center">

						<?php 
						if ($row[5]==1) {
							$valor = "checked";
						}
						if ($row[5]==0) {
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
      <label class="checkbox-inline"><input type="checkbox" name = "recibido" value="1">Si</label>
      <label class="checkbox-inline"><input type="checkbox" name = "recibido" value="0">No</label>
      <br>
      <br>

     Completo:
      <label class="checkbox-inline"><input type="checkbox" name = "completo" value="1" checked = "true">Si</label>
      <label class="checkbox-inline"><input type="checkbox" name = "completo" value="0">No</label>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" name = "confirmar">Guardar</button>
      </div>
    </div>
  </div>
</div>
	</div>

		