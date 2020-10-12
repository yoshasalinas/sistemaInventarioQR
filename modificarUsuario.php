
<?php
include('conexion_db.php');
/*


$obtenerId = $_GET['id_usuario'];

$edit = $conexion->query("SELECT * FROM usuarios WHERE usuarios.id_usuario ='$obtenerId'");
$obtenerArreglo = mysqli_fetch_assoc($edit); 


if(isset($_POST['submit'])) {;
    $rol = $_POST['rol'];
    $nombre = $_POST['nombre'];
    $aPaterno = $_POST['aPaterno'];
    $aMaterno = $_POST['aMaterno'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $correo = $_POST['correo'];

  if (empty($nombre)) {
    $error['nombre'] = "El campo Numero de Control no puede estar vacio";
  }
  if (isset($error['nombre'])) {
  } else {
        $updateUsuario = $conexion->query(" UPDATE usuarios SET idx_rol='$rol' nombre='$nombre', apellido_paterno='$aPaterno', apellido_materno='$aMaterno', nombre_usuario='$nombreUsuario', correo='$correo' WHERE usuarios.id_usuario ='$obtenerId'");
    
    $conexion->close();

    header("Location: usuarios.php");
  }
}
*/
$nombre_usuario = $_GET['nombre_usuario']


$consulta = $conexion-> query("SELECT * FROM usuarios WHERE nombre_usuario ='$nombre_usuario'"); //Query donde selecciono toda mi tabla

while($mostrar=mysqli_fetch_array($consulta)){



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--CSS-->
		<link rel="stylesheet" href="css/inicio-style.css">
		<!---->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<!--Iconos-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
			crossorigin="anonymous">
		<!--Estilo de fuente-->

		<title>Inicio</title>

		
	</head>

	
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
					<div class="title">Control de <span>Inventario</span></div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<div class="header-logos">
						<img src="img/itcj-escudo-rojo.png"  class="" alt="">
						<img src="img/logo-TNM.png"  class="" alt="">
					</div>
					<ul>
						<!--Cerrar sesion-->
						<li><a href="index.php"><i class="fas fa-sign-out-alt"></i></a></li>

					</ul>
				</div>
			</div>
			<!--header menu end-->
			
			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<i class="fas fa-user-check"></i>
						<p>Administrador</p>
					</center>
					<li class="item">
						<a href="inicio.php" class="menu-btn">
							<i class="fas fa-door-open"></i></i><span>Inicio</span>
						</a>
					</li>
					<!--Pendiente arreglar ligas "profile"-->
					<li class="item" id="profile">
						<a href="#profile" class="menu-btn">
							<i class="far fa-clipboard"></i><span>Movimientos<i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="cambioUbicacion.php"><i class="fas fa-thumbtack"></i><span>Cambio de Ubicacion</span></a>
							<a href="prestamo.php"><i class="fas fa-people-carry"></i><span>Prestamo</span></a>
							<a href="bajas.php"><i class="fas fa-trash-alt"></i><span>Bajas</span></a>
						</div>
					</li>
					<!--Pendiente arreglar ligas"messages"-->
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-plus"></i><span>Nuevo Registro<i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="registroEquipo.php"><i class="fas fa-desktop"></i><span>Registro Equipo</span></a>
							<a href="registroMobiliario.php"><i class="fas fa-chair"></i><span>Registro Mobiliario</span></a>
							<a href="registroConsumibles.php"><i class="fas fa-microchip"></i></i><span>Registro Consumibles</span></a>
						</div>
					</li>
					<li class="item">
						<a href="inventario.php" class="menu-btn">
							<i class="fas fa-box-open"></i></i><span>Inventario</span>
						</a>
					</li>
					<li class="item">
						<a href="ubicaciones.php" class="menu-btn">
							<i class="fas fa-map-marked-alt"></i><span>Ubicaciones</span>
						</a>
					</li>
					<li class="item">
						<a href="reportes.php" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>Reportes</span>
						</a>
					</li>
					<!--Pendiente arreglar ligas"settings"-->
					<li class="item" id="settings">
						<a href="#settings" class="menu-btn">
							<i class="fas fa-cog"></i><span>Configuraciones<i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="usuarios.php"><i class="fas fa-users"></i><span>Usuarios</span></a>
							<a href="ubicaciones.php"><i class="fas fa-map-marker-alt"></i><span>Ubicaciones</span></a>
						</div>
					</li>
					
				</div>
			</div>
			<!--sidebar end-->


			<!--main container start-->
			<div class="main-container">
<!--Modificar usuario usuario-->
				<div class="container-form-modificar-usuarios ">
					<H1>Informacion del usuario:</H1>
					<form action="" method="POST" >
						<!--Registro de usuarios-->
				
						<div class="form-row"> 
							<div class="equipo col-12">
								<div class="form-row">
									<div class="form-group col-md-3 ">
										<label for="nombre">Nombre:</label>
										<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $mostrar['nombre']?>">    
										
									</div>
									<div class="form-group col-md-3">
										<label for="aPaterno">Apellido paterno:</label>
										<input type="text" class="form-control" id="aPaterno" name="aPaterno" value="<?php echo $mostrar['apellido_paterno']?>">    
									</div>
									<div class="form-group col-md-3">
										<label for="aMaterno">Apellido materno:</label>
										<input type="text" class="form-control" id="aMaterno" name="aMaterno" value="<?php echo $mostrar['apellido_materno']?>">  
									</div>
								</div>
								<div class="form-row">
									<div class="col-4">
										<label for="rol">Rol:</label>
										<select class="form-control" id="rol" name="rol">
                                        <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                        $consulta = $conexion-> query("SELECT * FROM rol");

                                        while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                            echo "<option value ='".$fila['id_rol']."'>".$fila['rol']."</option>"; //muestra los datos de la tabla externa
            
                                        }

                                        ?>
										</select>
									</div>
									<div class="col-4">
										<label for="nombreUsuario">Nombre usuario:</label>
										<input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" value="<?php echo $mostrar['nombre_usuario']?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-5">
										<label for="correo">Correo:</label>
										<input type="email" class="form-control" id="correo" name="correo" value="<?php echo $mostrar['correo']?>">      
										<?php
										}
										?>
									</div>
								</div>
							</div>
						</div>
						
						<button  type="submit" name="submit" class="btn btn-primary btn-success" >Aceptar</button>
						<!--<button  type="btn" class="btn-success" onclick="Ocultar()"  >Ocultar</button>-->
					</form>
						
				</div>
			</div>
			<!--main container end-->
		</div>
		<!--wrapper end-->

		<!--JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
		</script>
	</body>
</html>