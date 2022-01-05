<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <title>Inserccion de datos</title>
</head>
<body>
    <div class="mt-5 mx-auto container-form">
        <form method="post" action="controlador/ControladorInsercionDatos.php">
            <h2>INSERCCION DE DATOS</h2>
            <div class="form-group">
                <label>Inseccion de Datos:</label>
            </div>
            <br>
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
            <br>
            <div class="form-group">
                <label for="hr_1">HR% 1: </label>
                <input type="text" name="hr_1" id="hr_1" class="form-control">
            </div>
            <div class="form-group">
                <label for="hr_2">HR% 2: </label>
                <input type="text" name="hr_2" id="hr_2" class="form-control">
            </div>
            <div class="form-group">
                <label for="hr_3">HR% 3: </label>
                <input type="text" name="hr_3" id="hr_3" class="form-control">
            </div>
            <div class="form-group">
                <label for="hr_4">HR% 4: </label>
                <input type="text" name="hr_4" id="hr_4" class="form-control">
            </div>
            <div class="form-group">
                <label for="hr_5">HR% 5: </label>
                <input type="text" name="hr_5" id="hr_5" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="hpa_1">Presion(hPa) 1: </label>
                <input type="text" name="hpa_1" id="hpa_1" class="form-control">
            </div>
            <div class="form-group">
                <label for="hpa_2">Presion(hPa) 2: </label>
                <input type="text" name="hpa_2" id="hpa_2" class="form-control">
            </div>
            <div class="form-group">
                <label for="hpa_3">Presion(hPa) 3: </label>
                <input type="text" name="hpa_3" id="hpa_3" class="form-control">
            </div>
            <div class="form-group">
                <label for="hpa_4">Presion(hPa) 4: </label>
                <input type="text" name="hpa_4" id="hpa_4" class="form-control">
            </div>
            <div class="form-group">
                <label for="hpa_5">Presion(hPa) 5: </label>
                <input type="text" name="hpa_5" id="hpa_5" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="c_1">Lectura Carga(C) 1: </label>
                <input type="text" name="c_1" id="c_1" class="form-control">
            </div>
            <div class="form-group">
                <label for="c_2">Lectura Carga(C) 2: </label>
                <input type="text" name="c_2" id="c_2" class="form-control">
            </div>
            <div class="form-group">
                <label for="c_3">Lectura Carga(C) 3: </label>
                <input type="text" name="c_3" id="c_3" class="form-control">
            </div>
            <div class="form-group">
                <label for="c_4">Lectura Carga(C) 4: </label>
                <input type="text" name="c_4" id="c_4" class="form-control">
            </div>
            <div class="form-group">
                <label for="c_5">Lectura Carga (C) 5: </label>
                <input type="text" name="c_5" id="c_5" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="s_1">T. Integr. (s) 1: </label>
                <input type="text" name="s_1" id="s_1" class="form-control">
            </div>
            <div class="form-group">
                <label for="s_2">T. Integr. (s) 2: </label>
                <input type="text" name="s_2" id="s_2" class="form-control">
            </div>
            <div class="form-group">
                <label for="s_3">T. Integr. (s) 3: </label>
                <input type="text" name="s_3" id="s_3" class="form-control">
            </div>
            <div class="form-group">
                <label for="s_4">T. Integr. (s) 4: </label>
                <input type="text" name="s_4" id="s_4" class="form-control">
            </div>
            <div class="form-group">
                <label for="s_5">T. Integr. (s) 5: </label>
                <input type="text" name="s_5" id="s_5" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="fecha1">Fecha Nro.1: </label>
                <input type="date" name="fecha1" id="fecha1">
            </div>
            <div class="form-group">
                <label for="fecha2">Fecha Nro.2: </label>
                <input type="date" name="fecha2" id="fecha2">
            </div>
            <div class="form-group">
                <label for="fecha3">Fecha Nro.3: </label>
                <input type="date" name="fecha3" id="fecha3">
            </div>
            <div class="form-group">
                <label for="fecha4">Fecha Nro.4: </label>
                <input type="date" name="fecha4" id="fecha4">
            </div>
            <div class="form-group">
                <label for="fecha5">Fecha Nro.5: </label>
                <input type="date" name="fecha5" id="fecha5">
            </div>
            <input type="submit" value="enviar" class="boton1">
        </form>
    </div>
</body>
</html>
<?php include_once "templates/footer.php" ?>