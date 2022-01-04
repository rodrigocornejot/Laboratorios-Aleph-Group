<?php
include_once("templates/header.php");
include_once "funciones/conexion.php";
$id = $_POST['id_usuario'];
$sql = "select * from usuario where usuario = $id";
$result = $conexion->query($sql);
$user = $result->fetch_assoc();
?>
<div class="mx-auto mt-5 container-form" style="width: 400px;">
    <form action="controlador/ControladorUsuario.php" method="post">
        <div class="form-group">
            <label for="usuario">Usuario: </label>
            <input type="text" name="nom_ape" id="nom_ape" class="form-control" value="<?php echo $user['nom_ape']?>">
        </div>

        <div class="form-group">
            <label for="password">Contraseña: </label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group mt-2 d-flex justify-content-around">
            <input type="hidden" name="tipo" value="actualizar">
            <input type="hidden" name="id" value="<?php echo $user['id_usuario'] ?>">
            <button type="submit" class="btn btn-success">Success</button>
            <a href="crud.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>
</div>
<?php include_once "templates/footer.php" ?>