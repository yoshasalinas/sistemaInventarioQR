<?php

include('conexion_db.php');

$db = new Db();
$confirmarpass = $_POST['confirmarContrasena-edit'];
$posData = [];

$posData[0] = $_POST['rol-edit'];
$posData[1] = $_POST['nombre-edit'];
$posData[2] = $_POST['aPaterno-edit'];
$posData[3] = $_POST['aMaterno-edit'];
$posData[4] = $_POST['nombreUsuario-edit'];
$posData[5] = $_POST['contrasena-edit'];
$posData[6] = $_POST['correo-edit'];


        $update = "UPDATE usuarios SET idX_rol=?, nombre=?, apellido_paterno=?, apellido_materno=?, nombre_usuario=?, contrasena=?, correo=?
        WHERE  id_usuario=?";
        $result = $db -> Db_query("issssssi",$update,...$posData);

        if (!$result === TRUE){
                    
          echo'<script>
          alert("Exito");
        
          </script>';

          }else {echo "error";}


?>