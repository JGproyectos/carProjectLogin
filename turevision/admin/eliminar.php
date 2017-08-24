<?php
  require '../conexion.php';

  $id = $_GET['id'];

  $sql = "DELETE FROM pruebita WHERE id = '$id' ";

  $resultado = $conexionDB->query($sql);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <title>Cambios Realizados</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="row" style="text-align:center">
          <?php if ($resultado) {?>
          <h3>Registro Eliminado</h3>
        <?php } else { ?>
        <h3>Error al Eliminar</h3>
        <?php }  ?>
        <a href="listaClientes.php" class="btn btn-primary">Regresar</a>
        </div>
      </div>

    </div>
  </body>
</html>
