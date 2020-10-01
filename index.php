<!DOCTYPE html>
<html>
<head>
	<title>Practica 1</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

	<script src="librerias/datatables/jquery.dataTables.min.js"></script>
	<script src="librerias/datatables/dataTables.bootstrap4.min.js"></script>

	<link rel="stylesheet" type="text/css" href="librerias/datatables/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="librerias/datatables/dataTables.bootstrap4.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">

	
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<center><h2><b> PROYECTO KONAMI </b></h2></center>
					<div id="tablaCrudLoad"></div>
				</div>
			</div>
		</div>

<!-- Modal -->
		<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel" >Agregar nuevo videojuego</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       		<label>Nombre</label>
		       		<input type="text" name="nombre" id="nombre" class="form-control">

		       		<label>Tipo</label>
		       		<input type="text" name="tipo" id="tipo" class="form-control">

		       		<label>Fecha de Lanzamiento</label>
		       		<input type="text" name="fecha" id="fecha" class="form-control">

		       		<label>Descripción</label>
		       		<input type="text" name="descripccion" id="descripccion" class="form-control">
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        <button type="button" class="btn btn-primary">Guardar</button>
		      </div>
		    </div>
		  </div>
		</div>
	</body>

	<script type="text/javascript">
		$(document).ready(function(){
			//funcion load de jquery
			//primero agregamos el id de la seccion donde se cargara el archivo 
			$('#tablaCrudLoad').load("vistas/tablaCrud.php");
		});
	</script>

</html>