<?php

include('conexion_db.php');

session_start();

    if(!isset($_SESSION['id'])){
        header("Location: index.php");
    }

    $nombre = $_SESSION['nombreUsuario'];
    $tipo_usuario = $_SESSION['rol'];

    $select = "SELECT * FROM activos";
    $activo = mysqli_query($conexion, $select);

    $db = new Db();

?>

<!Doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!---->
        <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--CSS-->
        <link href="css/general-navbar-sidebar-menu-styles.css" rel="stylesheet" type="text/css">
        <!--<link href="css/inicio-style.css" rel="stylesheet" type="text/css">-->
        <link href="css/inventario-style.css" rel="stylesheet" type="text/css">
        <!--icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <!--  Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  

        <!--  extension responsive  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        
        
        <title>Inventario</title>
        
    </head>
    <body>
        <!--Navbar-->
        <?php include('navbar-menu.php'); ?>

        <div class="wrapper fixed-left">
            <!--Menu sidebar-->
            <?php include('sidebar-menu.php'); ?>

            <!--Contenido principal-->
            <div id="content" class="container tarjeta">
                <h1>Inventario</h1>   
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <table id="example" class="table table-striped table-bordered tabla-inventario" style="width:100%">
                                <thead>
                                    <tr>
                                        <th id="col-numSerial">No.Serial</th>
                                        <th>No. Serial Disp</th>
                                        <th>No. Serial TecNM</th>
                                        <th>Estatus</th>
                                        <th>Tipo Activo</th>
                                        <th>Ubicacion</th>
                                        <th>Nombre</th>
                                        <th>...</th>
                                        <!--
                                            <th>Fecha Alta</th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Descripcion</th>
                                        <th>Imagen</th>
                                        <th>QR</th>
                                        <th>...</th>
                                        -->
                                        			
                                    </tr>
                                </thead>
                                
                                <tbody>
                                	<?php while ($getresultado = $activo->fetch_assoc()) { ?>
							            <tr>
							            	<th scope="row"> <?php echo $getresultado['numeroSerial'] ?> </th>
                                            <td><?php echo $getresultado['numero_serial_dispositivo'] ?></td>
							            	<td><?php echo $getresultado['numero_serial_tecNM'] ?></td>
							            	<td><?php echo $getresultado['idx_estatus'] ?></td>
                                            <td><?php echo $getresultado['tipo_activo'] ?></td>
							            	<td><?php echo $getresultado['idx_ubicacion'] ?></td>
                                            <td><?php echo $getresultado['nombre_activo'] ?></td>
                                            <td>
                                                <!--Boton de accion Editar(Modal)-->
                                                <button type="button" id="" class="btn btn-outline-secondary acciones-btn" data-toggle="modal" data-target="#modal-editarActivo">
                                                    Editar<i class="far fa-edit"></i>
                                                </button>
                                                <!-- Boton de accion Eliminar(Modal)-->
                                                <button type="button" class="btn btn-outline-danger acciones-btn" data-toggle="modal" data-target="#modal-eliminarActivo">
                                                    Eliminar <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                           
                                            
                                            <!--
                                            <td><?php echo $getresultado['fecha_alta'] ?></td>
							            	<td><?php echo $getresultado['marca'] ?></td>
							            	<td><?php echo $getresultado['modelo'] ?></td>
							            	<td><?php echo $getresultado['color'] ?></td>
							            	<td><?php echo $getresultado['descripcion_activo'] ?></td>
							            	<td>
							            		<img src="data/:image/jpeg:base64, <?php echo base64_encode($getresultado['imagen_activo']) ?>">
							            	</td>
							            	<td>
                                            	<img src="data/:image/jpeg:base64, <?php echo base64_encode($getresultado['imagen_codigo_qr']) ?>">
                                            </td>
                                            
							            	
							            	<td>
							            		<a href="modificarActivo.php?idx_numeroSerial=<?= $getresultado['idx_numeroSerial'] ?>" class="btn btn-outline-info">Modificar</a>
							            	</td>
                                            -->
							            </tr>
						            <?php } ?>

                                </tbody>

                            </table> 
                            
                            <!-- Modal Editar datos de Activos-->
                            <div class="modal fade" id="modal-editarActivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Editar Informacion de Activo</h5>
                        
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            Traer formulario segun el tipo de activo que sea para poder mostrar la informacion
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-success">Guardar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Eliminar datos de Activos-->
                            <div class="modal fade" id="modal-eliminarActivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Activo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            Verificar el tipo de activo que se quiere eliminar para agregar condicion!
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> <!--FIN Contenido principal-->
        </div>
            
            
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!--   Datatables-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>  
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>  
        <!-- extension responsive y de bootstrap 4-->
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
        
            
        <script src="script.js">
            /*Archivo js para animacion en menu */ 
        </script>

    </body>
</html>

<script src="js/datatables.js">
    /*Archivo js para plugin datatables*/ 
</script>

<!--FUNCIONAMIENTO PARA MENU NAVBAR-->
<script>
    const menuBtn = document.querySelector(".menu-navbar span");
    const logoutBtn = document.querySelector(".logout-icon-navbar");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");

    menuBtn.onclick = ()=>{
        items.classList.add("active");
        menuBtn.classList.add("hide");
        logoutBtn.classList.add("hide");
        cancelBtn.classList.add("show");    
    }
    cancelBtn.onclick = ()=>{
        items.classList.remove("active");
        menuBtn.classList.remove("hide");
        logoutBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        
        cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
        logoutBtn.classList.add("hide");
        cancelBtn.classList.add("show");
    }

</script>


