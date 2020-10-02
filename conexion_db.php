<?php

//conexion a db
$conexion = new mysqli("localhost", "root", "", "inventarioactivos");
$resultado = mysqli_query($conexion, "SET NAMES 'utf8'"); //caracteres

if($conexion->connect_errno){
    echo "Error en la conexion";
    exit; 
}

?>