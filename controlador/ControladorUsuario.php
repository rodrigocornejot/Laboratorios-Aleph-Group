<?php
require "../funciones/conexion.php";
session_start();
switch($_POST["tipo"]){
    case "agregar":

        $usuario = $_POST["usuario"];
        $password=$_POST['password'];
        $opciones = array('cost' => 12);
        $password_hash = password_hash($password,PASSWORD_BCRYPT,$opciones);
        $sql="insert into usuario (usuario,password) values (?,?)";
        $stmt=$conexion->prepare($sql);
        $stmt->bind_param("si",$usuario,$password_hash);
        $stmt->execute();
        header("Location: ../crud.php");
        break;

    case "actualizar":

        $id_usuario=$_POST["id_usuario"];
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $opciones = array('cost' => 12);
        $password_hash = password_hash($password,PASSWORD_BCRYPT,$opciones);

        $sql="UPDATE usuario SET usuario = ?,password = ? WHERE id_ = ?";
        $stmt=$conexion->prepare($sql);
        $stmt->bind_param("sii",$usuario,$password_hash,$id_usuario);
        $stmt->execute();
        header("Location: ../crud.php");
        break;
    case "eliminar":
        $id_usuario=$_POST['id_empleado'];
        $sql="delete from usuario where id_usuario=?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i",$id_usuario);
        $stmt->execute();
        header('location: ../crud.php');
        break;
}
?>