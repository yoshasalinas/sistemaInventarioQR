<?php

include('conexion_db.php');
$db = new Db();

$posData = [];
$posData[0]=$_POST['numSerial'];
$posData[1]=$_POST['numDispositivo'];


$get_activo= "SELECT * FROM activos WHERE numeroSerial = '$posData[0]' OR numero_serial_dispositivo = '$posData[1]' " ;
    $result1 = $db -> Db_query($get_activo);

    while($fila=$result1->fetch_array()){ //recorre el arreglo
        
       echo '<script>
       alert("Número Serial: ' . $fila["numeroSerial"] . '\\nNúmero de Dispositivo: ' . $fila["numero_serial_dispositivo"] . '"); 
        window.history.go(-1);</script>';
                  
        }//muestro en el alert la info de la tabla, para verificar que si esta buscando 


?>