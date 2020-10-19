<?php

include('conexion_db.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!--estilos css-->
        <link rel="stylesheet" href="css/login-style.css">
        <!--Iconos-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
            crossorigin="anonymous">
        <!--Estilo de fuente-->

        <title>Sistema Control Activos</title>


    </head>
    <body>
        <section class=Form my-4 mx-5> 
            <div class="container">
                <div class="row tarjeta">
                    <div class="col-lg-5 a">
                        <img src="img/imagen-login.jpg" class="img-fluid imagen1" alt="">
                    </div>
                    <div class="col-lg-7 ">
                        <div class="row centrado">
                            <!--<div class="col-6 f" ><img src="img/itcj-escudo-rojo.png" class="img-fluid logoitcj " alt=""></div>
                            <div class="col-6"><img src="img/logo-TNM.png" class="img-fluid logoitcj" alt=""></div>    -->
                            <img src="img/inventario1.png" class="img-fluid imagen2" alt="">

                        </div>
                        
                        <form action="validarLogin.php" method="POST" class="" >
                            <div class="form-row centrado">
                                <div class="col-lg-7 ">
        
                                    <input type="email" name="email" placeholder="Correo"  class="form-control p-4">
                                </div>
                            </div>
                            <div class="form-row centrado">
                                <div class="col-lg-7 ">
                                    
                                    <input type="password" name="password" placeholder="Contraseña" class="form-control my-3 p-4">
                                </div>
                            </div>
                            <div class="form-row centrado">
                                <div class="col-lg-7">
                                    <button type="submit" name="submit" class="btn1 mt-3 bm-5" href="inicio.php">Entrar</button>
                                </div>
                            </div>
                            <div class="form-row texto">
                                <a href="#" >¿Olvidaste tu contraseña?</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!--JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>