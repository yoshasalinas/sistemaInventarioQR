<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
		<title>Inicio</title>
		<!-- Bootstrap Css -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<!-- Hoja de estilos -->
		<link rel="stylesheet" href="css/inicio-style.css">

		<!-- Google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Muli:400,700&display=swap" rel="stylesheet">

		<!--icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">
		
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
					<div class="title">Control de <span>Inventario</span></div>
					<div class="sidebar-btn" id="menu-toggle">
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
				<H1>Bienvenido</H1>
				<div class="form-row center">
                    <button type="submit" class="btn btn-success btn-lg">Probando bootstra</button>
                </div>
			</div>
			<!--main container end-->
		</div>
		<!--wrapper end-->

		<!-- Bootstrap y JQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$(".sidebar-btn").click(function(){
					$(".wrapper").toggleClass("collapse");
				});
			});
		</script>


		
	</body>
</html>
