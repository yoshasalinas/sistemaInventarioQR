<?php

include('conexion_db.php');
//id se obtiene sel url <a href="wath.php?id=<?= $loquesea['id'] " class="btn btn-outline-primary">Ver</a>
$obtenerId = $_GET['id_activos'];

$delete = $conexion->query("DELETE FROM activos WHERE activos.id_activos ='$obtenerId'");

//cerrar la conexion

$conexion->close();

header("Location: inventario.php");

?>