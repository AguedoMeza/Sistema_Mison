	<?php
include("../configuracion/conexion.php");
$Vid_orden = $_GET["id"];

?>




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

      <label for="cantidad">Cantidad: </label>
      <input type="number" class="form-control" id="cantidad" name="id_cantidad" value="<?php echo $Vid_orden;?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" name = "confirmar">Guardar</button>
      </div>
    </div>
  </div>
</div>