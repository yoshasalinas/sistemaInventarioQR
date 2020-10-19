<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--CSS-->
        <link rel="stylesheet" href="css/inicio-style.css">

        <!--icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


        <title>Inicio</title>
    </head>
    <body>
    
        <div class="wrapper">

            <!--Menu sidebar lateral-->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>CONTROL DE INVENTARIO</h3>
                </div>
                    
                <ul class="list-unstyled components">
                    <p>Administrador</p>
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
                                <a href="registroConsumibles.php">
                                    <i class="fas fa-microchip"></i>
                                    Consumibles
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
                                <a href="ubicaciones.php">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Ubicaciones
                                </a>
                            </li>
                        </ul> 
                    </li>   
                </ul>
            </nav>
            <!--Header + Contenido principal-->
            <div class="content">
                <!--Header/Navbar-->
                <section>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container">
                            <!--Boton de menu-->
                            <div class="div">
                                <i class="fas fa-align-justify fa-2x" id="sidebarCollapse"></i> <span>Menu</span>
                            </div>
                            <!--Logos-->
                            <div class="div">
                                <img src="img/itcj-escudo-rojo.png"  class="" alt="">
                                <img src="img/logo-TNM.png"  class="" alt="">
                            </div>
                            <!--Boton submenu-->
                            <div class="div">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <!--Cerrar sesion-->
                                        <li><a href="index.php"><i class="fas fa-sign-out-alt fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </nav>
                </section>
                 
                <!--Contenido Principal-->
                <section>
                    
                   
                    
                    <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <h1>Sidebar Using Bootstrap</h1>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                                placeholder="name@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Example select</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Example multiple select</label>
                                            <select multiple class="form-control" id="exampleFormControlSelect2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </section>
        
            </div>
        </div>
        



        
        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
            
        <!--Funciones Scrip-->

        <!---Funcion:sidebarCollapse, para generar sub menu-->
        <script>
            $(document).ready(function(){
                $('#sidebarCollapse').on('click',function(){
                    $('#sidebar').toggleClass('active');
                });
            });  
        </script>
        
        
        
        
    </body>
</html>

