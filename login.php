<?php 
session_start();
if(isset($_SESSION["usuario"])){
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body style="background-color: rgb(226, 226, 226);">
    <div class="fondo">
        <div class="d-flex align-items-center justify-content-center vh-100 ">
            <form action="controlador/ControladorLogin.php" method="POST" class="bg-light p-5 rounded">
                <h2>Iniciar Sesion</h2>
                <div class="form-group">
                    <label for="dni">USUARIO</label>
                    <input type="text" id="usuario" name="usuario" class="form-control <?php echo isset($_GET['error'])?'is-invalid':''?>" maxlength="8">
                </div>
                <div class="form-group">
                    <label for="password">CONTRASEÑA</label>
                    <input type="password" id="password" name="password" class="form-control <?php echo isset($_GET['error'])?'is-invalid':''?>">
                    <?php if(isset($_GET["error"])):?>
                        <p class="invalid-feedback d-block"> usuario o contraseña incorrecto</p>
                    <?php endif ?>
                </div>
                <input type="hidden" name="tipo" value="login">
                <button type="submit" class="btn btn-success">Iniciar sesion</button>
                
            </form>
        </div>
    </div>
    <?php include_once "templates/footer.php" ?>