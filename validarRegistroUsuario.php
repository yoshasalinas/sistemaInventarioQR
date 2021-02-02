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


/*

    if($posData[0]=''or $posData[1]='' or $posData[2]='' or $posData[4]='' or $posData[5]='' or $posData[6]=''){

        echo 'Por favor llene todos los campos.';

    }else{
        $get_usuarios = "SELECT * FROM usuarios WHERE correo = ? ";
        $result = $db -> Db_query_select("s",$get_usuarios,[$posData[6]]);
        $verificar_usuario = 0;
        if(mysqli_num_rows($result) > 0){
            
                $verificar_usuario = 1;
                echo '<script>
        alert("El correo ya existe");
        </script>';

        }
        if($verificar_usuario){
            if($posData[5] == $confirmarpass){
                $consulta = "INSERT INTO usuarios (idX_rol, nombre, apellido_paterno, apellido_materno, nombre_usuario, contrasena, correo) 
                VALUES (?,?,?,?,?,?,?)";

                $result = $db -> Db_query_save("issssss",$consulta,$posData);
                header("location:usuarios.php");
                echo 'Usted se ha registrado correctamente.';

            }else{
                echo 'Las claves no son iguales, intente nuevamente.'; 
            }
        }else{
            echo 'Este usuario ya ha sido registrado anteriormente.'; 

        }


    }
*/
    $get_usuario= "SELECT * FROM usuarios WHERE correo= ?";
    $result1 = $db -> Db_query_select_all("s",$get_usuario,[$posData[6]]);
    if(mysqli_num_rows($result1) == 0){
        $consulta = "INSERT INTO usuarios (idX_rol, nombre, apellido_paterno, apellido_materno, nombre_usuario, contrasena, correo) VALUES (?,?,?,?,?,?,?)";
          $result = $db -> Db_query_save("issssss",$consulta,$posData);
      
                  if (!$result === TRUE){
                  
                  header("location:usuarios.php");
      
                  }else {
                  echo "error";
              }
    }else {
        echo '<script>
        alert("El correo ya existe");
        </script>';
        header("location:usuarios.php");
          
 
     }

/*
$consulta = "INSERT INTO usuarios (idX_rol, nombre, apellido_paterno, apellido_materno, nombre_usuario, contrasena, correo) 
 VALUES (?,?,?,?,?,?,?)";

 $result = $db -> Db_query_save("issssss",$consulta,$posData);

if (!$result === TRUE){
    
    header("location:usuarios.php");

}else {
    echo "error";
    
}
*/
?>