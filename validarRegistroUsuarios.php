<?php

include('conexion_db.php');


$rol = $_POST['rol'];
$nombre = $_POST['nombre'];
$apellidoMaterno = $_POST['aMaterno'];
$apellidoPaterno = $_POST['aPaterno'];
$nombreUsuario = $_POST['nombreUsuario'];
$pass = $_POST['contraseña'];
$email = $_POST['correo'];

 



$consulta ="INSERT INTO usuarios (id_usuario, idx_rol, nombre, apellido_paterno, apellido_materno, nombre_usuario, contrasena, correo) 
VALUES (NULL, '$rol', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$nombreUsuario', '$pass', '$email')";
// $resultado = mysqli_query($conexion,$consulta);


// $filas=mysqli_num_rows($resultado);

 
/*/
if($filas>0)
{

	header("location:inicio.php");
}
else 
{
	echo '<script>	
		alert("Error");
		
		
		</script>';
}
*/

if($conexion->query($consulta) === TRUE){
	header("location:usuarios.php");
}else{
	echo "error";
}
// mysqli_free_result($resultado);
mysqli_close($conexion);

?>
