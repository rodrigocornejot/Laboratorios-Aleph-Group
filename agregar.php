<?php include_once "templates/header.php" ?>
<div class="mt-5 mx-auto container-form " style="width: 400px;">
    <form action="controlador/ControladorUsuario.php" method="post">
        <div class="form-group">
            <label for="usuario">Usuario </label>
            <input type="text" name="usuario" id="usuario" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="password">Contraseña: </label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <?php
                include_once "funciones/conexion.php";
                $sql = "select * from usuario";
                $stmt = $conexion->query($sql);
            ?>
        </div>

        <input type="hidden" name="tipo" value="agregar">
        <button type="submit" class="btn btn-success">Success</button>
        <a href="crud.php" class="btn btn-dark">Regresar</a>
    </form>
</div>
<?php include_once "templates/footer.php" ?>