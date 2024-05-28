<?php
include('conexion_db.php');

$db = new Db();
$id = $_GET['id'];
$posData = [];
$posData[0]= $id;

$get_estatus= "SELECT * FROM estatus WHERE id_estatus= ?";
$result1 = $db -> Db_query_select_all("s",$get_estatus,[$posData[0]]);

if(mysqli_fetch_array($result1)){
    $eliminar = "DELETE FROM estatus WHERE estatus.id_estatus = ?";
$result = $db-> Db_query_delete("i",$eliminar,$posData);

if(!$result === TRUE){
    //El usuario se elimina correctamente
    header("location:configuracionEstatus.php?eliminar=1");
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