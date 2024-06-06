<?php

include('conexion_db.php');

session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");
}

$nombre = $_SESSION['nombreUsuario'];
$tipo_usuario = $_SESSION['rol'];

$db = new Db();
//$conexion = $db -> connect();
//$select = "SELECT * FROM estatus";
//$estatus = $db-> Db_query($select);


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
        <link href="css/estatus-styles.css" rel="stylesheet" type="text/css">
        <!--icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <!--  Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
        <!--  extension responsive  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        
        
        <title>Estatus</title>
        
    </head>


    <body>
        <!--Navbar-->
        <?php include('navbar-menu.php'); ?>

        <div class="wrapper fixed-left">
            <!--Menu sidebar-->
            <?php include('sidebar-menu.php'); ?>

            <!--Contenido principal-->
            <div id="content" class="container tarjeta"> 
                <div class="container">
                    <!---->
                    <div class="row " >
                        <div class="col-lg-12">
                            <H1>Estatus</H1>
                            <div id="ok" class="alert alert-success ocultar" role="alert">
                                Registro exitoso!
                            </div>
                        </div>
                    </div>
                    <div class="row btn-nuevoEstatus" >
                        <div class="col-lg-12">
                            <button  type="submit" class="btn btn-nuevoEstatus" data-toggle="modal" data-target="#modal-nuevoEstatus">
                                Registrar nuevo estatus
                                <i class="fas fa-check-double"></i>
                            </button>
                        </div>
                    </div>
                    <!--Tabla de estatus registrados-->
                    <div class="row" id="tabla-de-estatus">
                        <div class="col-lg-12">
                            <table id="example" class="table table-striped table-bordered tabla-estatus" style="width:100%">
                                <thead>
                                    <tr>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">...</th>
                                        </tr>
                                </thead>
                                <?php 

                                $conexion = $db -> connect();

                                $select = "SELECT * FROM estatus ";
                                //$usuario = mysqli_query($conexion, $select);
                                $estatus = $db -> Db_query($select);

                                while ($getFila = mysqli_fetch_array($estatus)) { 

                                    $datos = $getFila[0].'||'. //ID
                                             $getFila[1]."||"; //name estatus

                                ?>
                                <tbody>
                                        <tr>
                                        <th scope="row"> <?php echo $getFila[1] ?> </th> <!-- name estatus--> 

                                            <!--botones--> 
                                            <td>
                                            <!--Editar-->
                                            <button href="" type="button"  id="ver_modal" class="btn btn-outline-secondary acciones-btn " data-toggle="modal" data-target="#modal-editarEstatus" onclick="llenarModal_actualizar('<?php echo $datos ?>');">
                                                <i class="far fa-edit"></i>
                                            </button>
                                                <!-- Eliminar-->
                                                <button href="" type="button" class="btn btn-outline-danger acciones-btn" data-toggle="modal" data-target=<?php echo "#modal-eliminarEstatus" . $getFila[0] ?>>
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                </tbody>
                        </div>
                        </div>

                        <!--Eliminar estatus-->       

                        <div class="modal fade" id=<?php echo "modal-eliminarEstatus" . $getFila[0]; ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Eliminar estatus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="div">
                                            ¿Esta seguro que desea eliminar este estatus del registro?
                                        </div>
                                        <div class="modal-btns-acciones">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <a id="btn-eliminarEstatus" href="eliminarEstatus.php?id=<?php echo $getFila[0]; ?>" class="btn btn-danger">Eliminar</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div> <!--Fin de eliminar-->
                    <?php } ?>
                    </table>

                    
                            <!--Variable auxiliar para mostrar alerta "Estatus Eliminado"-->
                            <?php if (isset($_GET['eliminar'])) : ?>
                            <div class="flash-data-d" data-flashdata="<?= $_GET['eliminar']; ?>"></div>
                            <?php endif; ?>

                            <!--Variable auxiliar para mostrar alerta "Estatus Registrado"-->
                            <?php if (isset($_GET['registro'])) : ?>
                            <div class="flash-data-r" data-flashdata="<?= $_GET['registro']; ?>"></div>
                            <?php endif; ?>

                            <!--Variable auxiliar para mostrar alerta "Estatus Registrado"-->
                            <?php if (isset($_GET['editar'])) : ?>
                            <div class="flash-data-e" data-flashdata="<?= $_GET['editar']; ?>"></div>
                            <?php endif; ?>     
            

                        <!-- Modal: Registro de nuevo ubicacion-->
                        <div class="modal fade" id="modal-nuevoEstatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <H2 class="modal-title" id="exampleModalLongTitle">Nuevo Estatus</H2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form id="formulario-nuevoEstatus" action="validarEstatus.php" method="POST">
                                            <div class="form-row ">
                                                <div class="form-group col-12">
                                                    <label for="estatus">Estatus</label>
                                                    <input type="text" class="form-control" id="estatus" name="estatus" required>    
                                                </div>  
                                            </div>

                                            <div class="modal-btns-acciones">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" id="btn-registrar-estatus" class="btn btn-success">Registrar</button>
                                            <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  

                    <!--aqi-->
                </div>
            </div> <!--FIN Contenido principal-->
        </div>

                                <!-- Modal: Formulario de editar estatus-->
                                <div class="modal fade" id= "modal-editarEstatus"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <H2 class="modal-title" id="exampleModalLongTitle">Editar estatus</H2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form id="formulario-editarEstatus" action="updateEstatus.php" method="POST"> 
                                            <div class="form-row ">
                                                <div class="form-group col-12">
                                                    <label for="estatus-edit">Estatus</label>
                                                    <input type="text" class="form-control" id="estatus-edit" name="estatus-edit" value="" required>
                                                    
                                                    <!--<label for="editName"> <?php echo $datos ?> </th>-->
                                                </div>  
                                            </div>

                                            <div class="modal-btns-acciones">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" id="btn-registrar-cambios" class="btn btn-success">Guardar cambios</button>
                                            <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
                                            <input type="hidden" id="hidden_user_id">
                                            </div>
                                        </form>
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

