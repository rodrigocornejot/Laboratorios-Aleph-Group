<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserccion de datos</title>
</head>
<body>
    <div class="mt-5 mx-auto container-form">
        <form method="post" action="controlador/ControladorInsercionDatos.php">
            <h2>INSERCCION DE DATOS</h2>
            <div class="form-group">
                <label>Inseccion de Datos:</label>
            </div>
            <div class="form-group">
                <label for="temp_1">Temperatura 1: </label>
                <input type="text" name="temp_1" id="temp_1" class="form-control">
            </div>
            <div class="form-group">
                <label for="temp_2">Temperatura 2: </label>
                <input type="text" name="temp_2" id="temp_2" class="form-control">
            </div>
            <div class="form-group">
                <label for="temp_3">Temperatura 3: </label>
                <input type="text" name="temp_3" id="temp_3" class="form-control">
            </div>
            <div class="form-group">
                <label for="temp_4">Temperatura 4: </label>
                <input type="text" name="temp_4" id="temp_4" class="form-control">
            </div>
            <div class="form-group">
                <label for="temp_5">Temperatura 5: </label>
                <input type="text" name="temp_5" id="temp_5" class="form-control">
            </div>
            <input type="submit" value="enviar" class="boton1">
        </form>
    </div>
</body>
</html>
<?php include_once "templates/footer.php" ?>