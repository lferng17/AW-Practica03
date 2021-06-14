<?php
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$estado = $_POST["estado"];

$nombre_imagen = $_FILES['caratula']['name']; //Primer corchete referencia al name del input type de crearCromo
$tamanio_imagen = $_FILES['caratula']['size'];
$tipo_imagen = $_FILES['caratula']['type'];

if($tamanio_imagen <= 1000000){ //Menor a un mega

    if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png") {

        $carpeta_imagen = $_SERVER['DOCUMENT_ROOT'].'/AW-Practica03-main/ImagenesServidor/'; //Ruta de la carpeta destino en servidor
        move_uploaded_file($_FILES['caratula']['tmp_name'], $carpeta_imagen.$nombre_imagen);    //Movemos la imagen del dir.temporal al escogido
        
    } else {
        echo '<script language="javascript">';
        echo 'alert("Solo se pueden subir .jpeg, .jpg o .png")';
        echo '</script>';
        echo "<script>location.href='../crearColeccion.php';</script>"; 
    }
    
} else {
    echo '<script language="javascript">';
    echo 'alert("El tamaño de la imagen es muy grande")';
    echo '</script>';
    echo "<script>location.href='../crearColeccion.php';</script>"; 
}


require("conexion_BBDD.php");
if (mysqli_connect_errno()) {
    echo "Fallo al conectar la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");
$consulta = "INSERT INTO colecciones (nombre, precio, caratula, estado) VALUES ('$nombre', '$precio', '$nombre_imagen', $estado)";
$resultados = mysqli_query($conexion, $consulta);

if ($resultados == false) {
    echo mysqli_error($conexion);
} else {
    echo '<script language="javascript">';
    echo 'alert("Registro Guardado con éxito. Volviendo atrás")';
    echo '</script>';
    echo "<script>location.href='../crearColeccion.php';</script>"; 
}

mysqli_close($conexion);