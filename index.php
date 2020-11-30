<?php

    include('conexion_db.php');

    if($_POST){
        $email = $_POST['correo'];
        $password = $_POST['contraseña'];

        $consulta ="SELECT id_usuario, idX_rol, nombre_usuario, contrasena, correo FROM `usuarios` WHERE correo='$email'";
        $resultado = mysqli_query($conexion,$consulta);
        
        $filas = mysqli_num_rows($resultado);

        if($filas > 0){

            $row = $resultado->fetch_assoc();
            //base de datos
            $password_db = $row['contrasena'];
            //campo de texto
            //$password_campo = sha1($password);
            $password_campo = $password;

            if($password_db == $password_campo){

                $_SESSION['id'] = $row['id_usuario'];
                $_SESSION['nombre'] = $row['nombre_usuario'];
                $_SESSION['rol'] = $row['idX_rol'];

                header("location: inicio.php");

            }else{
                //echo "La contraseña no coincide";
                echo '<script>
                    
                    alert("Contraseña incorrecta!");
                       
                    </script>';
            }



        }else{
            echo "No existe usuario";
        }
    }
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--estilos css-->
    <link rel="stylesheet" href="css/login-styles.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--Iconos-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">
    <!--Estilo de fuente-->    
    
    <title>Login</title>
  </head>
  <body>
    <div class="container">
        
        <div class="row tarjeta">
            <div class="col-lg-5 izquierda">
                <img src="img/img-login.jpg" class="img-fluid " alt="">
            </div>
            <div class="col-lg-7 derecha">
                <div class="row">
                    <img src="img/img-titulo.png" class="img-fluid" alt="">
                </div>
                <div class="alert alert-danger" id="alerta" role="alert" >
                    <i class="fas fa-exclamation-triangle"></i>
                    Correo o contraseña incorrectos!
                </div>
                <div class="row">
                    <form action="#" method="POST" id="formenvio_1">
                        <div class="form-row input-contenedor">
                            <i class="fas fa-user"></i>
                            <input type="email" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="CORREO" required>
                        </div>
                        <div class="form-row input-contenedor">
                            <i class="fas fa-lock"></i>
                            <input type="password" class="form-control"  name="contraseña" placeholder="CONTRASEÑA" required>
                        </div>
                        <div class="form-row btn-ingresar">
                            <button type="submit" class="btn" >INGRESAR</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>

    

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>

<script type="text/javascript">
		function Alerta(){
			document.getElementById("formulario-crear-usuario").style.display = "block";
		}
		function Ocultar(){
			document.getElementById("formulario-crear-usuario").style.display = "block";
			document.getElementById("tabla-de-usuarios").style.display = "none";
			
		}
	</script>