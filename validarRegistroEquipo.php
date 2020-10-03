<?php
//include('conexion_db.php');
/*

$numeroSerial = $_POST['numSerial']; //llave foranea
$tipoEstatus = $_POST['tipoEstatus']; //llave foranea
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
$nombreEdificio = $_POST['nombreEdificio'];


$capMemoria = $_POST['capacidadMemoria'];
$procesador = $_POST['procesador'];
$discoDuro = $_POST['discoDuro'];
$pulgadas = $_POST['pulgadas'];
$resolucion = $_POST['resolucion'];
$conectividad = $_POST['conectividad'];
$tipoEntrada = $_POST['tipoEntrada'];




INSERT INTO `activos` (`id_activos`, `idx_numeroSerial`, `idx_estatus`, `idx_ubicacion`, `numero_serial_dispositivo`, `numero_serial_tecNM`, `tipo_activo`, `nombre_activo`, `fecha_alta`, `marca`, `modelo`, `color`, `descripcion_activo`, `imagen_activo`, `imagen_codigo_qr`, `capacidad_memoria`, `procesador`, `disco_duro`, `pulgadas`, `resolucion`, `conectividad`, `tipo_entrada`) 
VALUES (NULL, '1', '3', '2', '55645421', '545645454', 'Equipo', 'Gabinete', '2020-10-01', 'DEll', '2', 'negro', 'Detalles gris', NULL, NULL, '8gb', 'core i3', '2', '', NULL, 'usb', 'usb');

*/
$servername = "localhost";
$database = "inventarioactivos";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$consulta_insertar = "INSERT INTO activos (id_activos, idx_numeroSerial, idx_estatus, idx_ubicacion, numero_serial_dispositivo, numero_serial_tecNM, tipo_activo, nombre_activo, fecha_alta, marca, 
modelo, color, descripcion_activo, imagen_activo, imagen_codigo_qr, capacidad_memoria, procesador,disco_duro, pulgadas, resolucion, conectividad, tipo_entrada) 
VALUES (null,".$_POST['numSerial'].",".$_POST['estatus'].",".$_POST['tipoUbicacion'].",".$_POST['numDispositivo'].",".$_POST['numTecNM'].",".$_POST['tipoActivo'].",".$_POST['nombreActivo'].",".$_POST['fechaAlta'].",".$_POST['marca'].",".$_POST['modelo'].",".$_POST['color'].",".$_POST['descripcionActivo'].",".$_POST['archivoImagen'].",".$_POST['archivoQR'].",".$_POST['capacidadMemoria'].",".$_POST['procesador'].",".$_POST['discoDuro'].",".$_POST['pulgadas'].",".$_POST['resolucion'].",".$_POST['conectividad'].",".$_POST['tipoEntrada'].")";
//echo $consulta_insertar."<br>";

if (mysqli_query($conn, $consulta_insertar)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $consulta_insertar . "<br>" . mysqli_error($conn);
    echo "numSerial" 

}
mysqli_close($conn);

/*
$sql=$conexion -> query($consulta_insertar);
if(!$sql){

    echo'<script>	
    alert("Error");    
    </script>';

} else{
    echo ("Se inserto correctamente");
}
*/

/*

if($conexion->query($consulta_insertar) === TRUE){
	header("location:inventario.php");
}else{
	echo "error";
}
// mysqli_free_result($resultado);
mysqli_close($conexion);
*/


/*
VALUES (null,".$_POST['idx_numeroSerial'].",".$_POST['idx_estatus'].",".$_POST['idx_ubicacion'].",".$_POST['numero_serial_dispositivo'].",".$_POST['numero_serial_tecNM'].",".$_POST['tipo_activo'].",".$_POST['nombre_activo'].",'".$_POST['fecha_alta']."',".$_POST['marca'].",
".$_POST['modelo'].",".$_POST['color'].",".$_POST['descripcion_activo'].",".$_POST['imagen_activo'].",".$_POST['imagen_codigo_qr'].",".$_POST['capacidad_memoria'].",".$_POST['procesador'].",".$_POST['disco_duro'].",
".$_POST['pulgadas'].",".$_POST['resolucion'].",".$_POST['conectividad'].",".$_POST['tipo_entrada'].")";
echo $consulta_insertar."<br>";
*/
?>