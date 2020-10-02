<?php

include('conexion_db.php');

//tabla 1

$numeroSerial = $_POST['numSerial'];
$numeroDispositivo = $_POST['numDispositivo'];
$numeroTecNM = $_POST['numTecNM'];
$tipoActivo = $_POST['tipoActivo'];
$nombreActivo = $_POST['nombreActivo'];
$fechaAlta = $_POST['fechaAlta'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$descripcion = $_POST['descripcionActivo'];
$imagen_activo = $_POST['archivoImagen'];
$imagen_codigoQR = $_POST['codigoQR'];
$tipoUbicacion = $_POST['tipoUbicacion'];
$nombreUbicacion = $_POST['nombreUbicacion'];
$tipoEstatus = $_POST['tipoEstatus']; //llave foranea

//tabla 2
$capMemoria = $_POST['capacidadMemoria'];
$procesador = $_POST['procesador'];
$discoDuro = $_POST['discoDuro'];
$pulgadas = $_POST['pulgadas'];
$resolucion = $_POST['resolucion'];
$conectividad = $_POST['conectividad'];
$tipoEntrada = $_POST['tipoEntrada'];

$consulta1 ="INSERT INTO activo_equipo (id_activo_equipo, capacidad_memoria, procesador, disco_duro, pulgadas, resolucion, conectividad, tipo_entrada) 
VALUES (NULL, '$capMemoria', '$procesador', '$discoDuro', '$pulgadas', '$resolucion', '$conectividad', '$tipoEntrada')"; 
$resultado = mysqli_query($conexion,$consulta);
$id_ultimo=mysql_insert_id($consulta1);

public function select_id_equipo($id_ultimo,$numeroDispositivo,$numeroTecNM,$tipoActivo,$fechaAlta,$marca,$modelo,$color,$descripcion,$imagen_activo,$imagen_codigoQR){
	$consulta = "SELECT idx_activo_equipo FROM activos WHERE idx_activo_equipo'".$id_ultimo."'"; 
	$resultado_query = mysqli_query($conexion,$consulta);
	while($resultado = mysqli_fetch_array($resultado_query)){
		$id_equipo = $resultado['idx_activo_equipo'];

	}

	$nueva_consulta="INSERT INTO activos (id_activos, idx_numeroSerial, idx_estatus, idx_activo_equipo, idx_activo_mobiliario, idx_activo_refacciones, idx_ubicacion, numero_serial_dispositivo, numero_serial_tecNM, tipo_activo, nombre_activo, fecha_alta, marca, modelo, color, descripcion_activo, imagen_activo, imagen_codigo_qr)
	VALUES (null, null,null,'$id_equipo',null,null,null,'$numeroDispositivo','$numeroTecNM','$tipoActivo','$fechaAlta','$marca','$modelo','$color','$descripcion','$imagen_activo','$imagen_codigoQR')";
	$resultado_query = mysqli_query($conexion,$consulta);
	$filas=mysqli_num_rows($resultado);

	if($filas===true)
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

	if($conexion->query($nueva_consulta) === TRUE){
		header("location:inicio.php");
	}else{
		echo "error";
	}
	// mysqli_free_result($resultado);
	mysqli_close($conexion);
	

}

/* activo_equipo
 INSERT INTO `activo_equipo` (`id_activo_equipo`, `capacidad_memoria`, `procesador`, `disco_duro`, `pulgadas`, `resolucion`, `conectividad`, `tipo_entrada`) VALUES (NULL, '8gb', 'corei3', '1t', '12 pulgadas', '15 pulgadas', 'usb', 'usb');

 INSERT INTO `activos` (`id_activos`, `idx_numeroSerial`, `idx_estatus`, `idx_activo_equipo`, `idx_activo_mobiliario`, `idx_activo_refacciones`, `idx_ubicacion`, `numero_serial_dispositivo`, `numero_serial_tecNM`, `tipo_activo`, `nombre_activo`, `fecha_alta`, `marca`, `modelo`, `color`, `descripcion_activo`, `imagen_activo`, `imagen_codigo_qr`) VALUES (NULL, '1', '4', '1', NULL, NULL, '1', '123456', '125456', 'Equipo', 'Gabinete', '2020-10-01', 'Dell', '2', 'Negro', 'Color negro y gris', NULL, NULL);

consulta 1 inserta primero los datos en la tabla ACTIVO_EQUIPO
$consulta1 ="INSERT INTO activo_equipo (id_activo_equipo, capacidad_memoria, procesador, disco_duro, pulgadas, resolucion, conectividad, tipo_entrada) 
VALUES (NULL, '$capMemoria', '$procesador', '$discoDuro', '$pulgadas', '$resolucion', '$conectividad', '$tipoEntrada')"; 

$id_ultimo=mysql_insert_id($consulta1);

$consulta2 ="INSERT INTO activos (id_activos, idx_numeroSerial, idx_estatus, idx_activo_equipo, idx_activo_mobiliario, idx_activo_refacciones, idx_ubicacion, numero_serial_dispositivo,numero_serial_tecNM, tipo_activo,fecha_alta,marca,modelo,color,descripcion_activo,imagen_activo,imagen_codigo_qr) 
VALUES (NULL, '$numeroSerial', '$tipoEstatus', '$id_ultimo', '$MOBILIARIO', NULL, NULL,NULL,'$conectividad', '$tipoEntrada')";
//$resultado = mysqli_query($conexion,$consulta);


// $filas=mysqli_num_rows($resultado);

 



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


if($conexion->query($consulta) === TRUE){
	header("location:inicio.php");
}else{
	echo "error";
}
// mysqli_free_result($resultado);
mysqli_close($conexion); */

?>
