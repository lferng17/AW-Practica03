<?php

    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $album=$_POST["album"];
    $caratula=$_POST["caratula"];
    $unidades=$_POST["unidades"];

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