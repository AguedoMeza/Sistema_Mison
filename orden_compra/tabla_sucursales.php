<script>
	$(document).ready(function() {			   
		$('#example').dataTable( {			
				 "language":
				 	{"url": "../assets/js/Spanish.json" }
		    });
		});
</script>
<head>
	  <script src="jquery-3.2.1.min.js"></script>       
</head>
<?php 
include '../configuracion/conexion.php';
	$qry = "SELECT id, nombre  FROM sucursales WHERE activo = '1'";
	$consulta = mysqli_query($conexion, $qry);
 ?>
 <form id="sendform" method="post" action="#">
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th width="5%">#</th>
	                <th>Activo</th>
	                <th>Sucursal</th>
	                <th>No. Orden</th>
	                <th>Cantidad</th>
	                <th>Fecha Llegada</th>
	            </tr>
	        </thead>
	        <tbody>
	        <?php 
	        	while($row = mysqli_fetch_array($consulta))
				{	?>
					
					<tr >
						<td>
							<?php echo $row[0]; ?>
						</td>
						<td>
							<!--<div class="checkbox">
								<label><input type="checkbox" onchange="habilitar(this.checked);" ></label>
							</div>-->
							<div class="checkbox">
								<label><input type="checkbox" class="js"></label>
							</div>
						</td>
						<td>
							<?php echo $row[1]; ?>
						</td>
						<td>
							<input type="text" class="form-control" disabled="true" name="member[shortname][]">
						</td>
						<td>
							<input type="text" class="form-control" disabled="true" name="member[fullname][]">
						</td>
						<td>
							<input type="date" class="form-control" disabled="true">
						</td>
					</tr>

				<?php 
				}
				 ?>
				
	        </tbody>  
		</table>
	</div>
    <input type="submit" value="Send" />
	</form>
     
	<script>
	$('.js').change( function()
    {
    $(this).parents("tr:eq(0)").find(".form-control").prop("disabled",!this.checked); 
    }
    );
	</script>

	<script>
	$('#sendform').submit(function(e){
$.ajax({
    type: 'POST',
    url: 'insertar.php', 
    data: $(this).serialize(),
    success: function(data){
        alert("Data Save: " + data);
    }
});
e.preventDefault();
});
</script>
	
				
