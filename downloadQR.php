<?php
    include('conexion_db.php');
    $db = new Db();
    $id = $_GET['id'];
    $posData = [];
    $posData[0]= $id;

    //Buscar el archivo en la bd
    $select = "SELECT imagen_codigo_qr FROM activos WHERE numeroSerial = ?";
    $resultado = $db -> Db_query_select_all("s",$select,[$posData[0]]);


    if($resultado){
        if(mysqli_num_rows($resultado) == 1){
            $fila = mysqli_fetch_assoc($resultado);             
            $imagenBlob = $fila['imagen_codigo_qr'];
            $data = base64_decode($imagenBlob); 
            $imagen = imagecreatefrompng($data);

           // header('Content-Type: application/octet-stream');
            //header('Content-Disposition: attachment; filename="' . basename($imagenBlob) . '"');

            header('Content-Type: image/png');
            header('Content-Disposition: attachment; filename="' . basename($imagen) . '"');
            imagepng($imagen);

            //echo $imagen;
            // Liberar memoria
            imagedestroy($imagen);
    } else {
        echo "Imagen no encontrada en la base de datos";
       // header("Location: registroMobiliario.php?registro=1");
    }
    } else {
    echo "Error en la consulta a la base de datos";
    }

    
/*
    if(mysqli_num_rows($resultado) == 1){
        $fila = mysqli_fetch_assoc($resultado);
        $archivo = $fila['imagen_codigo_qr'];
        //$ruta_archivo = "Files/". $archivo;

        //Verificar que exista en el servidor
        if(file_exists($ruta_archivo)){
            //enviar el archivo al navegador
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename"'.$archivo. '"');
            readfile($ruta_archivo);
        }else{
            echo "El archivo no existe en el servidor";
        }
     } else{
        echo "El archivo no se encontro en la base de datos";
        }
    */
        //https://www.youtube.com/watch?v=-s_MRTDLhnI&ab_channel=SOFTCODEPM

        //tengo que convertir las imagenes blob
        //https://www.youtube.com/watch?v=4l7o36Gjfxc&ab_channel=pauvel


?>