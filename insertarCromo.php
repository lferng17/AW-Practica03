<?php

    $nombre=$_GET["nombre"];
    $precio=$_GET["precio"];
    $album=$_GET["album"];
    $caratula=$_GET["caratula"];
    $unidades=$_GET["unidades"];

    require("conexion_BBDD.php");
    if (mysqli_connect_errno()){
        echo "Fallo al conectar la BBDD";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la BBDD");
    mysqli_set_charset($conexion,"utf8");
    $consulta="INSERT INTO cromos (nombre, precio, id_coleccion, caratula, unidades) VALUES ('$nombre', '$precio', '$album', '$caratula', '$unidades')";
    $resultados = mysqli_query($conexion,$consulta);

    if($resultados==false){
        echo "Error en la consulta";
    } else {
        echo "Registro guardado";
    }

    mysqli_close($conexion);

?>