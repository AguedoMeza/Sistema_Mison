<head>
	<meta content="charset=utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>SISTEMA</title>
	
	<link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css"  />
	<link rel="stylesheet" href="../assets/css/font-awesome.css"  />
	<link rel="stylesheet" href="../assets/css/custom.css"  />
	<link rel="stylesheet" href="../assets/css/responsiveslides.css">
	<link rel="stylesheet" href="../assets/css/demo.css">
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/plugins/select2/select2.css" />

	<link href='../iconos/logo.png' rel='shortcut icon' type='image/png'/>
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="../assets/css/personal.css"/>
	
	
	<script src="../assets/js/custom.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.dataTables.min.js"></script>
	<script src="../assets/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.metisMenu.js"></script>
    
	<script src="../assets/js/responsiveslides.min.js"></script>
	<script src="../assets/plugins/select2/select2.full.min.js"></script>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Las 3 etiquetas anteriores deben ir en primer lugar en el bloque head -->
<title>Diálogos modales en Bootstrap</title>
<!-- CSS Bootstrap -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>



<div class="modal fade" id="modal5" tabindex="-1" role="dialog"
aria-labelledby="titulo-modal5" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
<span aria-hidden="true">&times;</span>
</button>
<h4 class="modal-title" id="titulo-modal5">Confirmación orden</h4>
</div>
<div class="modal-body">


<form>
<div class="modal-body">
      Recibido:
      <label class="checkbox-inline"><input type="radio" name="recibido" value="1"  >Si </label>
      <label class="checkbox-inline"><input type="radio" name="recibido" value="0">No</label>
      <br>
      <br>
    
     Completo:
      <label class="checkbox-inline"><input type="radio" name="completo" value="1" >Si</label>
      <label class="checkbox-inline"><input type="radio" name="completo" value="0">No</label>

      </div>



<div class="modal-footer">
<button type="submit" class="btn btn-primary" data-dismiss="modal"
id="btn-confirmar"> Confirmar </button>
<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
</div>
</div>
</div>
</div> 
</div>
</div>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<script>
// evento al iniciar la acción de mostrar el diálogo
$('#modal5').on('show.bs.modal', function (event) {
var boton = $(event.relatedTarget); // Obtener el botón que disparó el evento
var formato = boton.data('formato'); // extraer información de los atributos data-*
if ( formato != 'Cartucho' ) {
var modal = $(this); // una referencia al propio diálogo
modal.find('.modal-title').text('Confirmación de la orden ' + formato);
modal.find('.modal-body #formato').text(formato);
}
else {
alert("El formato seleccionado ya no está disponible");
event.preventDefault();
}
})
// evento cuando se pulsa el botón de confirmar compra

// evento luego de cerrar el diálogo
$('#modal5').on('hidden.bs.modal', function (event) {
// verificaremos si se confirmó la compra
var modal = $(this); // una referencia al propio diálogo
if ( modal.data('compra-confirmada') === true ) {
alert('Se ha registrado como orden entregada' +
$('#cantidad').val() + ' ' + $('#formato').text()
);
// eliminar el atributo al cerrar el diálogo
modal.data( 'compra-confirmada', false );
}
});
</script>

