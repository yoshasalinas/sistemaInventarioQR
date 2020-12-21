<?php

include('conexion_db.php');

//mysqli_autocommit($conexion,FALSE);

$consultaUno = "INSERT INTO activos (idx_estatus, idx_ubicacion, numeroSerial, numero_serial_dispositivo,
numero_serial_tecNM, tipo_activo ,nombre_activo, fecha_alta, marca, modelo, color, descripcion_activo, imagen_activo, imagen_codigo_qr) 
VALUES (".$_POST['estatus'].",".$_POST['tipoUbicacion'].",'".$_POST['numSerial']."','".$_POST['numDispositivo']."',
'".$_POST['numTecNM']."','".$_POST['tipoActivo']."','".$_POST['nombreActivo']."','".$_POST['fechaAlta']."','".$_POST['marca']."','".$_POST['modelo']."','".$_POST['color']."','".$_POST['descripcionActivo']."','".$_POST['archivoImagen']."','".$_POST['pruebaQR']."')";
echo $consultaUno;
$result=mysqli_query($conexion, $consultaUno) or die (mysqli_error($conexion));

if($result){
    $idCabecera = mysqli_insert_id($conexion);
    echo $idCabecera;

    
    $consultaDos = "INSERT INTO activo_mobiliario (idx_activos, cantidad_mobiliario, medidas) 
    VALUES ($idCabecera,".$_POST['cantidad'].",'".$_POST['medidas']."')";

    //echo $consultaDos;

    mysqli_query($conexion, $consultaDos) or die (mysqli_error($conexion));
    header("Location: registroMobiliario.php");

}else {

    echo "Error";
    //echo $consultaDos;
    
}


//$mysqli -> rollback();


?>