<?php



include('conexion_db.php');
/*
$consulta = "INSERT INTO activos (idx_numeroSerial, idx_estatus, idx_ubicacion, numero_serial_dispositivo,
numero_serial_tecNM, tipo_activo ,nombre_activo, fecha_alta, marca, modelo, color, descripcion_activo, imagen_activo,
imagen_codigo_qr, capacidad_memoria, procesador, disco_duro, pulgadas, resolucion, conectividad, tipo_entrada) 
VALUES (".$_POST['numSerial'].",".$_POST['estatus'].",".$_POST['tipoUbicacion'].",".$_POST['numDispositivo'].",
".$_POST['numTecNM'].",'".$_POST['tipoActivo']."','".$_POST['nombreActivo']."','".$_POST['fechaAlta']."','".$_POST['marca']."','".$_POST['modelo']."','".$_POST['color']."','".$_POST['descripcionActivo']."',
'".$_POST['archivoImagen']."','".$_POST['archivoQR']."','".$_POST['capacidadMemoria']."','".$_POST['procesador']."','".$_POST['discoDuro']."','".$_POST['pulgadas']."','".$_POST['resolucion']."','".$_POST['conectividad']."','".$_POST['tipoEntrada']."')";

//string nombre="equipo";
echo $consulta."<br>";
if($conexion->query($consulta) === TRUE){
	header("location:inicio.php");
}else{
    die("Connection failed: " . mysqli_error($conexion));
	
}
// mysqli_free_result($resultado);
mysqli_close($conexion);
*/


// PRIMERO hago el insert en la tabla activo_equipo
$consultaUno = "INSERT INTO activo_equipo(capacidad_memoria, procesador, disco_duro, pulgadas, resolucion, conectividad, tipo_entrada) 
VALUES ('".$_POST['capacidadMemoria']."','".$_POST['procesador']."','".$_POST['discoDuro']."','".$_POST['pulgadas']."','".$_POST['resolucion']."','".$_POST['conectividad']."','".$_POST['tipoEntrada']."')";

//
$result=mysqli_query($conexion, $consultaUno) or die (mysql_error());

//OBTENGO EL ULTIMO ID DEL ULTIMO REGISTRO INSERTADO
// printf ("New Record has id %d.\n", mysqli_insert_id($conexion));
if($result){
    $idCabecera = mysqli_insert_id($conexion);
    $esparaminull=null;

    $consultaDos = "INSERT INTO activos (idx_estatus, idx_activo_equipo, idx_activo_mobiliario, idx_activo_refacciones, idx_ubicacion, numeroSerial, numero_serial_dispositivo,
    numero_serial_tecNM, tipo_activo ,nombre_activo, fecha_alta, marca, modelo, color, descripcion_activo, imagen_activo, imagen_codigo_qr) 
    VALUES (".$_POST['estatus'].",$idCabecera, $esparaminull, $esparaminull,".$_POST['tipoUbicacion'].", '".$_POST['numSerial']."', '".$_POST['numDispositivo']."',
    '".$_POST['numTecNM']."','".$_POST['tipoActivo']."','".$_POST['nombreActivo']."','".$_POST['fechaAlta']."','".$_POST['marca']."','".$_POST['modelo']."','".$_POST['color']."','".$_POST['descripcionActivo']."',
    '".$_POST['archivoImagen']."','".$_POST['img-codigoQR']."')";
    echo $consultaDos;

    mysqli_query($conexion, $consultaDos) or die (mysql_error());
    header("Location: registroEquipo.php");

}else {

    echo "Error";
    echo $consultaDos;
    
}

?>