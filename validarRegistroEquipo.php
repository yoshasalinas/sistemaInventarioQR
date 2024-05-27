
<?php
    include('conexion_db.php');
    $db = new Db();

    $posData = [];
    $posData[0]=$_POST['estatus'];
    $posData[1]= $_POST['tipoUbicacion'];
    $posData[2]= $_POST['numSerial'];
    $posData[3]= $_POST['numDispositivo'];
    $posData[4]= $_POST['numTecNM'];
    $posData[5]= $_POST['tipoActivo'];
    $posData[6]= $_POST['nombreActivo'];
    $posData[7]= $_POST['fechaAlta'];
    $posData[8]= $_POST['marca'];
    $posData[9]= $_POST['modelo'];
    $posData[10]= $_POST['color'];
    $posData[11]= $_POST['descripcionActivo'];
    $posData[12]= $_POST['archivoImagen'];
    $posData[13]= $_POST['archivoQR'];
    $posData[14]= $_POST['cantidad'];

    $posData2 = [];
    $posData2[2] = $_POST['capacidadMemoria'];
    $posData2[3] = $_POST['procesador'];
    $posData2[4] = $_POST['discoDuro'];
    $posData2[5] = $_POST['pulgadas'];
    $posData2[6] = $_POST['resolucion'];
    $posData2[7] = $_POST['conectividad'];
    $posData2[8] = $_POST['tipoEntrada'];

    $consultaUno = "INSERT INTO activos (idx_estatus, idx_ubicacion, numeroSerial, numero_serial_dispositivo,
    numero_serial_tecNM, tipo_activo ,nombre_activo, fecha_alta, marca, modelo, color, descripcion_activo, imagen_activo, imagen_codigo_qr,cantidad) 
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $result = $db -> Db_query_save("iissssssssssssi",$consultaUno,$posData);

   if(!$result === TRUE){
    //echo($consultaUno);
    $idCabecera = $db -> getLastId();

    $consultaDos = "INSERT INTO activo_equipo (idx_activos,capacidad_memoria, procesador, disco_duro, pulgadas, resolucion, conectividad, tipo_entrada) 
    VALUES ($idCabecera,?,?,?,?,?,?,?)";     
    $result2 = $db -> Db_query_save("sssssss",$consultaDos,$posData2);


    header("Location: registroEquipo.php?registro=1");
    

    }else {

        echo "Error";
        
        
    }
        /*$idCabecera = mysqli_insert_id($conexion);
        echo $idCabecera;
        $consultaDos = "INSERT INTO activo_equipo(idx_estatus,capacidad_memoria, procesador, disco_duro, pulgadas, resolucion, conectividad, tipo_entrada) 
        VALUES (?,$idCabecera,?,?,?,?,?,?,?)";
        $result2 = $db -> Db_query_save("iisssssss",$consultaDos,$posData2)
        echo $consultaDos;
       
        echo $consultaUno;
        echo $consultaDos;   
            VALUES ($idCabecera,'".$_POST['capacidadMemoria']."','".$_POST['procesador']."','".$_POST['discoDuro']."','".$_POST['pulgadas']."',
      '".$_POST['resolucion']."','".$_POST['conectividad']."','".$_POST['tipoEntrada']."')";
    */

?>