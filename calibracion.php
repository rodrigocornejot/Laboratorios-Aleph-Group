<?php include "funciones/conexion.php";

$sql="select * FROM temperatura";
$resultado=$conexion->query($sql);

$sql_electrometro="select * FROM electrometro";
$resultado_electrometro=$conexion->query($sql_electrometro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <title>CALIBRACION</title>
</head>
<body>
<h1>TOMA DE DATOS PATRON DEL ALEPH SAC</h1>
<div class="card-body">
    <div class="toolbar">
        <table class="table-responsive" border="1">
            <thead>
                <tr class="table-secondary">
                    <th colspan="8">Electrometro</th>
                </tr>
            </thead>
            <tbody>
                <?php while($filas=$resultado_electrometro->fetch_assoc()):?>
                <tr>
                    <td colspan="8">
                        <label>Marca: </label><?php echo $filas['marca_e']?>
                        <label>Modelo: </label><?php echo $filas['modelo_e']?>
                        <label>Serie: </label><?php echo $filas['serie_e']?>
                        <label>Certificado: </label><?php echo $filas['certificado_e']?>
                        <label>Fecha: </label><?php echo $filas['fecha_e']?>
                    </td>
                </tr>
            </tbody>
            <?php endwhile ?>
        </table>
    </div>
</div>

<div class="card-body">
    <div class="toolbar">
        <table class="table-responsive" border="1">
            <thead>
                <tr class="table-primary">
                    <th>&nbsp;atenuador&nbsp;</th>
                    <th style="text-align: center" colspan="18">SIN ATENUADORES</th>
                </tr>
            <tr class="table-secondary">
                    <th>Dist(cm)</th>
                    <th>T(C)</th>
                    <th>HR(%)</th>
                    <th>Presion(hPa)</th>
                    <th>Lectura carga<br>(C)</th>
                    <th>T. Integr. (s)</th>
                    <th>Fecha ref.<br>(toma datos)</th>
                    <th>Rango<br>Electrometro</th>
                    <th>Lectura Carga<br>Corregida (C)</th>
                    <th>k TP</th>
                    <th>C/s (corregida)</th>
                    <th>C/s (neta corregida)</th>
                    <th>R/h</th>
                    <th>Kar (Gy/h)</th>
                    <th>rem/h</th>
                    <th>H°(10)(Sv/h)</th>
                    <th>D(10)(Gy/h)</th>  
                    <th>Hp(10)(Sv/h)</th>
                    <th>Hp(0.07)(Sv/h)</th>
                </tr>
            </thead>
            <tbody>
                <?php while($filas=$resultado->fetch_assoc()):?>
                <tr>
                    <td class="table-secondary" rowspan="5">0.85</td>
                    <td class="cell_yellow">
                        <?php echo $filas['temp_1']?>
                    </td>
                    <td class="cell_yellow">
                        <?php echo $filas['hr_1']?>
                    </td>
                    <td class="cell_yellow">
                        <?php echo $filas['hpa_1']?>
                    </td>
                    <td class="cell_yellow">
                        <?php echo $filas['c_1']?>
                    </td>
                    <td class="cell_yellow">
                        <?php echo $filas['s_1']?>
                    </td>
                    <td class="cell_yellow">17-May-21</td>
                    <td class="cell_yellow">Med</td>
                    <td class="cell_yellow">-2.92E-08</td>
                    <td class="cell_yellow"><?php
                    $temp1=$filas['temp_1'];
                    $hpa_1=$filas['hpa_1'];
                    $ktp_1;
                    echo $ktp_1=((273.2+$temp1)*1013.25/(273.2+22)*$hpa_1)
                    ?>
                    </td>
                    <td class="cell_yellow">-4.81E-10</td>
                    <td class="cell_yellow">-4.81E-10</td>
                    <td class="cell_yellow"></td>
                    <td class="cell_yellow"></td>
                    <td class="cell_yellow"></td>
                    <td class="cell_orange">5.239837E-02</td>
                    <td class="cell_orange">0.05283502</td>
                    <td class="cell_orange">5.283502E-02</td>
                    <td class="cell_orange">5.458163E-02</td>
                </tr>
                    <td class="cell_orange_c">
                        <?php echo $filas['temp_2']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['hr_2']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['hpa_2']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['c_2']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['s_2']?>
                    </td>
                    <td class="cell_orange_c">17-May-21</td>
                    <td class="cell_orange_c">Med</td>
                    <td class="table-success">-2.92E-08</td>
                    <td class="table-success"><?php
                    $temp2=$filas['temp_2'];
                    $hpa_2=$filas['hpa_2'];
                    $ktp_2;
                    echo $ktp_2=((273.2+$temp2)*1013.25/(273.2+22)*$hpa_2)
                    ?></td>
                    <td class="table-success">-4.81E-10</td>
                    <td class="table-success">-4.81E-10</td>
                    <td class="cell_red"></td>
                    <td class="cell_pink"></td>
                    <td class="cell_pink"></td>
                    <td class="cell_purple">5.24E-02</td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                </tr>
                <tr>
                    <td class="cell_orange_c">
                        <?php echo $filas['temp_3']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['hr_3']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['hpa_3']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['c_3']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['s_3']?>
                    </td>
                    <td class="cell_orange_c">17-May-21</td>
                    <td class="cell_orange_c">Med</td>
                    <td class="table-success">-2.92E-08</td>
                    <td class="table-success"><?php
                    $temp3=$filas['temp_3'];
                    $hpa_3=$filas['hpa_3'];
                    $ktp_3;
                    echo $ktp_3=((273.2+$temp3)*1013.25/(273.2+22)*$hpa_3)
                    ?></td>
                    <td class="table-success">-4.81E-10</td>
                    <td class="table-success">-4.81E-10</td>
                    <td class="cell_red"></td>
                    <td class="cell_pink"></td>
                    <td class="cell_pink"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                </tr>
                <tr>
                    <td class="cell_orange_c">
                        <?php echo $filas['temp_4']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['hr_4']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['hpa_4']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['c_4']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['s_4']?>
                    </td>
                    <td class="cell_orange_c">17-May-21</td>
                    <td class="cell_orange_c">Med</td>
                    <td class="table-success">-2.92E-08</td>
                    <td class="table-success">
                    <?php
                    $temp4=$filas['temp_4'];
                    $hpa_4=$filas['hpa_4'];
                    $ktp_4;
                    echo $ktp_4=((273.2+$temp4)*1013.25/(273.2+22)*$hpa_4)
                    ?>
                    </td>
                    <td class="table-success">-4.81E-10</td>
                    <td class="table-success">-4.81E-10</td>
                    <td class="cell_red"></td>
                    <td class="cell_pink"></td>
                    <td class="cell_pink"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                </tr>
                <tr>
                    <td class="cell_orange_c">
                        <?php echo $filas['temp_5']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['hr_5']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['hpa_5']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['c_5']?>
                    </td>
                    <td class="cell_orange_c">
                        <?php echo $filas['s_5']?>
                    </td>
                    <td class="cell_orange_c">17-May-21</td>
                    <td class="cell_orange_c">Med</td>
                    <td class="table-success">-2.92E-08</td>
                    <td class="table-success"><?php
                    $temp5=$filas['temp_5'];
                    $hpa_5=$filas['hpa_5'];
                    $ktp_5;
                    echo $ktp_5=((273.2+$temp5)*1013.25/(273.2+22)*$hpa_5)
                    ?></td>
                    <td class="table-success">-4.81E-10</td>
                    <td class="table-success">-4.81E-10</td>
                    <td class="cell_red"></td>
                    <td class="cell_pink"></td>
                    <td class="cell_pink"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                    <td class="cell_purple"></td>
                </tr>
                <tr>
                <tr>
                    <td class="table-secondary">>Prom.</td>
                    <td><?php 
                    $temp1=$filas['temp_1'];
                    $temp2=$filas['temp_2'];
                    $temp3=$filas['temp_3'];
                    $temp4=$filas['temp_4'];
                    $temp5=$filas['temp_5'];
                    $PromedioTemp;
                    echo $PromedioTemp=($temp1+$temp2+$temp3+$temp4+$temp5)/5
                    ?>
                    </td>
                    <td><?php
                    $hr_1=$filas['hr_1'];
                    $hr_2=$filas['hr_2'];
                    $hr_3=$filas['hr_3'];
                    $hr_4=$filas['hr_4'];
                    $hr_5=$filas['hr_5'];
                    $PromedioHR;
                    echo $PromedioHR=($hr_1+$hr_2+$hr_3+$hr_4+$hr_5)/5
                    ?>
                    </td>
                    <td><?php
                    $hpa_1=$filas['hpa_1'];
                    $hpa_2=$filas['hpa_2'];
                    $hpa_3=$filas['hpa_3'];
                    $hpa_4=$filas['hpa_4'];
                    $hpa_5=$filas['hpa_5'];
                    $PromedioPresion;
                    echo $PromedioPresion=($hpa_1+$hpa_2+$hpa_3+$hpa_4+$hpa_5)/5
                    ?>
                    </td>
                    <td><?php
                    $c_1=$filas['c_1'];
                    $c_2=$filas['c_2'];
                    $c_3=$filas['c_3'];
                    $c_4=$filas['c_4'];
                    $c_5=$filas['c_5'];
                    $PromedioLectCar;
                    echo $PromedioLectCar=($c_1+$c_2+$c_3+$c_4+$c_5)/5
                    ?>
                    </td>
                    <td><?php
                    $s_1=$filas['s_1'];
                    $s_2=$filas['s_2'];
                    $s_3=$filas['s_3'];
                    $s_4=$filas['s_4'];
                    $s_5=$filas['s_5'];
                    $PromedioS;
                    echo $PromedioS=($s_1+$s_2+$s_3+$s_4+$s_5)/5
                    ?>
                    </td>
                    <td>  -</td>
                    <td>  -</td>
                    <td>-2.92E-08</td>
                    <td>
                    <?php
                    $ktp_1;
                    $ktp_2;
                    $ktp_3;
                    $ktp_4;
                    $ktp_5;
                    $PromedioKTP;
                    echo $PromedioKTP=($ktp_1+$ktp_2+$ktp_3+$ktp_4+$ktp_5)/5
                    ?>
                    </td>
                    <td>-4.81E-10</td>
                    <td>-4.81E-10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tr>
                <tr>
                <tr>
                    <td class="table-secondary">D.S</td>
                    <td><?php
                    $PromedioTemp;
                    $temp1;
                    $temp2;
                    $temp3;
                    $temp4;
                    $temp5;
                    $DesEst_Temp;
                    echo $DesEst_Temp=(pow((($temp1-$PromedioTemp)+($temp2-$PromedioTemp)+($temp3-$PromedioTemp)+($temp4-$PromedioTemp)+($temp5-$PromedioTemp)/5),2))
                    ?>
                    </td>
                    <td><?php
                    $PromedioHR;
                    $hr_1;
                    $hr_2;
                    $hr_3;
                    $hr_4;
                    $hr_5;
                    $DesEst_HR;
                    echo $DesEst_HR=(pow((($hr_1-$PromedioHR)+($hr_2-$PromedioHR)+($hr_3-$PromedioHR)+($hr_4-$PromedioHR)+($hr_5-$PromedioHR)/5),2))
                    ?>
                    </td>
                    <td>
                    <?php
                    $PromedioPresion;
                    $hpa_1;
                    $hpa_2;
                    $hpa_3;
                    $hpa_4;
                    $hpa_5;
                    $DesEst_Presion;
                    echo $DesEst_Presion=(pow((($hpa_1-$PromedioPresion)+($hpa_2-$PromedioPresion)+($hpa_3-$PromedioPresion)+($hpa_4-$PromedioPresion)+($hpa_5-$PromedioPresion)/5),2))
                    ?>
                    </td>
                    <td>
                    <?php
                    $PromedioLectCar;
                    $c_1;
                    $c_2;
                    $c_3;
                    $c_4;
                    $c_5;
                    $DesEst_LectCar;
                    echo $DesEst_LectCar=(pow((($c_1-$PromedioLectCar)+($c_2-$PromedioLectCar)+($c_3-$PromedioLectCar)+($c_4-$PromedioLectCar)+($c_5-$PromedioLectCar)/5),2))
                    ?>
                    </td>
                    <td>
                    <?php
                    $PromedioS;
                    $s_1;
                    $s_2;
                    $s_3;
                    $s_4;
                    $s_5;
                    $DesEst_S;
                    echo $DesEst_S=(pow((($s_1-$PromedioS)+($s_2-$PromedioS)+($s_3-$PromedioS)+($s_4-$PromedioS)+($s_5-$PromedioS)/5),2))
                    ?>
                    </td>
                    <td>-</td>
                    <td>-</td>
                    <td></td>
                    <td>
                    <?php
                    $PromedioKTP;
                    $ktp_1;
                    $ktp_2;
                    $ktp_3;
                    $ktp_4;
                    $ktp_5;
                    $DesEst_KTP;
                    echo $DesEst_KTP=(pow((($ktp_1-$PromedioKTP)+($ktp_2-$PromedioKTP)+($ktp_3-$PromedioKTP)+($ktp_3-$PromedioKTP)+($ktp_4-$PromedioKTP)+($ktp_5-$PromedioKTP)/5),2))
                    ?>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tr>
                <tr>
                <tr>
                    <td class="table-secondary">C.V.(%)</td>
                    <td>
                    <?php
                    $PromedioTemp;
                    $DesEst_Temp;
                    $CV_Temp;
                    echo $CV_Temp=(($DesEst_Temp/$PromedioTemp)*100)
                    ?> 
                    </td>
                    <td>
                    <?php
                    $PromedioHR;
                    $DesEst_HR;
                    $CV_HR;
                    echo $CV_HR=(($DesEst_HR/$PromedioHR)*100)
                    ?>
                    </td>
                    <td>
                    <?php
                    $PromedioPresion;
                    $DesEst_Presion;
                    $CV_Presion;
                    echo $CV_Presion=(($DesEst_Presion/$PromedioPresion)*100)
                    ?>
                    </td>
                    <td>
                    <?php
                    $PromedioLectCar;
                    $DesEst_LectCar;
                    $CV_LectCar;
                    echo $CV_LectCar=(($DesEst_LectCar/$PromedioLectCar)*100)
                    ?>
                    </td>
                    <td>
                    <?php
                    $PromedioS;
                    $DesEst_S;
                    $CV_S;
                    echo $CV_S=(($DesEst_S/$PromedioS)*100)
                    ?>
                    </td>
                    <td> -</td>
                    <td> -</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tr>
                <tr>
                <tr>
                    <td class="table-secondary">% Fuga</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tr>
            <?php endwhile ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
