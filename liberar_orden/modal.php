<div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4>Confirmación de la orden compra</h4>
				</div>
				<form enctype="multipart/form-data" method="POST" id="formulario">
				<div class="modal-body">
					<div class="container">
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<input type="hidden" name="aula" id="aula" value="">
										
										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-5">
									<div class="panel panel-primary">
										<div class="panel-heading">
								          <h3 class="panel-title">
								            <span ></span>¿La orden ha sido recibida?</h3>
								        </div>
								        <div class="panel-body">
								        	<div class="radio">
											  <label>
											    <input type="radio" name="recibo" id="falla_1" value="1" >
											    	Si
											  </label>
											</div>
											<div class="radio">
											  <label>
											    <input type="radio" name="recibo" id="falla_2" value="0">
											    	No
											  </label>
											</div>
											
								        </div>
									</div>
								</div>




							</div>
							<div class="row">
								<div class="col-sm-5">
								<div class="panel panel-primary">
										<div class="panel-heading">
								          <h3 class="panel-title">
								            <span ></span>¿La orden ha sido recibida completa?</h3>
								        </div>
								        <div class="panel-body">
								        	<div class="radio">
											  <label>
											    <input type="radio" name="completo" id="falla_1" value="1" >
											    	Si
											  </label>
											</div>
											<div class="radio">
											  <label>
											    <input type="radio" name="completo" id="falla_2" value="0">
											    	No 
											  </label>
											</div>
											
								        </div>
									
								</div>
							</div>
							
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>
					<input type="submit" class="btn btn-success" value="Guardar">
				</div>
				</form>
			</div>
		</div>
	</div>