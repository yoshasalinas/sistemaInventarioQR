<?php

include('conexion_db.php');

$select = "SELECT * FROM usuario";
$alumno = mysqli_query($conexion, $select);
//$con->query("SELECT * FROM alumno");
//$con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php if (isset($_GET['create'])) { ?>
        <div class="alert aler-success" role="alert">
            El registro se creo correctamente!
        </div>
    <?php } ?>
    <?php if (isset($_GET['update'])) { ?>
        <div class="alert aler-success" role="alert">
            El registro se actualizo correctamente!
        </div>
    <?php } ?>
    <?php if (isset($_GET['delete'])) { ?>
        <div class="alert aler-success" role="alert">
            El registro se elimino correctamente!
        </div>
    <?php } ?>
    <h1>Tablas de Registros</h1>

    <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Usuario</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Correo</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($getresultado = $alumno->fetch_assoc()) { ?>
        <tr>
          <th scope="row"> <?php echo $getresultado['id'] ?> </th>
          <td><?php echo $getresultado['nombre'] ?></td>
          <td><?php echo $getresultado['apellido_paterno'] ?></td>
          <td><?php echo $getresultado['apellido_materno'] ?></td>
          <td><?php echo $getresultado['nombre_usuario'] ?></td>
          <td><?php echo $getresultado['contraseña'] ?></td>
          <td><?php echo $getresultado['corre'] ?></td>
          <!--botones-->
          <td>
            <a href="watch.php?id=<?= $getresultado['id'] ?>" class="btn btn-outline-primary">Ver</a>
          </td>
          <td>
            <a href="update.php?id=<?= $getresultado['id'] ?>" class="btn btn-outline-info">Actualizar</a>
          </td>
          <td>
            <a href="delete.php?id=<?= $getresultado['id'] ?>" class="btn btn-outline-danger">Eliminar</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>
