<?php
include_once "../funciones/conexion.php";

$tem_1 = $_POST['temp_1'];
$tem_2 = $_POST['temp_2'];
$tem_3 = $_POST['temp_3'];
$tem_4 = $_POST['temp_4'];
$tem_5 = $_POST['temp_5'];

$sql="insert into temperatura (temp_1, temp_2, temp_3, temp_4, temp_5) values (?,?,?,?,?)";
$stmt=$conexion->prepare($sql);
$stmt->bind_param("ddddd",$tem_1,$tem_2,$tem_3,$tem_4,$tem_5);
if($stmt->execute()){
	header("Location: ../calibracion.php");
}else{
	header("Location: insercion_datos.php?error");
}
?>