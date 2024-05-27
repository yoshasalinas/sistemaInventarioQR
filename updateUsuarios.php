<?php

include('conexion_db.php');

$db = new Db();
$confirmarpass = $_POST['confirmarContrasena-edit'];

$posData = [];
$posData[0] = $_POST['id-rol-edit'];
$posData[1] = $_POST['nombre-edit'];
$posData[2] = $_POST['aPaterno-edit'];
$posData[3] = $_POST['aMaterno-edit'];
$posData[4] = $_POST['nombreUsuario-edit'];
$posData[5] = $_POST['contrasena-edit'];
$posData[6] = $_POST['correo-edit'];

    
        $update = "UPDATE usuarios SET idX_rol='$posData[0]', nombre='$posData[0]', apellido_paterno='$posData[2]', apellido_materno='$posData[3]', 
        nombre_usuario='$posData[4]', contrasena='$posData[5]', correo='$posData[5]'
        WHERE  id_usuario=?";
        echo($update);
        $result = $db -> Db_query("issssss",$update,$posData);

        if (!$result === TRUE){

          header("location:usuarios.php?editar=1");

          }else echo "error"


?>