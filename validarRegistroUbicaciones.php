<?php

include('conexion_db.php');
$db = new Db();

$posData=[];
$posData[0]= $_POST['tipoUbicacion'];
$posData[1]= $_POST['nombre'];
$posData[2]= $_POST['edificio'];
$posData[3]= $_POST['descripcion']; //null
$posData[4]= $_POST['capacidad']; //null


if(!empty($posData[0]) &&!empty($posData[1]) && !empty($posData[2])){ //valida campos vacios

	//valida nombreUbicacion no se encuentran en la bd agregara ese nueva ubicacion
	$get_ubicaciones="SELECT * FROM ubicaciones WHERE nombre_ubicacion =? ";
	$result = $db-> Db_query_select_all("s",$get_ubicaciones,[$posData[1]]);
	if(mysqli_num_rows($result) == 0){
		$insert_ubicaciones = "INSERT INTO ubicaciones (tipo_ubicacion, nombre_ubicacion, nombre_edificio, descripcion_ubicacion, capacidad) 
		VALUES (?,?,?,?,?)";
		$result1 = $db -> Db_query_save("ssssi",$insert_ubicaciones,$posData);
			if(!$result1 === True){
				//
			header("location:configuracionUbicaciones.php?registro=1");
			}else{ echo '<script> alert("Error"); </script>';}
	}else{
		echo"<script> alert('Ya existe esta ubicacion'); 
    	window.history.go(-1);</script>";
	}

}else{
	echo"<script> alert('Llene los campos'); 
	window.history.go(-1);</script>";
}


?>
