<nav class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="index.php" class="navbar-brand">ALEPH GROUP</a>
	</div>
</nav>

<?php

include 'funciones/conexion.php';
$sql = "select * from usuario";
$resultado = $conexion->query($sql);
?>
<div class="container mt-5">

	<a href="agregar.php" class="btn btn-success my-2">Nuevo</a>
	<table class="table table-light">
		<thead>
			<tr class="table-dark">
				<th>USUARIO</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($filas = $resultado->fetch_assoc()):?>
				<tr>
					<td><?php echo $filas['usuario'] ?></td>
					<td class="d-flex">
						<form action="editar.php" method="POST" >
							<input type="hidden" name="id" value="<?php echo $filas['usuario'] ?>">
							<input type="hidden" name="tipo" value="actualizar" >
							<button type="submit" class="btn btn-warning">Editar</button>
						</form>
						<form action="controlador/ControladorUsuario.php" method="POST" class="ms-2">
							<input type="hidden" name="tipo" value="eliminar" >
							<input type="hidden" name="id" value="<?php echo $filas['usuario'] ?>">
							<button type="submit" class="btn btn-danger">Eliminar</button>
						</form>
					</td>
				</tr>
			<?php endwhile?>
		</tbody>
	</table>
</div>
<?php include_once "templates/footer.php" ?>