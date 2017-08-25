<?php
  require '../conexion.php';

  $where = "";


  if (!empty($_POST)) {
    $valor = $_POST['campo'];
    if (!empty($valor)) {
      $where = "WHERE nombre LIKE'%$valor%'";
    }
  }

  $sql = "SELECT * FROM pruebita $where";
  $resultado = $conexionDB->query($sql);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link href="../css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
      $('#mitabla').DataTable({
        "language":{
          "lengthMenu": "Mostrar _MENU_ Clientes registrados por página",
          "info": "Mostrando pagina _PAGE_ de _PAGES_",
          "infoEmpty": "No hay registros disponibles",
  				"infoFiltered": "(filtrada de _MAX_ registros)",
  				"loadingRecords": "Cargando...",
  				"processing":     "Procesando...",
  				"search": "Buscar:",
  				"zeroRecords":    "No se encontraron registros coincidentes",
  				"paginate": {
  					"next":       "Siguiente",
  					"previous":   "Anterior"
				      },
        }

      });

    });

    </script>

    <title>Inicio de sesion</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h2 style="text-align:center">Registro de Clientes</h2>
      </div>
      <div class="row">
        <a class="btn btn-primary" href="../nuevo.php">Nuevo Registro</a>
        </div>
        <form style="text-align:center"action="<?php $_SERVER ['PHP_SELF'] ?>" method="POST">
          <b>Nombre: </b>
          <input type="text" name="campo" id="campo" >
          <input class="btn btn-info" type="submit" id="enviar" name="enviar" value="Buscar" >
      <br>
      <br>
      <div class="row table-responsive">
        <table class="display" id="mitabla">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Teléfono</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $resultado -> fetch_array(MYSQL_ASSOC)) { ?>
            <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['nombre'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['telefono'] ?></td>
              <td><a href="modificar.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
              <td><a href="#" data-href="eliminar.php?id=<?php echo $row['id'] ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>

        </table>
      </div>

    </div>
    <!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>

					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>

		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>

  </body>
</html>
