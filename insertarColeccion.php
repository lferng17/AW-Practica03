<?php

$nombre = $_GET["nombre"];
$precio = $_GET["precio"];
$caratula = $_GET["caratula"];

require("conexion_BBDD.php");
if (mysqli_connect_errno()) {
    echo "Fallo al conectar la BBDD";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
mysqli_set_charset($conexion, "utf8");
$consulta = "INSERT INTO colecciones (nombre, precio, caratula) VALUES ('$nombre', '$precio', '$caratula')";
$resultados = mysqli_query($conexion, $consulta);

if ($resultados == false) {
    echo mysqli_error($conexion);
} else {
    "Resgistro guardado";
}

mysqli_close($conexion);