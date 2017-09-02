<?php
	require '../turevision/funcs/conexion.php';
	include '../turevision/funcs/funcs.php';

	if(isset($_GET["id"]) AND isset($_GET['val']))
	{
		$idUsuario = $_GET['id'];
		$token = $_GET['val'];

		$mensaje = validaIdToken($idUsuario, $token);
	}
?>
<html>
	<head>
		<title>Registro</title>
		<link rel="stylesheet" href="../turevision/login/css/bootstrap.min.css" >
		<link rel="stylesheet" href="../turevision/login/css/bootstrap-theme.min.css" >
    <script src="../turevision/login/js/jquery-3.2.1.min.js"></script>
		<script src="../turevision/login/js/bootstrap.min.js" ></script>

	</head>

	<body>
		<div class="container">
			<div class="jumbotron">

				<h1><?php echo $mensaje; ?></h1>

				<br />
				<p><a class="btn btn-primary btn-lg" href="../turevision/login/index.php" role="button">Iniciar Sesi&oacute;n</a></p>
			</div>
		</div>
	</body>
</html>
