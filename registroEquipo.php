<?php

include('conexion_db.php');

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
        <link href="css/registro-style.css" rel="stylesheet" type="text/css">
        
        <!--icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        

        <title>Registro Equipo</title>
    </head>
<!--
    <script>
        function previewImagen() {
            var file = document.getElementById("file").files;
            if (file.length > 0) {
                var fileReader = new FileReader();
    
                fileReader.onload = function (event) {
                    document.getElementById("preview").setAttribute("src", event.target.result);
                };
                fileReader.readAsDataURL(file[0]);
            }
        }
    </script>-->

    
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
                <h1>Registro de Equipo</h1>
                <div class="container-form">
                    <form action="validarRegistroEquipo.php" method="POST">
                        <!--Informacion general-->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="Serial">Serial</label>
                                        <input type="text" class="form-control" id="numSerial" >
                                        <input type="button" id="btnSerial">Generar serial</input>
                                        
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="numDispositivo">Serial del Dispositivo</label>
                                        <input type="text" class="form-control" id="numDispositivo" name="numDispositivo">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="numTecNM">Serial TecNM</label>
                                        <input type="text" class="form-control" id="numTecNM" name="numTecNM">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="tipoActivo">Tipo de activo</label>
                                        <input class="form-control" id="tipoActivo" type="text">
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="nombreActivo">Nombre</label>
                                        <input type="text" class="form-control" id="nombreActivo" name="nombreActivo">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="fechaAlta">Fecha de alta:</label>
                                        <input type="date" class="form-control" id="fechaAlta" name="fechaAlta">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="estatus">Estatus</label>
                                        <select class="form-control" id="estatus" name="estatus" onchange="registroNuevoEstatus(this);">
                                        <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                            $consulta = $conexion-> query("SELECT * FROM estatus");

                                            while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                echo "<option value ='".$fila['id_estatus']."'>".$fila['nombre_estatus']."</option>"; //muestra los datos de la tabla externa
                                            }

                                        ?>
                                        <option value="nuevo">Otro...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 oculto">
                                        <label for="nuevoEstatus">Nuevo estatus</label>
                                        <input type="text" class="form-control" id="nuevoEstatus" name="nuevoEstatus">    
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="marca">Marca</label>
                                        <input type="text" class="form-control" id="marca" name="marca">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="modelo">Modelo</label>
                                        <input type="text" class="form-control" id="modelo" name="modelo">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="color">Color</label>
                                        <input type="text" class="form-control" id="color" name="color">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="descripcionActivo">Descripcion del Activo</label>
                                        <textarea class="form-control" id="descripcionActivo" rows="3"></textarea>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="archivoImagen">Imagen:</label>
                                    <input type="file" class="form-control-file" id="archivoImagen" name="archivoImagen" >
                                    <div class="visorImagen" id="visorArchivo">
                                        <!--Aqui se despliega el prevew de la imagen-->
                                    </div>
                                    <input type="file" name="file" id="file" accept="image/*" onchange="previewImagen();">
 
                                    <img id="preview">
                                </div>
                            </div>    
                        </div>
                        <!--Informacion equipo-->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="capacidadMemoria">Capacidad de memoria</label>
                                        <input type="text" class="form-control" id="capacidadMemoria" name="capacidadMemoria">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="procesador">Procesador</label>
                                        <input type="text" class="form-control" id="procesador" name="procesador">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="discoDuro">Disco Duro</label>
                                        <input type="text" class="form-control" id="discoDuro" name="discoDuro">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="pulgadas">Pulgadas</label>
                                        <input type="text" class="form-control" id="pulgadas" name="pulgadas">
                                    </div>
                                </div>        
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="resolucion">Resolucion</label>
                                        <input type="text" class="form-control" id="resolucion" name="resolucion">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="conectividad">Conectividad</label>
                                        <input type="text" class="form-control" id="conectividad" name="conectividad">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="tipoEntrada">Tipo de entrada</label>
                                        <input type="text" class="form-control" id="tipoEntrada" name="tipoEntrada">
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <!--Informacion de ubicacion-->
                        <div class="row">
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="tipoUbicacion">Ubicacion</label> <!--Tipo/Nobre ubicacion-->
                                        <select class="form-control" id="tipoUbicacion" name="tipoUbicacion" >
                                        <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                            $consulta = $conexion-> query("SELECT * FROM ubicaciones");

                                            while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                echo "<option value ='".$fila['id_ubicacion']."'>".$fila['tipo_ubicacion']." ".$fila['nombre_ubicacion']."</option>"; //muestra los datos de la tabla externa
                                            }
                                        ?>
                                        </select>
                                    </div>
                                       
                                </div>  
                                <!--      
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="nombreEdificio">Edificio</label>
                                        <input class="form-control" id="nombreEdificio" name="nombreEdificio" type="text"  
                                        value=" *<?php /* TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                            $consulta = $conexion-> query("SELECT * FROM ubicaciones");

                                            while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                echo "<option value ='".$fila['id_ubicacion']."'>".$fila['nombre_edificio']."</option>"; //muestra los datos de la tabla externa
                                            }
                                            */
                                        ?>" disabled>
                                        
                                    </div>
                                    -->
                                    <!-- 
                                    <div class="form-group col-md-6">
                                        <label for="descripEdificio">Descripcion de la Ubicacion</label>
                                        <textarea class="form-control" id="descripEdificio" rows="3"name="descripEdificio" type="text" disabled>
                                            <?php /* TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                            $consulta = $conexion-> query("SELECT * FROM ubicaciones");

                                            while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                echo "<option value ='".$fila['id_ubicacion']."'>".$fila['descripcion_ubicacion']."</option>"; //muestra los datos de la tabla externa
                                            }*/
                                            ?>
                                        </textarea>
                                    </div>
                                    -->
                                    <!--<div class="form-group col-md-3">
                                        <label for="capacidad">Capacidad</label>
                                        <input class="form-control" id="capacidad" name="capacidad" type="text" placeholder="Disponible??" value="" disabled>
                                    </div>-->
                                </div>   
                            </div>
                        </div>
                        <!--Generar codigo QR-->
                        <div class="col-4 col-12-sm ">
                            <div class="form-group">
                                <label for="archivoQR">Codigo QR:</label>
                                <input type="file" class="form-control-file" id="archivoQR" name="archivoQR">
                                <div class="visorImagenQR" id="visorArchivoQR">
                                    <!--Aqui se despliega el prevew de la imagen-->
                                </div>
                            </div>
                        </div>                
                        <div class="form-row center">
                            <button type="submit" class="btn btn-success btn-lg">Registrar Activo</button>
                        </div>
                    </form>
                </div>


            </div>

        </div>
        
        
            
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


        <script src="script.js">
            /*Archivo js*/ 
        </script>

       
                                          
        

    </body>
    
</html>
<script type="text/javascript">
$(document).ready(function() {
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  
    function getARandomOneInRange() {
      return possible.charAt(Math.floor(Math.random() * possible.length));
    }
  
    function getRandomFour() {
      return getARandomOneInRange() + getARandomOneInRange() + getARandomOneInRange() + getARandomOneInRange();
    }
  
    $('#btnSerial').click(function() {
        //concatenacion ejemplo AA45-522S-889CV-OPGC1
      var serial = `${getRandomFour()}-${getRandomFour()}-${getRandomFour()}-${getRandomFour()}`;
      $('#numSerial').val(serial);
    });

  });
  

</script>

 <script type="text/javascript">
            function registroNuevoEstatus(that) {
            if (that.value == "nuevo") {
                document.getElementById("nuevoEstatus").style.display = "block";
            } else {
                document.getElementById("nuevoEstatus").style.display = "none";
            }
        }
        </script>


