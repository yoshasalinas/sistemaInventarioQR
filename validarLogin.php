<?php

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
		document.getElementById("error").style.visibility = "visible";
		</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>


