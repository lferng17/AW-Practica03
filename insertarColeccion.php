<?php
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
//$caratula = $_POST["caratula"];

$nombre_imagen = $_FILES['caratula']['name']; //Primer corchete referencia al name del input type de crearCromo
$tamanio_imagen = $_FILES['caratula']['size'];
$tipo_imagen = $_FILES['caratula']['type'];

if($tamanio_imagen <= 1000000){ //Menor a un mega

    if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png") {

        $carpeta_imagen = $_SERVER['DOCUMENT_ROOT'].'/AW-Practica03-main/ImagenesServidor/'; //Ruta de la carpeta destino en servidor
        move_uploaded_file($_FILES['caratula']['tmp_name'], $carpeta_imagen.$nombre_imagen);    //Movemos la imagen del dir.temporal al escogido
        
    } else {
        echo "Solo se pueden subir .jpeg, .jpg o .png";
    }
    
} else {
    echo "El tamaño de la imagen es muy grande";
}


require("conexion_BBDD.php");
if (mysqli_connect_errno()) {
    echo "Fallo al conectar la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");
$consulta = "INSERT INTO colecciones (nombre, precio, caratula) VALUES ('$nombre', '$precio', '$nombre_imagen')";
$resultados = mysqli_query($conexion, $consulta);

if ($resultados == false) {
    echo mysqli_error($conexion);
} else {
    "Resgistro guardado";
}

mysqli_close($conexion);