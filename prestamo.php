<?php
    
    include('conexion_db.php');

    session_start();

    if(!isset($_SESSION['id'])){
        header("Location: index.php");
    }

    $nombre = $_SESSION['nombreUsuario'];
    $tipo_usuario = $_SESSION['rol'];

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
        <link href="css/general-navbar-sidebar-menu-styles.css" rel="stylesheet" type="text/css">
        <!--icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!--  Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
        <!--  extension responsive  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        
        
        

        <title>Prestamos</title>
    </head>
    <body>
        <!--Navbar-->
        <?php include('navbar-menu.php'); ?>
        

        <div class="wrapper fixed-left">
            <!--Menu sidebar-->
            <?php include('sidebar-menu.php'); ?>
            
        <div id = "content" class="container tarjeta">
    <!---->
    <h1>Prestamo de Activos</h1>
    <div class="row mb-3" id="btn-nuevoPrestamo">
        <div class="col-lg-12">
            <button  type="button" class="btn btn-danger " onClick="mostrarSeleccionActivos()">
                Registrar nuevo prestamo
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    
    <!--Tabla-->
    <div class="row mb-3" id="tabla-prestamos">
        <div class="col-lg-12">
            <table id="example" class="table table-striped table-bordered tabla-activos" >
                <thead class="">
                    <tr>
                       <!--<th scope="col">ID</th>-->
                        <th scope="col">ID de prestamo</th>
                        <th scope="col">Lista de activos</th>
                        <th scope="col">Fecha de Prestamo</th>
                        <th scope="col">Fecha de Devolucion</th>
                        <th scope="col">...</th>
                        
                    </tr>
                </thead>
                <tbody> 
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                        <td>
                            <!--Boton de devolucion-->
                            <button type="button" href="" class="btn btn-outline-primary acciones-btn" data-toggle="modal" data-target="#modal-devolucion">
                                <i class="fas fa-people-carry"></i>
                                Devolución
                            </button>
                            
                        </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
    
    <!-- Modal: Devolución de prestamos-->
    <div class="modal fade" id="modal-devolucion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <H2 class="modal-title" id="exampleModalLongTitle">Devolución</H2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="container">
                            <form>
                                <div class="form-row ">
                                    <div class="form-group col-12">
                                        <label for="fechaAlta">Fecha de devolución</label>
                                            <input type="date" class="form-control" id="fechaPrestamo" name="fechaPrestamo" value="<?php echo date("Y-m-d");?>">
                                    </div>  
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-12">
                                        <label for="aMaterno">Activos:</label>
                                        <P>Listar activos que se prestaron...</P>
                                    </div>  
                                </div>
                                <div class="form-row">
                                    <!--Informacion de ubicacion-->
                                    <div class="form-group col-md-12">
                                        <label for="tipoUbicacion">Ubicación</label> <!--Tipo/Nobre ubicacion-->
                                        <select class="form-control" id="tipoUbicacion" name="tipoUbicacion" >
                                            <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                                $get_ubicaciones = "SELECT * FROM ubicaciones";
                                                $consulta = $db -> Db_query($get_ubicaciones);
                                                while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                    echo "<option value ='".$fila['id_ubicacion']."'>".$fila['tipo_ubicacion']." ".$fila['nombre_ubicacion']."</option>"; //muestra los datos de la tabla externa
                                                }
                                            ?>
                                        <option value="">No especificado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-btns-acciones">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" href="" value="" name="action" id="" class="btn btn-success">Aceptar</button>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="row" id="seleccionar-activo">
        <div class="col-lg-12">
            <h2>Seleccionar Activo</h2>
            <form class="" action="procesarMovimiento.php" method="POST">
                <div class="form-row">
                    <div class="form-group mr-2">
                        <input type="text" class="form-control" id="" name="lista[]" placeholder="Ingresar No. Serial...">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger buscar-btn" >
                            Buscar
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="container-form">
        <form action="validarRegistroEquipo.php" method="POST"></form>
            <!--Informacion general-->
            <div class="row">
                <div class="col-md-8">
                    <!--Informacion general-->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="numSerial">Serial</label>
                            <input type="text" class="form-control " id=""  aria-describedby="inputGroup-sizing-sm" readonly>
                            
                        </div>
                        <div class="form-group col-md-4">
                            <label for="numDispositivo">Serial del Dispositivo</label>
                            <input type="text" class="form-control" id="numDispositivo" name="numDispositivo"readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="numTecNM">Serial TecNM</label>
                            <input type="text" class="form-control" id="numTecNM" name="numTecNM"readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombreActivo">Nombre</label>
                            <input type="text" class="form-control" id="nombreActivo" name="nombreActivo" readonly>
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="fechaAlta">Fecha de alta</label>
                            <input type="date" class="form-control" id="fechaAlta" name="fechaAlta" value="" readonly>
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            
                            <div class="form-group ">
                                <label for="marca">Marca</label>
                                <input type="text" class="form-control" id="marca" name="marca" readonly>
                            </div>
                            <div class="form-group ">
                                <label for="modelo">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input type="text" class="form-control" id="color" name="color" readonly>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group ">
                                <label for="descripcionActivo">Descripción del Activo</label>
                                <textarea class="form-control" id="descripcionActivo" rows="5"readonly></textarea disabled>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                 
                </div> 
                <div class="col-md-4 ">
                 
                    <!--Informacion general-->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="tipoActivo">Tipo de activo</label>
                            <input class="form-control" id="tipoActivo" type="text" value="" readonly>
                        </div>
                    </div>
                    <!---->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="estatus">Estatus</label>
                            <select class="form-control" id="estatus" name="estatus" >
                                <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                    $get_estatus= "SELECT * FROM estatus";
                                    $consulta = $db -> Db_query($get_estatus);
                                    while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                        echo "<option value ='".$fila['id_estatus']."'>".$fila['nombre_estatus']."</option>"; //muestra los datos de la tabla externa
                                    }
                                ?>
                                <option value="">No especificado</option>
                            </select>
                        </div>
                    </div>
                    <!---->
                    <div class="form-row">
                        <!--Informacion de ubicacion-->
                        <div class="form-group col-md-12">
                            <label for="tipoUbicacion">Ubicación</label> <!--Tipo/Nobre ubicacion-->
                            <select class="form-control" id="tipoUbicacion" name="tipoUbicacion" readonly>
                            
                            <option value=""></option>
                            </select>
                        </div>
                    </div>
                    
                    
                   


                </div>
            </div>

        </form>

    </div>
        </div>
    </div>

    <!--Tabla de activos seleccionados-->
    <div class="row " id="tabla-activos">
        <div class="col-lg-12">
            <table id="example" class="table table-striped table-bordered tabla-activos" >
                <thead class="">
                    <tr>
                       <!--<th scope="col">ID</th>-->
                        <th scope="col">No. Serial</th>
                        <th scope="col">No. Serial Disp</th>
                        <th scope="col">No. TecNM</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Esatus</th>
                        <th scope="col">Ubicacion Actual</th>
                    </tr>
                </thead>
                    
                <tbody> 
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <!--Boton registro de prestamo-->
            <button href="" type="button"  id="ver_modal" class="btn btn-outline-secondary " data-toggle="modal" data-target="#modal-prestamo" onclick="">
                Registrar Prestamo
            </button>

            <!-- Modal: Formulario de prestamo-->
            <div class="modal fade" id="modal-prestamo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <H2 class="modal-title" id="exampleModalLongTitle">Prestamo</H2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <form>
                                    <div class="form-row ">
                                        <div class="form-group col-md-2">
                                            <label for="capacidad">Unidades</label>
                                            <input type="number" class="form-control" id="unidades" name="unidades" value="1" min="1" required>    
                                        </div> 
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group col-12">
                                            <label for="aMaterno">Nombre del departamento</label>
                                            <input type="text" class="form-control" id="departamento" name="departamento" required >    
                                        </div>  
                                    </div>
                                    <div class="form-row ">
                                        <div class="form-group col-12">
                                            <label for="fechaAlta">Fecha de prestamo</label>
                                                <input type="date" class="form-control" id="fechaPrestamo" name="fechaPrestamo" value="<?php echo date("Y-m-d");?>">
                                        </div>  
                                    </div>
                                    <div class="modal-btns-acciones">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" href="" value="" name="action" id="" class="btn btn-success">Aceptar</button>
                                    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        
        <!--SweetAlert-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>   

        <script src="script.js">
            /*Archivo js para animacion en menu */ 
        </script>


    </body>
</html>

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