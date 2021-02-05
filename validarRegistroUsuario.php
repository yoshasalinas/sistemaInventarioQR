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

$get_usuario= "SELECT * FROM usuarios WHERE correo = ?";
    $result1 = $db -> Db_query_select_all("s",$get_usuario,[$posData[6]]);
    if(mysqli_num_rows($result1) == 0){
        $consulta = "INSERT INTO usuarios (idX_rol, nombre, apellido_paterno, apellido_materno, nombre_usuario, contrasena, correo) VALUES (?,?,?,?,?,?,?)";
          $result = $db -> Db_query_save("issssss",$consulta,$posData);
      
                  if (!$result === TRUE){
                  
                  header("location:usuarios.php");
      
                  }else {echo "error";}
        }else {
        echo '<script>
        alert("El correo ya existe");
        window.history.go(-1);</script>';
       //header("location:usuarios.php");
        }

?>