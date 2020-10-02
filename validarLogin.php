<?php

include('conexion_db.php');


$email = $_POST['email'];
$pass = $_POST['password'];

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
		alert("Error en la autentificacion");
		window.history.go(-1);
		
		</script>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>


