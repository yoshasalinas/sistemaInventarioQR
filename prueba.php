<?php

include('conexion_db.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!--estilos css-->
        <link rel="stylesheet" href="css/login-style.css">
        <!--Iconos-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">
        <!--Estilo de fuente-->

        <title>Sistema Control Activos</title>


    </head>
    <body>
        <div class="container">
            <div class="row tarjeta ">
                <div class="col-lg-5 a">
                    <img src="img/imagen-login.jpg" class="img-fluid imagen1" alt="">
                </div>

                <div class="col-lg-7 ">
                    <div class="row centrado">
                        <img src="img/inventario1.png" class="img-fluid imagen2" alt="">
                    </div>
                        
                    <form action="validarLogin.php" method="POST" class="" >
                        <div class="form-row centrado color">
                            <div class="col-lg-7" id="user-group">
                                <input type="email" id="correoUsuario" name="email" placeholder="Correo" class="form-control p-4" required>
                            </div>
                        </div>
                        <div class="form-row centrado" id="contraseña-group">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="Contraseña" class="form-control my-3 p-4" required>
                            </div>
                        </div>

                        <div id="alerta-vacios" class="form-row centrado vacios">
                            <label for="">Error! Correo o contraseña incorrecta</label>
                            <i class="fas fa-exclamation-circle fa-lg"></i>
                        </div>

                        <div class="form-row centrado">
                            <div class="col-lg-7">
                                <button type="submit" name="submit" class="btn1 mt-3 bm-5" >Entrar</button>
                            </div>
                        </div>
                        <div class="form-row texto">
                            <a href="#" >¿Olvidaste tu contraseña?</a>
                        </div> 
                    </form>
                </div>
            </div>
        </div>

        
        <!--JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    </body>
</html>

<!--VALIDAR CAMPOS VACIOS-->
<script type="text/javascript">
    function camposVacios(){
        var correo=$("#correoUsuario").val();
	    var contrasena=$("#contraseñaUsuario").val();

        if(correo.length==0 || contrasena.length==0){
            alert("Campos vacios!");
        }
        else{
            href="inicio.php";
        }
    }
</script>