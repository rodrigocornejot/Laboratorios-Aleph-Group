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
<table border="1">
    <thead>
        <tr>
            <th colspan="8">Electrometro</th>
        </tr>
    </thead>
    <tbody>
        <?php while($filas=$resultado_electrometro->fetch_assoc()):?>
        <tr>
            <th colspan="8">Marca: <?php echo $filas['marca_e']?> </th>
            <th></th>
        </tr>
    <?php endwhile ?>
    </tbody>
</table>
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
            <th>R/h</th>
        </tr>
    </thead>
    <tbody>
        <?php while($filas=$resultado->fetch_assoc()):?>
        <tr>
            <td rowspan="5">0.85</td>
            <td><?php echo $filas['temp_1']?></td>
            <td>54</td>
            <td>1010</td>
            <td>-2.920000E-08</td>
            <td>60</td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td>1.00</td>
            <td>-4.81E-10</td>
            <td>-4.81E-10</td>
        </tr>
            <td><?php echo $filas['temp_2']?></td>
            <td>53</td>
            <td>1010</td>
            <td>-2.92E-08</td>
            <td>60</td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td>1.00</td>
            <td>-4.81E-10</td>
            <td>-4.81E-10</td>
        </tr>
        <tr>
            <td><?php echo $filas['temp_3']?></td>
            <td>54</td>
            <td>1010</td>
            <td>-2.92E-08</td>
            <td>60</td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td>1.00</td>
            <td>-4.81E-10</td>
            <td>-4.81E-10</td>
        </tr>
        <tr>
            <td><?php echo $filas['temp_4']?></td>
            <td>53</td>
            <td>1010</td>
            <td>-2.92E-08</td>
            <td>60</td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td>1.00</td>
            <td>-4.81E-10</td>
            <td>-4.81E-10</td>
        </tr>
        <tr>
            <td><?php echo $filas['temp_5']?></td>
            <td>53</td>
            <td>1010</td>
            <td>-2.92E-08</td>
            <td>60</td>
            <td>17-May-21</td>
            <td>Med</td>
            <td>-2.92E-08</td>
            <td>1.00</td>
            <td>-4.81E-10</td>
            <td>-4.81E-10</td>
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
            $PromedioHR;
            echo $PromedioHR=(54+53+54+54+54)/5
             ?>
             </td>
            <td><?php
            $PromedioPresion;
            echo $PromedioPresion=(1010+1010+1010+1010+1010)/5
            ?>
            </td>
            <td><?php
            $PromedioLectCar;
            echo $PromedioLectCar=(-0.0000000292+-0.0000000292+-0.00000002919+-0.00000002919+-0.00000002919)/5
            ?>
            </td>
            <td><?php
            $PromedioS;
            echo $PromedioS=(60+60+60+60+60)/5
            ?>
            </td>
            <td>  -</td>
            <td>  -</td>
            <td>-2.92E-08</td>
            <td>1.00</td>
            <td>-4.81E-10</td>
            <td>-4.81E-10</td>
        </tr>
        </tr>
    <?php endwhile ?>
    </tbody>
</table>