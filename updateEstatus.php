<?php

include('conexion_db.php');

$db = new Db();

$posData = [];
$posData[0] = $_POST['estatus-edit'];
    
        $update = "UPDATE estatus SET nombre_estatus = '$posData[0]'
        FROM estatus
        WHERE  id_estatus=?";
        echo($update);
        $result = $db -> Db_query("s",$update,$posData);

        if (!$result === TRUE){
            echo($update);
          header("location:configuracionEstatus.php?editar=1");

          }else echo "error"




              

?>