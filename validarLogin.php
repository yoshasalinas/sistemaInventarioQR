<?php
/*
include('conexion_db.php');


$email = $_POST['correo'];
$pass = $_POST['contraseña'];

$consulta ="SELECT * FROM `usuarios` WHERE correo='$email' AND contrasena='$pass'";
$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas>0)
{
	header("location:inicio.php");
}
else 
{
	echo '<script>	
		alert("Error en la autentificacion no entra");
		window.history.go(-1);
		
		</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
*/

	include('conexion_db.php');

    session_start();

    if($_POST){
        $email = $_POST['correo'];
        $password = $_POST['contraseña'];

        $consulta ="SELECT id_usuario, idX_rol, nombre_usuario, contrasena, correo FROM `usuarios` WHERE correo='$email'";
        $resultado = mysqli_query($conexion,$consulta);
        
        $filas = mysqli_num_rows($resultado);

        $errorContraseña = false;
        $errorUsuario = false;

        if($filas > 0){

            $row = $resultado->fetch_assoc();
            //base de datos
            $password_db = $row['contrasena'];
            //campo de texto
            //$password_campo = sha1($password);
            $password_campo = $password;

            if($password_db == $password_campo){

                $_SESSION['id'] = $row['id_usuario'];
                $_SESSION['nombreUsuario'] = $row['nombre_usuario'];
                $_SESSION['rol'] = $row['idX_rol'];

                header("location: inicio.php");

            }else{
                //echo "La contraseña no coincide";
                
                //echo "La contraseña es incorrecta!";

                //echo  $errorContraseña = true;
                //echo '<textarea class="form-control" id="var" name="var" rows="1" value = '.$errorContraseña.' ></textarea>'; 

                $errorContraseña = true;
        


            }

        }else{
            $errorUsuario = true;
            
            //echo  $errorUsuario = true;
            //echo "El correo no esta registrado!";
        }
    }
?>

