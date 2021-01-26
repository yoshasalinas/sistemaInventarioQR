<?php

include('conexion_db.php');

//id se obtiene sel url <a href="wath.php?id=<?= $loquesea['id'] " class="btn btn-outline-primary">Ver</a>
$obtenerId = $_GET['id_usuario'];

$delete = $conexion->query("DELETE FROM usuarios WHERE usuarios.id_usuario ='$obtenerId'");

//cerrar la conexion

$conexion->close();

header("Location: usuarios.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Modal: Eliminar Usuario-->       
                                                <div class="modal fade" id="modal-eliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Usuario</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <div class="div">
                                                                        ¿Esta seguro que desea eliminar el usuario del registro?
                                                                    </div>
                                                                    <div class="modal-btns-acciones">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                        <a href="eliminarUsuario.php?id_usuario=<?= $getresultado['id_usuario'] ?>" class="btn btn-danger">Eliminar</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
</head>
<body>
    
</body>
</html>