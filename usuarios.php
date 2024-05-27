<?php

include('conexion_db.php');

session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");
}

$nombre = $_SESSION['nombreUsuario'];
$tipo_usuario = $_SESSION['rol'];

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
        <link href="css/usuarios-styles.css" rel="stylesheet" type="text/css">
        <!--icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <!--  Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
        <!--  extension responsive  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        
        
        <title>Usuarios</title>
        
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
                            <H1>Usuarios del sistema</H1>
                        </div>
                    </div>
                    <div class="row btn-nuevoUsuario" >
                        <div class="col-lg-12">
                            <button  type="submit" class="btn btn-nuevoUsuario" data-toggle="modal" data-target="#modal-nuevoUsuario">
                                Registrar nuevo usuario
                                <i class="fas fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                    <!--Tabla de usuarios registrados-->
                    <div class="row" id="tabla-de-usuarios">
                        <div class="col-lg-12">
                            <table id="example" class="table table-striped table-bordered tabla-usuarios" >
                                <thead>
                                    <tr>
                                       <!--<th scope="col">ID</th>-->
                                        <th scope="col">Rol</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido Paterno</th>
                                        <th scope="col">Apellido Materno</th>
                                        <th scope="col">Nombre de Usuario</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">...</th>
                                    </tr>
                                </thead>

                                    <?php 

                                    $conexion = $db -> connect();
                                    
                                    $select = "SELECT usuarios.*, rol.rol FROM usuarios INNER JOIN rol ON usuarios.idX_rol = rol.id_rol";
                                    //$usuario = mysqli_query($conexion, $select);
                                    $usuario = $db -> Db_query($select);

                                    while ($getFila = mysqli_fetch_array($usuario)) { 

                                        $datos = $getFila[0].'||'. //ID
                                                $getFila[8]."||". //rol
                                                $getFila[2]."||". //nombre
                                                $getFila[3]."||". //ap
                                                $getFila[4]."||". //am
                                                $getFila[5]."||".
                                                $getFila[6]."||". //pass
                                                $getFila[7];

                                    ?>
                                <tbody> 
                                    <tr>
                                    <th scope="row"> <?php echo $getFila[8] ?> </th> <!-- rol--> 
                                        <th><?php echo $getFila[2] ?></th> <!--nom-->
                                        <td><?php echo $getFila[3] ?></td> <!--ap-->
                                        <td><?php echo $getFila[4] ?></td> <!--am-->
                                        <td><?php echo $getFila[5] ?></td> <!--nomUser-->
                                        <td><?php echo $getFila[7] ?></td> <!--correo-->
                                        
                                        <!--botones--> 
                                        <td>
                                            <!--Editar-->
                                            <button href="" type="button"  id="ver_modal" class="btn btn-outline-secondary acciones-btn " data-toggle="modal" data-target="#modal-editarUsuario" onclick="llenarModal_actualizar('<?php echo $datos ?>');">
                                                <i class="far fa-edit"></i>
                                            </button>

                                            <!--Eliminar-->
                                            <button href="" type="button" class="btn btn-outline-danger acciones-btn" data-toggle="modal" data-target=<?php echo "#modal-eliminarUsuario" . $getFila[0]; ?>>
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--Eliminar Usuario-->       
                                <div class="modal fade" id=<?php echo "modal-eliminarUsuario" . $getFila[0]; ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                        <a id="btn-eliminar"  href="eliminarUsuarios.php?id=<?php echo $getFila[0]; ?>" class="btn btn-danger">Eliminar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
     
                               <?php } ?>

                            </table>
                            <!--Variable auxiliar para mostrar alerta "Usuario Eliminado"-->
                            <?php if (isset($_GET['eliminar'])) : ?>
                                <div class="flash-data" data-flashdata="<?= $_GET['eliminar']; ?>"></div>
                            <?php endif; ?>

                            <!--Variable auxiliar para mostrar alerta "Usuario Registrado"-->
                            <?php if (isset($_GET['registro'])) : ?>
                                <div class="flash-data-r" data-flashdata="<?= $_GET['registro']; ?>"></div>
                            <?php endif; ?>

                                <!--Variable auxiliar para mostrar alerta "Usuario Registrado"-->
                                <?php if (isset($_GET['editar'])) : ?>
                                <div class="flash-data-e" data-flashdata="<?= $_GET['editar']; ?>"></div>
                            <?php endif; ?>         
                            
                        </div>
                    </div>

                                        
                    
                    
                </div>
            </div> <!--FIN Contenido principal-->
        </div>

        <!-- Modal: Registro de nuevo usuario-->
        <div class="modal fade" id="modal-nuevoUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <H2 class="modal-title" id="exampleModalLongTitle">Nuevo usuario</H2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div id="msg"></div>
                            <!-- Mensajes de Verificación -->
                            <div id="error" class="alert alert-danger ocultar" role="alert">
                                Las Contraseñas no coinciden, vuelve a intentar!
                            </div>
                           
                            <!-- Fin Mensajes de Verificación -->
                            <form id="formulario-nuevoUsuario" action="validarRegistroUsuario.php" method="POST" >
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>      
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="aMaterno">Apellido paterno</label>
                                    <input type="text" class="form-control" id="aPaterno" name="aPaterno" required>    
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="aPaterno">Apellido materno</label>
                                        <input type="text" class="form-control" id="aMaterno" name="aMaterno" >    
                                    </div>     
                                         
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="rol">Rol</label>
                                        <select class="form-control" id="rol" name="rol">
                                            <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                                $get_roles = "SELECT * FROM rol";
                                                $consulta = $db -> Db_query($get_roles);
                                                while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                    echo "<option value ='".$fila['id_rol']."'>".$fila['rol']."</option>"; //muestra los datos de la tabla externa
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nombreUsuario">Nombre de usuario</label>
                                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="correo">Correo electronico</label>
                                        <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" required>      
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="contrasena">Contraseña</label>
                                        <input type="password" class="form-control"  name="password" id="password" required>      
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="confirmarContrasena">Confirmar contraseña</label>
                                        <input type="password" class="form-control" name="confirmarpass" id="confirmarpass" required>      
                                    </div>
                                </div>
                                
                                <div class="modal-btns-acciones">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" id="btn-registrar-usuario" class="btn btn-success">Registrar</button>
                                <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Modal: Editar informacion del usuario-->
        <div class="modal fade" id="modal-editarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <H2 class="modal-title" id="exampleModalLongTitle">Usuario</H2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div id="msg"></div>
                            <!-- Mensajes de Verificación -->
                            <div id="error" class="alert alert-danger ocultar" role="alert">
                                Las Contraseñas no coinciden, vuelve a intentar!
                            </div>
                            <!-- Fin Mensajes de Verificación -->
                             <!-- *********    FORMULARIO VENTANA MODAL EDITAR USUARIO  **********************************************************************-->
                            <form id="formulario-editarUsuario" action="updateUsuarios.php" method="POST" >
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                       <!-- <label for="id-edit">ID Usuario</label>
                                        <input type="text" class="form-control" id="id-edit" name="id-edit" value="" required>-->
                                    </div>      
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="id-rol-edit">Rol</label>     
                                        <input type="text" class="form-control" id="id-rol-edit" name="id-rol-edit" value="" readonly>
                                    </div>      
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="nombre-edit">Nombre</label>
                                        <input type="text" class="form-control" id="nombre-edit" name="nombre-edit" value="" required>
                                    </div>      
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="aMaterno-edit">Apellido materno</label>
                                    <input type="text" class="form-control" id="aMaterno-edit" name="aMaterno-edit" required>    
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="aPaterno-edit">Apellido paterno</label>
                                        <input type="text" class="form-control" id="aPaterno-edit" name="aPaterno-edit" required>    
                                    </div>     
                                        
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="id-rol-edit">Rol</label>
                                        <select class="form-control" id="id-rol-edit" name="id-rol-edit">
                                            <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                                $get_roles = "SELECT * FROM rol";
                                                $consulta = $db -> Db_query($get_roles);
                                                while($getFila=$consulta->fetch_array()){ //recorre el arreglo
                                                    echo "<option value ='".$getFila['id_rol']."'>".$getFila['rol']."</option>"; //muestra los datos de la tabla externa
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nombreUsuario-edit">Nombre de usuario</label>
                                        <input type="text" class="form-control" id="nombreUsuario-edit" name="nombreUsuario-edit" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="correo-edit">Correo electronico</label>
                                        <input type="email" class="form-control" id="correo-edit" name="correo-edit" aria-describedby="emailHelp" required>      
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="contrasena-edit">Contraseña</label>
                                        <input type="password" class="form-control"  name="contrasena-edit" id="pass1" required>      
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="confirmarContrasena-edit">Confirmar contraseña</label>
                                        <input type="password" class="form-control" name="confirmarContrasena-edit" id="pass2" required>      
                                    </div>
                                </div>
                                <div class="modal-btns-acciones">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <!--ME QUEDE AQUI-->
                                    <button type="submit" id="btn-registrar-cambios" class="btn btn-success">Guardar cambios</button>
                                <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button> href="validarRegistroUsuario.php"-->
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
    var formulario = document.getElementById("formulario-nuevoUsuario");
    //var formularioEditar = document.getElementById("formulario-editarUsuario");
 
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
           // formularioEditar.submit();
            return true;
        }
 
    }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        /*
        $('.editbtn').on('click', function()
        {
            $('#modal-editarUsuario').modal('show');

                
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                }).get();

                console.log(data);

                //$('#id').val(data[0]);
                $('#nombre-edit').val(data[0]);
                $('#aMaterno-edit').val(data[1]);
                
            
        });*/
        /*
        $(document).on('click', '.editbtn', function(){  
            $('#modal-editarUsuario').modal('show');
            
          
        });
        /*
        function GetUserDetails() {
            // Add User ID to the hidden field for furture usage
            //$("#hidden_user_id").val(id);

            /*
            $.post("readUserDetails.php", {
                    id: id
                },
                function (data, status) {
                    // PARSE json data
                    var user = JSON.parse(data);
                    // Assing existing values to the modal popup fields
                    $("#update_idalumno").val(user.idalumno);
                    $("#update_codalumno").val(user.codalumno);
                    $("#update_obs").val(user.obs);
                }
            );
            // Abrir modal popup
            $("#modal-editarUsuario").modal("show");
        } */
    });
</script>

<!--FUNCIONAMIENTO PARA MENU NAVBAR-->
<script>
    const menuBtn = document.querySelector(".menu-navbar span");
    const logoutBtn = document.querySelector(".logout-icon-navbar");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    

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
    logoutBtn.onclick = ()=>{
        logoutBtn.classList.add("hide");
        cancelBtn.classList.add("show");
    }

</script>

<!--FUNCION ALERTA: USUARIO ELIMINADO-->
<script type="text/javascript">
    $('#btn-eliminar').on('click', function(){
        document.location.href = href;
    })

    const flashdataEliminar = $('.flash-data').data('flashdata')
    if(flashdataEliminar) {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Usuario Eliminado',
            showConfirmButton: false,
            timer: 1600
        })
    }
</script>

<!--FUNCION ALERTA: USUARIO REGISTRADO-->
<script type="text/javascript">
    $('#btn-registrar-usuario').on('click', function(){
        document.location.href = href;
    })

    const flashdataRegistro = $('.flash-data-r').data('flashdata')
    if(flashdataRegistro) {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Nuevo usuario registrado',
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
            title: 'Usuario actualizado',
            showConfirmButton: false,
            timer: 1600
        })
    }
</script>