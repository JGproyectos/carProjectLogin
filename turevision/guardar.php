<?php
  require 'conexion.php';

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];

  $sql = "INSERT INTO pruebita (nombre, email, telefono) VALUES('$nombre', '$email', '$telefono')";

  $resultado = $conexionDB->query($sql);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Usuarios registrados</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="row" style="text-align:center">
          <?php if ($resultado) {?>
          <h3>Regustro Guardado</h3>
        <?php } else { ?>
        <h3>Error al Guardar</h3>
        <?php }  ?>
        <a href="index.php" class="btn btn-primary">Regresar</a>
        </div>
      </div>

    </div>
  </body>
</html>
