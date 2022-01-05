<?php
include_once "../funciones/conexion.php";

//Temperatura

$tem_1 = $_POST['temp_1'];
$tem_2 = $_POST['temp_2'];
$tem_3 = $_POST['temp_3'];
$tem_4 = $_POST['temp_4'];
$tem_5 = $_POST['temp_5'];

//HR%

$hr_1 = $_POST['hr_1'];
$hr_2 = $_POST['hr_2'];
$hr_3 = $_POST['hr_3'];
$hr_4 = $_POST['hr_4'];
$hr_5 = $_POST['hr_5'];

//Presion(hPa)

$hpa_1 = $_POST['hpa_1'];
$hpa_2 = $_POST['hpa_2'];
$hpa_3 = $_POST['hpa_3'];
$hpa_4 = $_POST['hpa_4'];
$hpa_5 = $_POST['hpa_5'];

//Lectura Carga(C)

$c_1 = $_POST['c_1'];
$c_2 = $_POST['c_2'];
$c_3 = $_POST['c_3'];
$c_4 = $_POST['c_4'];
$c_5 = $_POST['c_5'];

//T. integr. (s)

$s_1 = $_POST['s_1'];
$s_2 = $_POST['s_2'];
$s_3 = $_POST['s_3'];
$s_4 = $_POST['s_4'];
$s_5 = $_POST['s_5'];

//fecha

$fecha1 = $_POST['fecha1'];
$fecha2 = $_POST['fecha2'];
$fecha3 = $_POST['fecha3'];
$fecha4 = $_POST['fecha4'];
$fecha5 = $_POST['fecha5'];

$sql="insert into temperatura (temp_1, temp_2, temp_3, temp_4, temp_5, hr_1, hr_2, hr_3, hr_4, hr_5, hpa_1, hpa_2, hpa_3, hpa_4, hpa_5, c_1, c_2, c_3, c_4, c_5, s_1, s_2, s_3, s_4, s_5, fecha1, fecha2, fecha3, fecha4, fecha5) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=$conexion->prepare($sql);
$stmt->bind_param("dddddiiiiiiiiiidddddiiiiisssss",$tem_1,$tem_2,$tem_3,$tem_4,$tem_5,$hr_1,$hr_2,$hr_3,$hr_4,$hr_5,$hpa_1,$hpa_2,$hpa_3,$hpa_4,$hpa_5,$c_1,$c_2,$c_3,$c_4,$c_5,$s_1,$s_2,$s_3,$s_4,$s_5,$fecha1,$fecha2,$fecha3,$fecha4,$fecha5);
if($stmt->execute()){
	header("Location: ../calibracion.php");
}else{
	header("Location: insercion_datos.php?error");
}
?>