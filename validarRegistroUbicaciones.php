<?php

include('conexion_db.php');


$tipoUbicacion = $_POST['tipoUbicacion'];
$nombre = $_POST['nombre'];
$edificio = $_POST['edificio'];
$descripcion = $_POST['descripcion'];
$capacidad = $_POST['capacidad'];

 

$consulta ="INSERT INTO ubicaciones (id_ubicacion, tipo_ubicacion, nombre_ubicacion, nombre_edificio, descripcion_ubicacion, capacidad) 
VALUES (NULL, '$tipoUbicacion', '$nombre', '$edificio', '$descripcion', '$capacidad')";
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
	header("location:configuracionUbicaciones.php");
}else{
	echo "error";
}
// mysqli_free_result($resultado);
mysqli_close($conexion);

?>
