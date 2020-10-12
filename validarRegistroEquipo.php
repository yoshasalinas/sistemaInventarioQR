<?php



include('conexion_db.php');

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
?>