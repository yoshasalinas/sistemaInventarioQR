<?php

include('conexion_db.php');

//$obtenerId = $_GET['id_usuario'];

if  (isset($_GET['id_usuario'])) {
    $obtenerId = $_GET['id_usuario'];

    $obtenerRegistro = $conexion->query("SELECT * FROM usuarios WHERE id_usuario = '$obtenerId'");
    $obtenerArreglo = mysqli_fetch_assoc($obtenerRegistro); 



  /*$id = $_GET['id_usuario'];
  $query = "SELECT * FROM usuarios WHERE id_usuario = $id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 12) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
  }*/
}


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
        
        
        <title>Usuarios</title>
        
    </head>


    <body>
        
        <!--CODIGO DE MODA:EDITAR USUARIO-->
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
                <form id="formulario-nuevoUsuario" action="validarRegistroUsuarios.php" method="POST" onsubmit="verificarPasswords(); return false">
                    <div class="form-row ">
                        <div class="form-group col-md-6">
                            <label for="nombre">ID</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $obtenerId ?>" required>
                        </div>      
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $obtenerArreglo['nombre'] ?>" required>
                        </div>      
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-md-6">
                            <label for="aMaterno">Apellido materno</label>
                        <input type="text" class="form-control" id="aMaterno" name="aMaterno" required>    
                        </div>
                        <div class="form-group col-md-6">
                            <label for="aPaterno">Apellido paterno</label>
                            <input type="text" class="form-control" id="aPaterno" name="aPaterno" required>    
                        </div>     
                             
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label for="rol">Rol</label>
                            <select class="form-control" id="rol" name="rol">
                                <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                    $consulta = $conexion-> query("SELECT * FROM rol");
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
                            <label for="contraseña">Contraseña</label>
                            <input type="password" class="form-control"  name="contraseña" id="pass1" required>      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirmarContraseña">Confirmar contraseña</label>
                            <input type="password" class="form-control" name="confirmarContraseña" id="pass2" required>      
                        </div>
                    </div>
                    <div class="modal-btns-acciones">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="registrar" class="btn btn-success">Guardar cambios</button>
                    <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
                    </div>
                </form>
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
        
            
        <script src="script.js">
            /*Archivo js para animacion en menu */ 
        </script>

    </body>
</html>

<script src="js/datatables.js">
    /*Archivo js para plugin datatables*/ 
</script>

<script type="text/javascript">
    function verificarPasswords() {
 
    // Ontenemos los valores de los campos de contraseñas 
    pass1 = document.getElementById('pass1');
    pass2 = document.getElementById('pass2');

    //
    var formulario = document.getElementById("formulario-nuevoUsuario");
 
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




