<?php
include('conexion_db.php');

$db = new Db();
$id = $_GET['id'];
$posData = [];
$posData[0]= $id;

$get_ubicacion= "SELECT * FROM ubicaciones WHERE id_ubicacion= ?";
$result1 = $db -> Db_query_select_all("s",$get_ubicacion,[$posData[0]]);

if(mysqli_fetch_array($result1)){
    $eliminar = "DELETE FROM ubicaciones WHERE ubicaciones.id_ubicacion = ?";
$result = $db-> Db_query_delete("i",$eliminar,$posData);

if(!$result === TRUE){
    //El usuario se elimina correctamente
    header("location:configuracionUbicaciones.php?eliminar=1");
}else{
    echo"<script> alert('No se pudo elimimar'); 
    window.history.go(-1);</script>";
}
}else{
    echo '<script>
    alert("El correo ya existe");
    </script>';

}


?>