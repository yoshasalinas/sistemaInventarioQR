<?php

include('conexion_db.php');

session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");
}

$nombre = $_SESSION['nombreUsuario'];
$tipo_usuario = $_SESSION['rol'];


$select = "SELECT * FROM usuarios";
$usuario = mysqli_query($conexion, $select);

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
        <link href="css/usuarios-styles.css" rel="stylesheet" type="text/css">
        <!--icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--  Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  

        <!--  extension responsive  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        

        <title>Inicio</title>
    </head>

    <script type="text/javascript">
		
		function registroNuevoUsuario(){
			document.getElementById("formulario-crear-usuario").style.display = "block";
			document.getElementById("tabla-de-usuarios").style.display = "none";
			
        }

        function validarInfomracion(){
            var formulario = document.form;

            if(formulario.contraseña.value != formulario.confirmarContraseña.value ){
                document.getElementById("alerta").innerHTML = '<div'
            }
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
                            <li><a href="logout.php"><i class="fas fa-sign-out-alt fa-2x"></i></a></li> 
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
                <div class="main-container">
                    <!--Tabla de usuarios registrados-->
                    <div class="row" id="tabla-de-usuarios">
                        <H1>Usuarios del sistema:</H1>
                        <table id="example" class="table table-striped table-bordered tabla-usuarios" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Rol</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido Paterno</th>
                                    <th scope="col">Apellido Materno</th>
                                    <th scope="col">Nombre de Usuario</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($getresultado = $usuario->fetch_assoc()) { ?>
                                    <tr>
                                        <th scope="row"> <?php echo $getresultado['idX_rol'] ?> </th>
                                        <td><?php echo $getresultado['nombre'] ?></td>
                                        <td><?php echo $getresultado['apellido_paterno'] ?></td>
                                        <td><?php echo $getresultado['apellido_materno'] ?></td>
                                        <td><?php echo $getresultado['nombre_usuario'] ?></td>
                                        <td><?php echo $getresultado['correo'] ?></td>
                                        
                                        <!--botones--> 
                                        <td>
                                            <a href="watch.php?id_usuario=<?= $getresultado['id_usuario'] ?>" class="btn btn-outline-primary acciones-btn">
                                                Movimientos<i class="far fa-folder-open"></i>
                                            </a>
                                            <a href="modificarUsuario.php?id_usuario=<?= $getresultado['id_usuario'] ?>" class="btn btn-outline-secondary acciones-btn">
                                                Editar<i class="far fa-edit"></i>

                                            </a>
                                            <a href="eliminarUsuario.php?id_usuario=<?= $getresultado['id_usuario'] ?>" class="btn btn-outline-danger acciones-btn">
                                                Eliminar <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
						
                        <button  type="submit" class="btn btn-primary btn-success" onclick="registroNuevoUsuario()" >Registrar nuevo usuario</button>
                   
                    </div>

                    <!--Formulario de registro de nuevo usuario (oculto hasta precionar boton)-->
                    <div class="row oculto" id=formulario-crear-usuario >
                        <div class="container-form-registro-usuarios">
                            <H1>Registro de usuarios:</H1>
                            <form action="validarRegistroUsuarios.php" method="POST" >
                                <div class="form-row"> 
                                    <div class="equipo col-12">
                                        <div class="form-row">
                                            <div class="form-group col-md-3 ">
                                                <label for="nombre">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre">      
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="aPaterno">Apellido paterno</label>
                                                <input type="text" class="form-control" id="aPaterno" name="aPaterno">    
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="aMaterno">Apellido materno</label>
                                                <input type="text" class="form-control" id="aMaterno" name="aMaterno">  
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-4">
                                                <label for="rol">Rol</label>
                                                <select class="form-control" id="rol" name="rol">
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label for="nombreUsuario">Nombre usuario</label>
                                                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
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
                                                <label for="contraseña">Contraseña</label>
                                                <input type="password" class="form-control" id="contraseña" name="contraseña">      
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="confirmarContraseña">Confirmar contraseña</label>
                                                <input type="password" class="form-control" id="confirmarContraseña" name="confirmarContraseña">      
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

        
        
        <!--   Datatables-->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>  
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>  
        <!-- extension responsive y de bootstrap 4-->
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
        
           
        <script src="script.js">
            /*Archivo js*/ 
        </script>

    </body>
</html>

<script src="js/datatables.js">
    /*Archivo js para plugin datatables*/ 
</script>