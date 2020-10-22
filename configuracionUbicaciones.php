<?php

include('conexion_db.php');

$select = "SELECT * FROM ubicaciones";
$ubicaciones = mysqli_query($conexion, $select);

?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!---->
        <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--CSS-->
        <link href="css/inicio-style.css" rel="stylesheet" type="text/css">
        <link href="css/configurarUbicaciones.css" rel="stylesheet" type="text/css">
        <!--icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        

        <title>Ubicaciones del sistema</title>
    </head>

    <script type="text/javascript">
		function registroNuevoUsuario(){
			document.getElementById("formulario-crear-usuario").style.display = "block";
			document.getElementById("tabla-de-usuarios").style.display = "none";
        }

        function nuevoTipo(){
            document.getElementById("nuevotipoUbicacion").style.display = "block";
        }

        function validarInfomracion(){
            
        }


        
        
	</script>

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
            <div id="content">
                <div class="main-container ">
                    <!--Tabla de usuarios registrados-->
                    <div class="row" id=tabla-de-usuarios >
                        <H1>Ubicaciones del sistema</H1>
                        <table class="table table-dark" >
                            <thead>
                                <tr>
                                    <th scope="col">Tipo de Ubicacion</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Nombre del Edificio</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Capacidad de la Ubicacion</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($getresultado = $ubicaciones->fetch_assoc()) { ?>
                                    <tr>
                                        <!--<th scope="row"> <?php echo $getresultado['id_ubicacion'] ?> </th> -->
                                        <td><?php echo $getresultado['tipo_ubicacion'] ?></td>
                                        <td><?php echo $getresultado['nombre_ubicacion'] ?></td>
                                        <td><?php echo $getresultado['nombre_edificio'] ?></td>
                                        <td><?php echo $getresultado['descripcion_ubicacion'] ?></td>
                                        <td><?php echo $getresultado['capacidad'] ?></td>
                                        <!--botones--> 
                                        
                                        <td>
                                            <a href="modificarUsuario.php?id_usuario=<?= $getresultado['id_ubicacion'] ?>" class="btn btn-outline-info">Modificar</a>
                                        </td>
                                        <td>
                                            <a href="eliminarUsuario.php?id_usuario=<?= $getresultado['id_ubicacion'] ?>" class="btn btn-outline-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <button  type="submit" class="btn btn-primary btn-success" onclick="registroNuevoUsuario()" >Registrar nuevo usuario</button>
                   
                    </div>
                    <!--Formulario de registro de nueva ubicacion (oculto hasta precionar boton)-->
                    <div class="row oculto" id=formulario-crear-usuario >
                        <div class="container-form-registro-usuarios">
                            <H1>Registro de Ubicaciones:</H1>
                            <form action="" method="POST" >
                                <div class="form-row"> 
                                    <div class="equipo col-12">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="tipoUbicacion">Ubicacion</label>
                                                <select class="form-control" id="tipoUbicacion" name="tipoUbicacion" >
                                                <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                                    $consulta = $conexion-> query("SELECT * FROM ubicaciones");

                                                    while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                        echo "<option value ='".$fila['id_ubicacion']."'>".$fila['tipo_ubicacion']."</option>"; //muestra los datos de la tabla externa
                                                    }
                                                ?>
                                                <option onclick="registroNuevoUsuario()">Otro...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3 oculto">
                                                <label for="nuevotipoUbicacion">Otro</label>
                                                <input type="text" class="form-control" id="nuevotipoUbicacion" name="nuevotipoUbicacion">    
                                            </div>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="col-4">
                                                <label for="nombre">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">    
                                            
                                            </div>
                                            <div class="col-4">
                                                <label for="nombreEdificio">Nombre del Edificio</label>
                                                <input type="text" class="form-control" id="nombreEdificio" name="nombreEdificio">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="correo">Correo:</label>
                                                <input type="email" class="form-control" id="correo" name="correo" >      
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="descripUbicacion">Descripcion de la Ubicacion</label>
                                                <textarea class="form-control"  rows="3" name="descripUbicacion" type="text">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <button  type="submit" class="btn btn-primary btn-success" >Aceptar</button>
                                <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            
        <script src="script.js">
            /*Archivo js*/ 
        </script>

    </body>
</html>