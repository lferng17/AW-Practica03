<!DOCTYPE html5>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <div id="navegador">
        <ul>
            <li style="float:right"><a href="cerrar_sesion.php">CERRAR SESION</a></li>
            <li><a href="tienda.php">TIENDA</a></li>
            <li><a href="verColecciones.php">VER LA COLECCIÓN</a></li>
            <li><a href="cuestionarioEuro.php">GANAR PUNTOS</a></li>
            <li style="float:right"><a>Hola <?php echo $nombre_usuario ?>, su saldo es: <?php echo $saldo_usuario ?></a></li>
        </ul>
    </div>
</body>
</html>