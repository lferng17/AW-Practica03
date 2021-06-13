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
    <title>Crear Cromo</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
<div id="navegador">
        <ul>
            <li><a href="crearColeccion.php">CREAR COLECCIÓN</a></li>
            <li><a class="active" href="crearCromo.php">CREAR CROMO</a></li>
            <li style="float:right"><a href="cerrar_sesion.php">CERRAR SESION</a></li>
            <li><a href="tienda.php">TIENDA</a></li>
            <li><a href="verColecciones.php">VER LA COLECCIÓN</a></li>
            <li><a href="cuestionarioEuro.php">GANAR PUNTOS</a></li>
        </ul>
    </div>
    <form action="insertarCromo.php" method="post" name="formCromo" enctype="multipart/form-data">
        <div>
            Nombre: <br>
            <input type="text" name="nombre" id="nombre"> <br>
            Precio: <br>
            <input type="text" name="precio" id="precio"> <br>
            Álbum:<br>
            <input type="text" name="album" id="album"><br>
            Carátula: <br>
            <input type="file" name="caratula" id="caratula"><br>
            Unidades: <br>
            <input type="text" name="unidades" id="unidades"><br>

            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>