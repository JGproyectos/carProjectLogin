<?php
  require 'conexion.php';

  $where="";

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
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Inicio de sesion</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h2 style="text-align:center">Buscar Informe de Carro</h2>
      </div>


        <form style="text-align:center"action="<?php $_SERVER ['PHP_SELF'] ?>" method="POST">
          <b>Nombre: </b><input type="text" name="campo" value=""id="campo" >
          <input class="btn btn-info" type="submit" id="enviar" name="enviar" value="Buscar" >
        </form>
      </div>

    </div>

  </body>
</html>
