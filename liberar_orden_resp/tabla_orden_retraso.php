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
include("modal.php");
	
	$qry = "SELECT orden_compra.id, proveedores.nombre, sucursales.nombre, orden_compra.cantidad, orden_compra.fecha_llegada, orden_compra.usuario 
        FROM orden_compra
	    INNER JOIN proveedores ON orden_compra.id_proveedor = proveedores.id
	    INNER JOIN sucursales ON orden_compra.id_sucursal = sucursales.id
         WHERE  fecha_llegada < '$fecha'
        AND orden_compra.activo = 1
        AND orden_compra.recibido = 0
        AND orden_compra.completo = 0";
	

	$consulta = mysqli_query($conexion, $qry);
 ?>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th width="5%">#</th>
	                <th width="12%">Proveedor</th>
	                <th width="12%">Sucursal</th>
	                <th width="12%">Cantidad</th>
	                <th width="12%">Fecha llegada</th>
	                 <th width="10%">Estado</th>
	                 <th width="10%">Dias de retraso</th>
	                
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
						<a href="#">
					    <i type="button" class="fa fa-truck fa-2x color-icono" data-toggle="modal" data-target="#modal5"
                             data-formato="<?php echo $row[0];?>"></i></a>
						</td>
						<td align="center">
							<?php 
                 $fecha = $row[4];
                 $segundos =  strtotime('now') - strtotime($fecha) ;
                 $diferencia_dias = intval($segundos/60/60/24);
                 echo $diferencia_dias ?>
						</td>
					</tr>
				<?php 
				}
				 ?>
				
	        </body>  
		</table>
		</div>
