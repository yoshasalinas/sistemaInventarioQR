<?php
include('conexion_db.php');

$db = new Db();
$id = $_GET['id'];
$posData = [];
$posData[0]= $id;

$eliminar = "DELETE FROM usuarios WHERE id_usuario = ?";
$result = $db-> Db_query_delete("i",$eliminar,$posData);

if($result){
    header("location:usuarios.php");
}else{
    
    echo"<script> alert('No se pudo elimimar'); 
    window.history.go(-1);</script>";
}

?>