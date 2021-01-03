<?php

include('conexion_db.php');

$select = "SELECT * FROM activos";
$activo = mysqli_query($conexion, $select);

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
        <link href="css/inicio-style.css" rel="stylesheet" type="text/css">
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
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <div class="div">
                    <!--Boton de menu-->
                    <i class="fas fa-align-justify fa-2x" id="sidebarCollapse"></i> <span></span>
                    <!--Titulo-->
                    <a class="navbar-brand" href="">
                        <h2 id="logo">Control de Inventario</h2>
                    </a>
                </div>
                <div class="div">
                    <img src="img/itcj-escudo-rojo.png"  class="" alt="">
                    <img src="img/logo-TNM.png"  class="" alt="">
                </div>
                <div class="div">
                    <!--Boton navbar submenu-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--Navbarssubmenu-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li><a href="index.php"><i class="fas fa-sign-out-alt fa-2x"></i></a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="wrapper fixed-left">
            <!--Menu sidebar-->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><i class="fas fa-user"></i>Administrador</h3>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="inicio.php">
                            <i class="fas fa-home fa-lg"></i>
                            Inicio
                        </a>
                    </li>
                    <li class="">
                        <a href="#movimientosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-clipboard fa-lg"></i>
                            Movimientos
                        </a>
                        <ul class="collapse list-unstyled" id="movimientosSubmenu">
                            <li>
                                <a href="cambioUbicacion.php">
                                    <i class="fas fa-thumbtack"></i>
                                    Cambio de Ubicacion
                                </a>
                            </li>
                            <li>
                                <a href="prestamo.php">
                                    <i class="fas fa-people-carry"></i>
                                    Prestamo
                                </a>
                            </li>
                            <li>
                                <a href="bajas.php">
                                    <i class="fas fa-trash-alt"></i>
                                    Bajas
                                </a>
                            </li>
                        </ul> 
                    </li>
                    
                    <li>
                        <a href="#registroSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-plus fa-lg"></i>
                            Nuevo Registro</a>
                        <ul class="collapse list-unstyled" id="registroSubmenu">
                            <li>
                                <a href="registroEquipo.php">
                                    <i class="fas fa-desktop"></i>
                                    Equipo
                                </a>
                            </li>
                            <li>
                                <a href="registroMobiliario.php">
                                    <i class="fas fa-couch"></i>
                                    Mobiliario
                                </a>
                            </li>
                            <li>
                                <a href="registroRefacciones.php">
                                    <i class="fas fa-microchip"></i>
                                    Refacciones
                                </a>
                            </li>
                        </ul> 
                    </li>
                    <li>
                        <a href="inventario.php">
                            <i class="fas fa-box-open fa-lg"></i>
                            Inventario
                        </a>
                    </li>
                    <li>
                        <a href="ubicaciones.php">
                            <i class="fas fa-map-marked-alt fa-lg"></i>
                            Ubicaciones
                        </a>
                    </li>
                    <li>
                        <a href="reportes.php">
                            <i class="fas fa-info-circle"></i>
                            Reportes
                        </a>
                    </li>
                    <li>
                        <a href="#configuracionesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fas fa-cog"></i>
                            Configuraciones
                        </a>
                        <ul class="collapse list-unstyled" id="configuracionesSubmenu">
                            <li>
                                <a href="usuarios.php">
                                    <i class="fas fa-users"></i>
                                    Usuarios</a>
                            </li>
                            <li>
                                <a href="configuracionUbicaciones.php">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Ubicaciones
                                </a>
                            </li>
                        </ul> 
                    </li>
                </ul>
            </nav>
            <!--Contenido principal-->
            <div id="content" class="container tarjeta">
                <h1>Inventario</h1>   
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.Serial</th>
                                        <th>No. Serial Disp</th>
                                        <th>No. Serial TecNM</th>
                                        <th>Estatus</th>
                                        <th>Tipo Activo</th>
                                        <th>Ubicacion</th>
                                        <!--
                                        <th>Nombre</th>
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
                                            <!--
                                            <td><?php echo $getresultado['nombre_activo'] ?></td>
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
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>  
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


