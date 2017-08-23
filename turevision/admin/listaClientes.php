<?php
  require '../conexion.php';

  $where = "";

  $sql = "SELECT * FROM pruebita";
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
    <title>Inicio de sesion</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h2 style="text-align:center">Registro de Clientes</h2>
      </div>
      <br>
      <div class="row table-responsive">
        <table class="table table-striped">
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

        </table>
      </div>

    </div>


  </body>
</html>
