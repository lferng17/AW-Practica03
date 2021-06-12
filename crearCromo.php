<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Crear Coleccion</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION["admin"])) {
        header("Location:login.php");
    }

    ?>
    <div id="navegador">
        <ul>
            <li><a href="crearColeccion.php">Crear Coleccion</a></li>
            <li><a href="crearCromo.php">Crear Cromo</a></li>
            <li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
            <li><a href="tienda.php">Tienda</a></li>
            <li>Hola <?php echo $nombre_usuario?>, su saldo es: <?php echo $saldo_usuario?>
        </ul>
    </div>
    <form action="insertarCromo.php" method="get" name="formCromo">
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