<?php

include('conexion_db.php');

$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['aPaterno'];
$apellidoMaterno = $_POST['aMaterno'];
$nombreUsuario = $_POST['nombreUsuario'];
$email = $_POST['email'];
$pass = $_POST['password'];


INSERT INTO `usuarios` (`id_usuario`, `idx_rol`, `nombre`, `apellido_paterno`, `apellido_materno`, `nombre_usuario`, `contrasena`, `correo`) VALUES (NULL, '1', 'Yoshajani', 'Salinas', 'Montes', 'yosha', 'yosha123', 'yosha123');


$consulta ="SELECT * FROM `usuario` WHERE correo='$email' AND contraseña='$pass'";
$resultado = mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas>0)
{
	header("location:inicio.php");
}
else 
{
	echo '<script>	
		alert("Error en la autentificacion");
		window.history.go(-1);
		
		</script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>