<?php

include('conexion_db.php');


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--CSS-->
        <link rel="stylesheet" href="css/inicio-style.css">
        <link rel="stylesheet" href="css/registro-style.css">
        <!---->
          <!--Iconos-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
			crossorigin="anonymous">
		<!--Estilo de fuente-->

        <title>Registro Equipo</title>
        
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
                <h1>Registo de Equipo</h1>
                <div class="container-form">
                    <form action="validarRegistroEquipo.php" method="POST">
                        <!--Parte activo general-->
                        <div class="form-row">
                            <div class="col-8 col-12-sm ">
                                <div class="form-group ">
                                    <label for="numSerial">Numero Serial:</label>
                                    <!--<input type="text" class="form-control" id="numSerial" name="numSerial">-->
                                    <select class="form-control" id="numSerial" name="numSerial">
                                        <option value="">Seleccione:</option>

                                        <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                        $consulta = $conexion-> query("SELECT * FROM numeroserial");

                                        while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                            echo "<option value ='".$fila['id_numeroserial']."'>".$fila['numero_serial']."</option>"; //muestra los datos de la tabla externa
                                            
                                            
                                        }

                                        ?>
                                        
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="numDispositivo">Numero Serial del Dispositivo:</label>
                                        <input type="text" class="form-control" id="numDispositivo" name="numDispositivo">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="numTecNM">Numero Serial TecNM:</label>
                                        <input type="text" class="form-control" id="numTecNM" name="numTecNM">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tipoActivo">Tipo de Activo:</label>
                                        <select class="form-control" id="tipoActivo" name="tipoActivo">
                                            <option>Equipo</option>
                                            <option>Mobiliario</option>
                                            <option>Consumibles</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fechaAlta">Fecha de alta: </label>
                                        <input type="date" class="form-control" id="fechaAlta" name="fechaAlta">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="nombreActivo">Nombre Activo:</label>
                                        <input type="text" class="form-control" id="nombreActivo" name="nombreActivo">      
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="marca">Marca:</label>
                                        <input type="text" class="form-control" id="marca" name="marca">    
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="modelo">Modelo:</label>
                                        <input type="text" class="form-control" id="modelo" name="modelo">  
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="color">Color:</label>
                                        <input type="text" class="form-control" id="color" name="color">      
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="descripcionActivo">Descripcion:</label>
                                        <textarea class="form-control" id="descripcionActivo" name="descripcionActivo"  rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-12-sm ">
                                <div class="form-group">
                                    <label for="archivoImagen">Imagen:</label>
                                    <input type="file" class="form-control-file" id="archivoImagen" name="archivoImagen" >
                                    <div class="visorImagen" id="visorArchivo">
                                        <!--Aqui se despliega el prevew de la imagen-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Parte activo Equipo-->
                        <div class="form-row">
                            <div class="equipo col-12 ">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="capacidadMemoria">Capacidad de memoria:</label>
                                        <input type="text" class="form-control" id="capacidadMemoria" name="capacidadMemoria">      
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="procesador">Procesador:</label>
                                        <input type="text" class="form-control" id="procesador" name="procesador">    
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="discoDuro">Disco duro:</label>
                                        <input type="text" class="form-control" id="discoDuro" name="discoDuro">  
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="pulgadas">Pulgadas:</label>
                                        <input type="text" class="form-control" id="pulgadas" name="pulgadas">      
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="resolucion">Resolucion:</label>
                                        <input type="text" class="form-control" id="resolucion" name="resolucion">    
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="conectividad">Conectividad:</label>
                                        <input type="text" class="form-control" id="conectividad" name="conectividad">  
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="tipoEntrada">Tipo entrada:</label>
                                        <input type="text" class="form-control" id="tipoEntrada" name="tipoEntrada">  
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-4">
                                <label for="estatus">Estatus:</label>
                                <select class="form-control" id="estatus" name="estatus">
                                <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                        $consulta = $conexion-> query("SELECT * FROM estatus");

                                        while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                            echo "<option value ='".$fila['id_estatus']."'>".$fila['nombre_estatus']."</option>"; //muestra los datos de la tabla externa
                                            
                                            
                                        }

                                        ?>
                                </select>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="tipoUbicacion">Tipo de Ubicacion:</label>
                                    <select class="form-control" id="tipoUbicacion" name="tipoUbicacion">
                                        
                                        <?php // TODO ESTA LINEA DE CODIGO SOLO ES PARA TRAER LOS DATOS DE MIS TABLAS CON LA LLAVE FORANEA
                                        $consulta = $conexion-> query("SELECT * FROM ubicaciones");

                                        while($fila=$consulta->fetch_array()){ //recorre el arreglo
                                            echo "<option value ='".$fila['id_ubicacion']."'>".$fila['tipo_ubicacion']."</option>"; //muestra los datos de la tabla externa
                                            
                                        }
                                      

                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--Parte ubicacion-->
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="capacidad">Capacidad:</label>
                                <input type="text" class="form-control" id="capacidad" name="capacidad">    
                            </div>                      
                        </div>
                        
                        <!--Parte solo Salas!
                        <div class="form-row " id="soloUbicacionSalas">
                            <div class="form-group col-md-1">
                                <label for="fila">Fila:</label>
                                <input type="text" class="form-control" id="fila" name="fila">  
                            </div>
                            <div class="form-group col-md-1">
                                <label for="columna">Columna:</label>
                                <input type="text" class="form-control" id="columna" name="columna">  
                            </div>
                        </div>-->
                        
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
                
			
			<!--main container end-->
		</div>
		<!--wrapper end-->

		

        
        
        <!--JavaScript 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        jQuery first, then Popper.js, then Bootstrap JS 
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
-->
        


		
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </body>
</html>

<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
    </script>

<script type="text/javascript">

    function validarExt()
    {
        var archivoInput = document.getElementById('archivoImagen');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.jpg)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alert('El sistema solo acepta imagenes .jpg');
            archivoInput.value = '';
            return false;
        }

        else
        {
            //PRevio del PDF
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    document.getElementById('visorArchivo').innerHTML = 
                    '<embed src="'+e.target.result+'" width="300" height="300" />';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>
<script type="text/javascript">

    function validarExt2()
    {
        var archivoInput = document.getElementById('archivoQR');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.jpg)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alert('El sistema solo acepta imagenes .jpg');
            archivoInput.value = '';
            return false;
        }

        else
        {
            //PRevio del PDF
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    document.getElementById('visorArchivoQR').innerHTML = 
                    '<embed src="'+e.target.result+'" width="300" height="300" />';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>