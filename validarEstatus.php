<?php
    include('conexion_db.php');
    $db = new Db();
    
    $posData = [];
    $posData[0]=$_POST['estatus'];

    $consulta = "INSERT INTO estatus (nombre_estatus) 
    VALUES (?)";
    $result = $db -> Db_query_save("s",$consulta,$posData);
    //echo $consultaUno

    if(!$result === TRUE){
        echo($consultaUno);
        header("Location: configuracionEstatus.php?registro=1");
        

    }else {
        echo "Error";
        
        
    }
?>