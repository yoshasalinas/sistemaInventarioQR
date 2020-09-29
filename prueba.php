<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="col-7 ">
                                    <div class="form-group">
                                        <label for="numSerial">Numero Serial:</label>
                                        <input type="text" class="form-control" id="numSerial" name="numSerial">
                                    </div>
                                <div class="form-group">
                                    <label for="numDispositivo">Numero Serial del Dispositivo:</label>
                                    <input type="text" class="form-control" id="numDispositivo" name="numDispositivo">
                                </div>
                                <div class="form-group">
                                    <label for="numTecNM">Numero Serial TecNM:</label>
                                    <input type="text" class="form-control" id="numTecNM" name="numTecNM">
                                </div>
                                <div class="form-group">
                                    <label for="tipoActivo">Tipo de Activo:</label>
                                    <select class="form-control" id="tipoActivo" name="tipoActivo">
                                    <option>Equipo</option>
                                    <option>Mobiliario</option>
                                    <option>Consumibles</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nombreActivo">Nombre Activo:</label>
                                    <input type="text" class="form-control" id="nombreActivo" name="nombreActivo">
                                </div>
                                <div class="form-group">
                                    <label for="fechaAlta">Fecha de alta: </label>
                                    <input type="date" class="form-control" id="fechaAlta" name="fechaAlta">
                                </div>
                                <div class="form-group">
                                    <label for="marca">Marca:</label>
                                    <input type="text" class="form-control" id="marca" name="marca">
                                </div>
                                <div class="form-group">
                                    <label for="modelo">Modelo:</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo">
                                </div>
                                <div class="form-group">
                                    <label for="color">Color:</label>
                                    <input type="text" class="form-control" id="color" name="color">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripcion:</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                                </div>
                                <div class="form-group">
                                    <label for="imagen">Imagen:</label>
                                    <input type="file" class="form-control-file" id="imagen" name="imagen">
                                </div>
                                
                                <div class="form-group">
                                    <label for="tipoActivo">Tipo de Ubicacion:</label>
                                    <select class="form-control" id="tipoActivo" name="tipoActivo">
                                    <option>Sala</option>
                                    <option>Bodega</option>
                                    <option>Salon/Oficina</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="nombreUbicacion">Nombre Ubicacion:</label>
                                    <input type="text" class="form-control" id="nombreUbicacion" name="nombreUbicacion">
                                </div>

                                <div class="form-group">
                                    <label for="tipoEstatus">Tipo Estatus:</label>
                                    <select class="form-control" id="TipoEstatus" name="tipoEstatus">
                                    <option>En uso</option>
                                    <option>Dañado</option>
                                    <option>En reparacion</option>
                                    <option>Disponible</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="codigoQR">Codigo QR:</label>
                                        <input type="file" class="form-control-file" id="codigoQR" name="codigoQr">
                                    </div>
                                </div>

                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>