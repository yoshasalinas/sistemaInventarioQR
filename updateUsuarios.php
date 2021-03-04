<?php

include('conexion_db.php');

$db = new Db();
$confirmarpass = $_POST['confirmarpass'];
$posData = [];

$posData[0] = $_POST['rol'];
$posData[1] = $_POST['nombre'];
$posData[2] = $_POST['aPaterno'];
$posData[3] = $_POST['aMaterno'];
$posData[4] = $_POST['nombreUsuario'];
$posData[5] = $_POST['password'];
$posData[6] = $_POST['correo'];
$action = $_POST['$action'];

switch($action){
    case "update":
        $update = "UPDATE usuarios SET idX_rol=?, nombre=?, apellido_paterno=?, apellido_materno=?, nombre_usuario=?, contrasena=?, correo=? 
        WHERE id_usuario=? ";
        $result = $db -> Db_query_save("issssss",$update,$posData);
        echo'<script>
        alert("Exito");
        window.history.go(-1);</script>';
        break;
        default:
        echo "Error";
          break;

}

?>