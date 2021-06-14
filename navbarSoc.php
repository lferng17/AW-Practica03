<!DOCTYPE html5>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="navegador">
        <ul>
            <li style="float:left"> <img src = "/AW-Practica03-main/ImagenesServidor/logo.png" width="100" /></li>
            <li id="navBar" style="float:right"><a href="funciones/cerrar_sesion.php">CERRAR SESION</a></li>
            <li id="navBar"><a href="tienda.php">TIENDA</a></li>
            <li id="navBar"><a href="verColecciones.php">VER LA COLECCIÓN</a></li>
            <li id="navBar"><a href="ganarPuntos.php">GANAR PUNTOS</a></li>
            <li style="float:right"><a>Hola <?php echo $nombre_usuario ?>, su saldo es: <?php echo $saldo_usuario ?></a></li>
        </ul>
    </div>
</body>

</html>
