<?php 
function auntenticacion(){
    if(!verificar_usuario()){
        header("Location:login.php");
        exit();
    }
}
function verificar_usuario(){
    return isset($_SESSION["usuario"]);
}
session_start();
auntenticacion();

?>