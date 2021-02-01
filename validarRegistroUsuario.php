<?php

include('conexion_db.php');


$email = $_POST['correo'];
$pass = $_POST['password'];

$db = new Db();


$error_message = "";
if(strlen($pass)<6) {
    $error_message = "La contraseña es demasiado corta. Por favor, introduzca al menos 6 caracteres";


}else if($pass != $_POST['confirmarpass']){
    $error_message ="Las contraseñas no coinciden. Por favor, intentalo de nuevo";

}
//comprobar la sintaxis de la direccion de correo
if( ! filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error_message = "Por favor, compruebe la dirección de email introducida";
}
if ($email ){

}

$consulta = "INSERT INTO usuarios (idX_rol, nombre, apellido_paterno, apellido_materno, nombre_usuario, contrasena, correo) 
 VALUES (".$_POST['rol'].",'".$_POST['nombre']."','".$_POST['aPaterno']."','".$_POST['aMaterno']."','".$_POST['nombreUsuario']."','$pass','$email')";

if ($conexion->query($consulta) === TRUE){
    
    header("location:usuarios.php");
   

}else {
    echo "error";
    
}
/*
if($conexion->query($consulta) === TRUE){
	header("location:usuarios.php");
}else{
    echo $consulta;
	echo "error";
}

mysqli_close($conexion);
*/

?>