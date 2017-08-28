<?php


require '../conexion.php';
$id = $_GET['id'];
$sql = "SELECT * FROM pruebita WHERE id ='$id'";
$resultado = $conexionDB -> query($sql);
$row = $resultado->fetch_array(MYSQL_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-theme.css">
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <title>Modificar Tabla</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <h3 style="text-align:center">MODIFICAR REGISTRO</h3>
    </div>

    <form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
      <div class="form-group">
        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value='<?php echo $row['nombre']; ?>' required>
        </div>
      </div>

      <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" >

      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" value='<?php echo $row['email']; ?>' required>
        </div>
      </div>

      <div class="form-group">
        <label for="telefono" class="col-sm-2 control-label">Telefono</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value='<?php echo $row['telefono']; ?>'>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="listaClientes.php" class="btn btn-default">Regresar</a>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
