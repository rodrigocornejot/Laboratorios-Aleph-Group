<h1>TOMA DE DATOS</h1>

<?php
include "funciones/conexion.php";

$sql="select * FROM temperatura";
$resultado=$conexion->query($sql);

$sql_electrometro="select * FROM eletrometro";
$resultado_electrometro=$conexion->query($sql_electrometro);

?>
<!--<table border="1">
    <thead>
        <tr>
            <th colspan="4">datos de la fuente</th>
        </tr> 
        <tr>
            <th>fuente</th>
            <th>feche ref.</th>
            <th>GBq</th>
            <th>Ci</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Cs-137</td>
            <td>25/07/2016</td>
            <td>573,5</td>
            <td>15,5</td>
        </tr>
    </tbody>
</table>-->
<br>
<!--<table border="1">
    <thead>
        <tr>
            <th colspan="2">ATENUADORES(mm)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>I(Grafito)</td>
            <td>5,0</td>
        </tr>
        <tr>
            <td>II(Plomo)</td>
            <td>22,0</td>
        </tr>
        <tr>
            <td>III(Plomo)</td>
            <td>14,0</td>
        </tr>
        <tr>
            <td>IV(Plomo)</td>
            <td>42 ,0</td>
        </tr>
        <tr>
            <td>V(Plomo)</td>
            <td>7,0</td>
        </tr>   
    </tbody>
</table>-->

<br>
<h1>Calculos</h1>
<table border="1">
    <thead>
       <tr>
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
            <td rowspan="5">0.85</td>
            <td><?php echo $filas['temp_1']?></td>
            <td><?php echo $filas['hr_1']?></td>
            <td><?php echo $filas['hpa_1']?></td>
            <td><?php echo $filas['c_1']?></td>
            <td><?php echo $filas['s_1']?></td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td><?php
            $temp1=$filas['temp_1'];
            $hpa_1=$filas['hpa_1'];
            $ktp_1;
            echo $ktp_1=((273.2+$temp1)*1013.25/(273.2+22)*$hpa_1)
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
            <td><?php echo $filas['temp_2']?></td>
            <td><?php echo $filas['hr_2']?></td>
            <td><?php echo $filas['hpa_2']?></td>
            <td><?php echo $filas['c_2']?></td>
            <td><?php echo $filas['s_2']?></td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td><?php
            $temp2=$filas['temp_2'];
            $hpa_2=$filas['hpa_2'];
            $ktp_2;
            echo $ktp_2=((273.2+$temp2)*1013.25/(273.2+22)*$hpa_2)
            ?></td>
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
        <tr>
            <td><?php echo $filas['temp_3']?></td>
            <td><?php echo $filas['hr_3']?></td>
            <td><?php echo $filas['hpa_3']?></td>
            <td><?php echo $filas['c_3']?></td>
            <td><?php echo $filas['s_3']?></td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td><?php
            $temp3=$filas['temp_3'];
            $hpa_3=$filas['hpa_3'];
            $ktp_3;
            echo $ktp_3=((273.2+$temp3)*1013.25/(273.2+22)*$hpa_3)
            ?></td>
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
        <tr>
            <td><?php echo $filas['temp_4']?></td>
            <td><?php echo $filas['hr_4']?></td>
            <td><?php echo $filas['hpa_4']?></td>
            <td><?php echo $filas['c_4']?></td>
            <td><?php echo $filas['s_4']?></td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td>
            <?php
            $temp4=$filas['temp_4'];
            $hpa_4=$filas['hpa_4'];
            $ktp_4;
            echo $ktp_4=((273.2+$temp4)*1013.25/(273.2+22)*$hpa_4)
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
        <tr>
            <td><?php echo $filas['temp_5']?></td>
            <td><?php echo $filas['hr_5']?></td>
            <td><?php echo $filas['hpa_5']?></td>
            <td><?php echo $filas['c_5']?></td>
            <td><?php echo $filas['s_5']?></td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td><?php
            $temp5=$filas['temp_5'];
            $hpa_5=$filas['hpa_5'];
            $ktp_5;
            echo $ktp_5=((273.2+$temp5)*1013.25/(273.2+22)*$hpa_5)
            ?></td>
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
        <tr>
        <tr>
            <td>Prom.</td>
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
            <td>D.S</td>
            <td><?php
            $PromedioTemp;
            $temp1;
            $temp2;
            $temp3;
            $temp4;
            $temp5;
            $DesEst_Temp;
            echo $DesEst_Temp=(sqrt((pow($temp1-$PromedioTemp),2)+(pow($temp2-$PromedioTemp),2)+(pow($temp3-$PromedioTemp),2)+(pow($temp4-$PromedioTemp),2)+(pow($temp5-$PromedioTemp),2)/5))));
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
    <?php endwhile ?>
    </tbody>
</table>