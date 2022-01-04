<?php require_once 'funciones/sesion.php';
include_once "funciones/conexion.php";?>
<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<title>Laboratorios</title>
</head>

<body>
	<div class="container d-flex align-items-center justify-content-between" style="height : 100%">
		<a href="index.php">
            <img src="imagenes/aleph.png" width="200">
		</a>
		<div class="text-primary fs-1">
				Bienvenido 
		</div>
		<?php if ($_SESSION['admin']==1): ?>
		<div class="dropdown bg-dark">
			<a class="btn btn-secondary dropdown-toggle position-relative" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fas fa-bell"></i>
    		</a>
		</div>
			<?php endif; ?>
			<form action="controlador/ControladorLogin.php" method="POST" class="d-flex justify-content-end">
				<input type="hidden" name="tipo" value="logout">
				<button type="submit" class="btn btn-danger">Cerrar sesion</button>
			</form>
		</div>
