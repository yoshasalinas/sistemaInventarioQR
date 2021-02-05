<?php
include('conexion_db.php');

$db = new Db();
$id = $_GET['id'];
$posData = [];
$posData[0]= $id;

$get_usuario= "SELECT * FROM usuarios WHERE id_usuario= ?";
$result1 = $db -> Db_query_select_all("s",$get_usuario,[$posData[0]]);

if(mysqli_fetch_array($result1)){
    $eliminar = "DELETE FROM usuarios WHERE usuarios.id_usuario = ?";
$result = $db-> Db_query_delete("i",$eliminar,$posData);

if(!$result === TRUE){
    //El usuario se elimina correctamente
    header("location:usuarios.php?eliminar=1");
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