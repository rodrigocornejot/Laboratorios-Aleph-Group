<?php
include_once "../funciones/conexion.php";
switch ($_POST['tipo']) {
    case "login":
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $sql = "select * from usuario where usuario=?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($id_usuario,$id_rol,$id_usuario,$password_hash);
        $user = $stmt->fetch();

        if ($user) {
            if ($password==$password_hash) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                $_SESSION['rol']= $id_rol;
                header("Location: ../insercion_datos.php");
            } else {
                header("Location: ../login.php?error=p");
            }
        }else {
            header("Location: ../login.php?error=p");
        }
        break;
    case "logout":
        session_start();
        session_destroy();
        header("Location: ../index.php");
        break;
}
