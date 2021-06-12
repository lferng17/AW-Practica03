<?php

    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $album=$_POST["album"];
    //$caratula=$_POST["caratula"];
    $unidades=$_POST["unidades"];

    $nombre_imagen = $_FILES['caratula']['name']; //Primer corchete referencia al name del input type de crearCromo
    $tamanio_imagen = $_FILES['caratula']['size'];
    $carpeta_imagen = $_SERVER['DOCUMENT_ROOT'].'/Kiosko/ImagenesServidor/'; //Ruta de la carpeta destino en servidor
    move_uploaded_file($_FILES['caratula']['tmp_name'], $carpeta_imagen.$nombre_imagen);    //Movemos la imagen del dir.temporal al escogido

    

    require("conexion_BBDD.php");
    if (mysqli_connect_errno()){
        echo "Fallo al conectar la BBDD";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion,"utf8");
    $consulta="INSERT INTO cromos (nombre, precio, id_coleccion, caratula, unidades) VALUES ('$nombre', '$precio', '$album', '$nombre_imagen', '$unidades')";
    $resultados = mysqli_query($conexion,$consulta);

    if($resultados==false){
        echo "Error en la consulta";
    } else {
        echo "Registro guardado";
        echo $carpeta_imagen; 
    }

    mysqli_close($conexion);

?>