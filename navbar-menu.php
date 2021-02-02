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
    <div><a href="logout.php"><i class="fas fa-door-open logout-icon-navbar"></i></a></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    
    <!--Boton de cerrar sesion-->
    <div><a href="logout.php"><i class="fas fa-door-open log-out-icon"></i></a></div>
</nav>