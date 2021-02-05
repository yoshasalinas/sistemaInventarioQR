<nav class="navbar-superior navbar-expand-lg navbar-light fixed-top">
    <!--Boton de menu Sidebar-->
    <div class="menu-sidebar" id="sidebarCollapse"><span class="fas fa-bars"></span></div>
    <!--Boton de menu navbar-->
    <div class="menu-navbar"><span class="fas fa-bars"></span></div>
    <div class="logo">
        Control de Inventario
    </div>
    
    <div class="nav-items">
        <div class="sidebar-header">
            <i id="usuario-icon" class="fas fa-user"></i>
            <h1><?php echo $nombre ?></h1>
        </div>
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
                <li>
                    <a href="configuracionEstatus.phpp"><i class="fas fa-check-double"></i>Estatus de Activos</a>
                </li>
                <li>
                    <a href="configuracionEstatus.php"><i class="fas fa-check-double"></i>Estatus</a>
                </li>
            </ul> 
        </li>
        <?php } ?>
    
    </div>
    <!--Logos del TEC-->
    <img src="img/itcj-escudo-rojo.png"  class="logos-img" alt="">
    <img src="img/logo-TNM.png"  class="logos-img" alt="">
    
    <!--Botones para menu de tamaño pequeño, menu navbar-->
    <div><a href="#" onclick="cerrarSesion()"><i class="fas fa-door-open logout-icon-navbar"></i></a></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    
    <!--Boton de cerrar sesion-->
    <div><a href="#" onclick="cerrarSesion()"><i class="fas fa-door-open log-out-icon"></i></a></div>
</nav>

    <!--SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    


<script type="text/javascript">

    function cerrarSesion() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success botones-confirmacion',
                cancelButton: 'btn btn-danger botones-confirmacion'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Cerrar Sesion',
            text: "¿Esta seguro que desea salir de esta pagina?",
            icon: 'warning', //No me gusta el icono :C
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText: 'Si',
            cancelButtonText: 'Cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                //Redirigir a logout
                window.location.replace("logout.php");
                

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                
            }
        })
    }
</script>


<!--
<script type="text/javascript">
    const a = document.querySelector(".log-out-icon");

    a.onclick = ()=>{
       
        Swal.fire({
            /*d
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
        })*/

        title: "¿Estás seguro de cerrar session?",
        type: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Cerrar session",
        closeOnConfirm: false
        },
        function (isConfirm) {
            if(isConfirm){
                //$(elemento).closest('tr').remove();

                //location.href ="logout.php";

                

                swal({
                    title: "Eliminado",
                    text: "Eliminaste el registro del proyecto.",
                    type: "success"
                });

            }else{
                swal("No se ha eliminado.","El registro NO ha sido eliminado.","error");
                delay(2000);
            }
        });
    }
</script>-->

 <!--
     $(document).on('click', '.borrar', function (event) {
    var elemento = $(this);

    swal({
        title: "¿Estás seguro?",
        text: "Estás por borrar un proyecto, este no se podrá recuperar más adelante.",
        type: "warning",
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Continuar",
        closeOnConfirm: false
        },
        function (isConfirm) {
            if(isConfirm){
                $(elemento).closest('tr').remove();

                swal({
                    title: "Eliminado",
                    text: "Eliminaste el registro del proyecto.",
                    type: "success"
                });
            }else{
                swal("No se ha eliminado.","El registro NO ha sido eliminado.","error");
                delay(2000);
            }
        });
});
 -->