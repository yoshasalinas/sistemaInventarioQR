<?php

include('conexion_db.php');

session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");
}

$nombre = $_SESSION['nombreUsuario'];
$tipo_usuario = $_SESSION['rol'];

$select = "SELECT * FROM ubicaciones";
$ubicacion = mysqli_query($conexion, $select);


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
        <!--CSS
        <link href="css/inicio-style.css" rel="stylesheet" type="text/css">
        <link href="css/inicio-styles.css" rel="stylesheet" type="text/css">-->
        <link href="css/inicio2-styles.css" rel="stylesheet" type="text/css">

        <!--icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <!--  Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
        <!--  extension responsive  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        
        
        <title>Inicio</title>
        
    </head>


    <body>
        <nav>
            
            <!--Boton de menu Sidebar-->
            <div class="menu-sidebar"><span class="fas fa-bars"></span></div>

            <!--Boton de menu movil-->
            <div class="menu-icon"><span class="fas fa-bars"></span></div>
            <div class="logo">
                Control de Inventario
                <img src="img/itcj-escudo-rojo.png"  class="logos-img" alt="">
                <img src="img/logo-TNM.png"  class="logos-img" alt="">
            </div>

            

            <div class="nav-items">
                <li>
                    <a href="inicio.php"><i class="fas fa-home fa-lg"></i>Inicio</a>
                </li>
                <li>
                    <a href="#movimientosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-clipboard fa-lg"></i>
                        Movimientos
                    </a>
                    <ul class="collapse list-unstyled" id="movimientosSubmenu">
                        <li>
                            <a href="cambioUbicacion.php"><i class="fas fa-thumbtack"></i>Cambio de Ubicacion</a>
                        </li>
                        <li>
                            <a href="prestamo.php"><i class="fas fa-people-carry"></i>Prestamo</a>
                        </li>
                        <li>
                            <a href="bajas.php"><i class="fas fa-trash-alt"></i>Bajas</a>
                        </li>
                    </ul> 
                </li>
                <li>
                    <a href="#registroSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-plus fa-lg"></i>
                        Nuevo Registro</a>
                    <ul class="collapse list-unstyled" id="registroSubmenu">
                        <li>
                            <a href="registroEquipo.php"><i class="fas fa-desktop"></i>Equipo</a>
                        </li>
                        <li>
                            <a href="registroMobiliario.php"><i class="fas fa-couch"></i>Mobiliario</a>
                        </li>
                        <li>
                            <a href="registroRefacciones.php"><i class="fas fa-microchip"></i>Refacciones</a>
                        </li>
                    </ul> 
                </li>
                <li>
                    <a href="inventario.php"><i class="fas fa-box-open fa-lg"></i>Inventario</a>
                </li>
                <li>
                    <a href="ubicaciones.php"><i class="fas fa-map-marked-alt fa-lg"></i>Ubicaciones</a>
                </li>
                <li>
                    <a href="reportes.php"><i class="fas fa-info-circle"></i>Reportes</a>
                </li>
                <!--Condicion para tipo de usuario: SOLO ADMINISTRADOR-->
                <?php if($tipo_usuario == 1) { ?>
                <li>
                    <a href="#configuracionesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-cog"></i>
                        Configuraciones
                    </a>
                    <ul class="collapse list-unstyled" id="configuracionesSubmenu">
                        <li>
                            <a href="usuarios.php"><i class="fas fa-users"></i>Usuarios</a>
                        </li>
                        <li>
                            <a href="configuracionUbicaciones.php"><i class="fas fa-map-marker-alt"></i>Ubicaciones</a>
                        </li>
                    </ul> 
                </li>
                <?php } ?>
             
            </div>

            

            <!--Botonwa para menu-movil-->
            <div class="search-icon"><span class="fas fa-door-open"></span></div>
            <div class="cancel-icon"><span class="fas fa-times"></span></div>

            

            <!--Boton de cerrar sesion-->
            <div class="log-out-icon"><span class="fas fa-door-open"></span></div>

        </nav>

        
            
            
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        
            
        <script src="script.js">
            /*Archivo js para animacion en menu */ 
        </script>

        <script>
            const menuBtn = document.querySelector(".menu-icon span");
            const searchBtn = document.querySelector(".search-icon");
            const cancelBtn = document.querySelector(".cancel-icon");
            const items = document.querySelector(".nav-items");
            const form = document.querySelector("form");
            menuBtn.onclick = ()=>{
            items.classList.add("active");
            menuBtn.classList.add("hide");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
            }
            cancelBtn.onclick = ()=>{
            items.classList.remove("active");
            menuBtn.classList.remove("hide");
            searchBtn.classList.remove("hide");
            cancelBtn.classList.remove("show");
            form.classList.remove("active");
            cancelBtn.style.color = "#ff3d00";
            }
            searchBtn.onclick = ()=>{
            form.classList.add("active");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
            }
        </script>

    </body>
</html>



