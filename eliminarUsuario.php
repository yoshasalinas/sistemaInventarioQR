<?php

include('conexion_db.php');
//id se obtiene sel url <a href="wath.php?id=<?= $loquesea['id'] " class="btn btn-outline-primary">Ver</a>
$obtenerId = $_GET['id_usuario'];

$delete = $conexion->query("DELETE FROM usuarios WHERE usuarios.id_usuario ='$obtenerId'");

//cerrar la conexion

$conexion->close();

header("Location: usuarios.php");

?>