<script src="js/datatables.js">
    /*Archivo js para plugin datatables*/ 
</script>

<script src="js/funciones.js">
    /*Archivo js para plugin datatables*/ 
</script>

<script type="text/javascript">
    function verificarPasswords() {
 
    // Ontenemos los valores de los campos de contraseñas 
    pass1 = document.getElementById('pass1');
    pass2 = document.getElementById('pass2');

    //
    var formulario = document.getElementById("formulario-nuevoEstatus");
 
    // Verificamos si las constraseñas no coinciden 
    if (pass1.value != pass2.value) {
 
        // Si las constraseñas no coinciden mostramos un mensaje 
        document.getElementById("error").classList.add("mostrar");
 
        return false;
    } else {

        
 
        // Si las contraseñas coinciden ocultamos el mensaje de error
        document.getElementById("error").classList.remove("mostrar");
 
        // Mostramos un mensaje mencionando que las Contraseñas coinciden 
        document.getElementById("ok").classList.remove("ocultar");
 
        // Desabilitamos el botón de login 
        //document.getElementById("registrar").disabled = true;
 
        // Refrescamos la página (Simulación de envío del formulario) 
        //setTimeout(function() {
          //  location.reload();
        //}, 3000);

        formulario.submit();
        return true;
    }
 
}
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

<!--FUNCION ALERTA: ESTATUS ELIMINADO-->
<script type="text/javascript">
    $('#btn-eliminarEstatus').on('click', function(){
        document.location.href = href;
    })

    const flashdataEliminar = $('.flash-data-d').data('flashdata')
    if(flashdataEliminar) {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Estatus Eliminado',
            showConfirmButton: false,
            timer: 1600
        })
    }
</script>

<!--FUNCION ALERTA: ESTATUS REGISTRADO-->
<script type="text/javascript">
    $('#btn-registrar-estatus').on('click', function(){
        document.location.href = href;
    })

    const flashdataRegistro = $('.flash-data-r').data('flashdata')
    if(flashdataRegistro) {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Nuevo estatus registrado',
            showConfirmButton: false,
            timer: 1600
        })
    }
</script>

<!--FUNCION ALERTA: USUARIO Editar-->
<script type="text/javascript">
    $('#btn-registrar-cambios').on('click', function(){
        document.location.href = href;
    })

    const flashdataEditar = $('.flash-data-e').data('flashdata')
    if(flashdataEditar) {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Estatus actualizado',
            showConfirmButton: false,
            timer: 1600
        })
    }
</script>

