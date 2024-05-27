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

        <title>Bajas</title>
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
                    <h1>Baja de Activos</h1>
                    <div class="container-form">
                        <form action="validarBajas.php" method="POST" >
                                                        <!--Buscar Activo-->
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="numSerial">Serial</label>
                                            <input type="text" class="form-control " id="numSerial" name = "numSerial" >
                                            
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="numDispositivo">Serial del Dispositivo</label>
                                            <input type="text" class="form-control" id="numDispositivo" name="numDispositivo">
                                        </div>
                                        <div class="form-group col-md-4">
                                        <label for="input-datalist">Timezone</label>
                                        <input type="text" class="form-control" placeholder="Timezone" list="list-timezone" id="input-datalist">
                                        <select class="form-control" id="id_activos" name="activos">
                                        <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                                    $get_estatus= "SELECT * FROM activos";
                                                    $consulta = $db -> Db_query($get_estatus);
                                                    while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                                        echo "<option value ='".$fila['id_activos']."'>".$fila['numeroSerial']."</option>"; //muestra los datos de la tabla externa
                                                    }
                                                ?>
                                                <option value="">No especificado</option>
                                                </datalist>
                                        </div>
                                        <div class="modal-btns-acciones">
                                    <button type="submit" id="btn-registrar-usuario" class="btn btn-success">Buscar</button>
                                <!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
                                </div>
                </div>
            </div>
        </div>
</form>
</div>
            
            
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
        <script src="script.js">
            /*Archivo js*/ 
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