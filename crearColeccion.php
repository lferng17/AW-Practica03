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
</head>

<body>
    <div id="navegador">
        <ul>
            <li><a href="crearColeccion.php">Crear Coleccion</a></li>
            <li><a href="crearCromo.php">Crear Cromo</a></li>
            <li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
            <li><a href="tienda.php">Tienda</a></li>
            <li>Hola <?php echo $nombre_usuario?>, su saldo es: <?php echo $saldo_usuario?>
        </ul>
    </div>
    <form action="insertarColeccion.php" method="get" name="formColeccion">
        Nombre: <br>
        <input type="text" name="nombre"> <br>
        Precio: <br>
        <input type="text" name="precio"> <br>
        Carátula: <br>
        <input type="file" name="caratula"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>