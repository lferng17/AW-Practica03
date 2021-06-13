<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Crear Coleccion</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="navegador">
        <ul>
            <li><a class="active" href="crearColeccion.php">CREAR COLECCIÓN</a></li>
            <li><a href="crearCromo.php">CREAR CROMO</a></li>
            <li style="float:right"><a href="cerrar_sesion.php">CERRAR SESION</a></li>
            <li><a href="tienda.php">TIENDA</a></li>
            <li><a href="verColecciones.php">VER LA COLECCIÓN</a></li>
            <li><a href="cuestionarioEuro.php">GANAR PUNTOS</a></li>
        </ul>
    </div>
    <form action="insertarColeccion.php" method="post" name="formColeccion" enctype="multipart/form-data">
        Nombre: <br>
        <input type="text" name="nombre"> <br>
        Precio: <br>
        <input type="text" name="precio"> <br>
        Carátula: <br>
        <input type="file" name="caratula"> <br>
        <input type="submit" name="subir" value="Enviar">
    </form>
</body>

</html>